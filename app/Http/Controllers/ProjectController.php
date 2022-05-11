<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::orderBy('completed_date','DESC')->get();

        return view('admin.projects.index')->with('projects',ProjectResource::collection($projects));
    }

    public function show($slug)
    {
        $project=Project::where('slug',$slug)->first();
        if(is_object($project)){
            return view('admin.projects.show')->with('project',$project);
        }else
            return Redirect::route('admin-projects')->with('status','Project not found');

    }

    public function edit($slug)
    {
        $project=Project::where('slug',$slug)->first();
        if(is_object($project)){
            return view('admin.projects.edit')->with('project',$project);
        }else
            return Redirect::route('admin-projects')->with('status','Project not found');

    }

    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'title'             =>  ['required'],
            'cover_photo'       =>  ['required'],
            'client'            =>  ['required'],
            'location'          =>  ['required'],
            'completed_date'    =>  ['required'],
            'body'              =>  ['required'],
        ])->validate();

        $fileName=Str::slug($request->title)."-".uniqid().".".$request->cover_photo->extension();
        $request->cover_photo->move(public_path('images/projects'), $fileName);

        $slug=Str::slug($request->title)."-".date("Y-m-d");

        $date=Carbon::createFromFormat("m/d/Y",$request->completed_date)->getTimestamp();

        Project::create([
            'title'             =>  ucwords($request->title),
            'slug'              =>  $slug,
            'cover_photo'       =>  'images/projects/'.$fileName,
            'client'            =>  ucwords($request->client),
            'location'          =>  ucwords($request->location),
            'completed_date'    =>  $date,
            'body'              =>  Purifier::clean($request->body),
        ]);

        return Redirect::route('admin-projects');
    }

    public function update(Request $request, $slug)
    {


        $project=Project::where('slug',$slug)->first();

        if(is_object($project)){

            Validator::make($request->all(), [
                'title'             =>  ['required'],
                'client'            =>  ['required'],
                'location'          =>  ['required'],
                'completed_date'    =>  ['required'],
                'body'              =>  ['required'],
            ])->validate();

            // initialise photo
            $cover_photo=$project->cover_photo;

            //if photo is set then upload image
            if (isset($request->cover_photo)){
                $fileName=Str::slug($request->title)."-".uniqid().".".$request->cover_photo->extension();
                $request->cover_photo->move(public_path('images/projects'), $fileName);

                //delete old image
                File::delete($cover_photo);
                $cover_photo='images/projects/'.$fileName;
            }



            $date=Carbon::createFromFormat("m/d/Y",$request->completed_date)->getTimestamp();

            $project->update([
                'title'             =>  ucwords($request->title),
                'cover_photo'       =>  $cover_photo,
                'client'            =>  ucwords($request->client),
                'location'          =>  ucwords($request->location),
                'completed_date'    =>  $date,
                'body'              =>  Purifier::clean($request->body),
            ]);

            return Redirect::route('admin-projects-view',['slug'=>$project->slug]);

        }else
            return Redirect::route('admin-projects')->with('status','Project not found');


    }

    public function destroy($slug)
    {
        $project=Project::where('slug',$slug)->first();
        if(is_object($project)){

            //delete old image
            File::delete($project->cover_photo);

            $project->delete();

            return Redirect::route('admin-projects');
        }else
            return Redirect::route('admin-projects')->with('status','Project not found');

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images/projects'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/projects/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
