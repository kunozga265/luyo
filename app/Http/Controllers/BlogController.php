<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use function asset;
use function public_path;
use function view;

class BlogController extends Controller
{
    public function index()
    {
        $blogs=Blog::latest()->paginate(10);

        return view('admin.blogs.index')->with('blogs',$blogs);
    }

    public function show($slug)
    {
        $blog=Blog::where('slug',$slug)->first();
        if(is_object($blog)){
            return view('admin.blogs.show')->with('blog',$blog);
        }else
            return Redirect::route('admin-blogs')->with('error','Blog not found');

    }

    public function edit($slug)
    {
        $blog=Blog::where('slug',$slug)->first();
        if(is_object($blog)){
            return view('admin.blogs.edit')->with('blog',$blog);

        }else
            return Redirect::route('admin-blogs')->with('error','Blog not found');

    }

    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'title'             =>  ['required'],
            'cover_photo'       =>  ['required'],
            'body'              =>  ['required'],
        ])->validate();

        $fileName=Str::slug($request->title)."-".uniqid().".".$request->cover_photo->extension();
        $request->cover_photo->move(public_path('images/blogs'), $fileName);

        $slug=Str::slug($request->title)."-".date("Y-m-d");

        Blog::create([
            'title'             =>  ucwords($request->title),
            'slug'              =>  $slug,
            'cover_photo'       =>  'images/blogs/'.$fileName,
            'body'              =>  $request->body,
        ]);

        return Redirect::route('admin-blogs')->with('success','Blog created!');
    }

    public function update(Request $request, $slug)
    {

        $blog=Blog::where('slug',$slug)->first();

        if(is_object($blog)){

            Validator::make($request->all(), [
                'title'             =>  ['required'],
                'body'              =>  ['required'],
            ])->validate();

            // initialise photo
            $cover_photo=$blog->cover_photo;

            //if photo is set then upload image
            if (isset($request->cover_photo)){
                $fileName=Str::slug($request->title)."-".uniqid().".".$request->cover_photo->extension();
                $request->cover_photo->move(public_path('images/blogs'), $fileName);

                //delete old image
                File::delete($cover_photo);
                $cover_photo='images/blogs/'.$fileName;
            }

            $blog->update([
                'title'             =>  ucwords($request->title),
                'cover_photo'       =>  $cover_photo,
                'body'              =>  $request->body,
            ]);

            return Redirect::route('admin-blogs-view',['slug'=>$blog->slug])->with('success','Blog updated!');

        }else
            return Redirect::route('admin-blogs')->with('error','Blog not found');


    }

    public function destroy($slug)
    {
        $blog=Blog::where('slug',$slug)->first();
        if(is_object($blog)){

            //delete old image
            File::delete($blog->cover_photo);

            $blog->delete();

            return Redirect::route('admin-blogs')->with('success','Blog deleted!');
        }else
            return Redirect::route('admin-blogs')->with('error','Blog not found');

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images/blogs'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/blogs/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
