<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Project;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function contactUs(Request $request)
    {

        Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
        ])->validate();

        Mail::to('info@luyoconstruction.com')->send(new ContactUs(
            $request->subject,
            $request->name,
            $request->email,
            $request->message
        ));

        if(count(Mail::failures()) > 0){
            return Redirect::back()->with('error',"An error occurred. Try again.");
        }else
            return Redirect::back()->with('success','Information submitted!');

    }

    public function changePassword(Request $request)
    {
        $user=User::find(Auth::id());

        Validator::make($request->all(), [
            'password' => ['required', 'string','min:8'],
            'newPassword'=> ['required', 'string','min:8']
        ])->validate();

        if(Hash::check($request->password, $user->password)){
            $user->forceFill([
                'password' => Hash::make($request->newPassword),
            ])->save();
            return Redirect::route('dashboard')->with('success','Password updated!');
        }else
            return Redirect::back()->with('error',"The provided password does not match your current password.");

    }

    public function dashboard()
    {

        $projects=Project::orderBy('completed_date','DESC')->limit(3)->get();
        $blogs=Blog::latest()->limit(3)->get();

        return view('dashboard')->with('projects',$projects)->with('blogs',$blogs);
    }

    public function home()
    {
        $page=Page::where('code','home')->first();
        $page->contents=json_decode($page->contents);

        $projects=Project::orderBy('completed_date','DESC')->limit(3)->get();
        $blogs=Blog::latest()->limit(3)->get();

        return view('pages.home')->with('projects',$projects)->with('blogs',$blogs)->with('page',$page);
    }

    public function services()
    {
        $page=Page::where('code','services')->first();
        $page->contents=json_decode($page->contents);

        return view('pages.services')->with('page',$page);
    }


    public function projects()
    {
        $page=Page::where('code','projects')->first();
        $page->contents=json_decode($page->contents);

        $projects=Project::orderBy('completed_date','DESC')->get();

        $years=[];

        //initialise
        $years[]='All';

        foreach ($projects as $project){

            //if year is not in years append it
            $year=date('Y',$project->completed_date);
            if (!array_search($year,$years,true))
                $years[]=$year;

        }
        return view('pages.projects')->with('projects',$projects)->with('years',$years)->with('page',$page);;
    }

    public function projectShow($slug)
    {
        $project=Project::where('slug',$slug)->first();
        if(is_object($project)){
            return view('pages.projects-show')->with('project',$project);
        }else
            return Redirect::route('home');
    }

    public function construction()
    {
        $page=Page::where('code','construction_plant')->first();
        $page->contents=json_decode($page->contents);

        return view('pages.construction-plant')->with('page',$page);
    }

    public function blogs()
    {
        $page=Page::where('code','blog')->first();
        $page->contents=json_decode($page->contents);

        $blogs=Blog::latest()->paginate(10);
        return view('pages.blog')->with('blogs',$blogs)->with('page',$page);
    }

    public function blogShow($slug)
    {
        $blog=Blog::where('slug',$slug)->first();
        if(is_object($blog)){
            return view('pages.blog-show')->with('blog',$blog);
        }else
            return Redirect::route('home');
    }

    public function aboutUs()
    {
        $page=Page::where('code','about_us')->first();
        $page->contents=json_decode($page->contents);

        return view('pages.aboutUs')->with('page',$page);
    }
}
