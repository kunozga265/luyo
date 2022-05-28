<x-app-layout>
    <x-slot name="heading">
        Dashboard
    </x-slot>

    <x-slot name="breadcrumbs">
    </x-slot>

    <div class="py-12">
        <p>Recent Projects</p>
        @foreach ($projects as $project)


            <div class="admin-project">
                <div class="cover_photo" style="background-image: url({{asset($project->cover_photo)}})"></div>
                <a href="{{route('admin-projects-view',['slug'=>$project->slug])}}">
                    <p>{{date('jS F, Y',$project->completed_date)}}</p>
                    <h6>{{$project->title}}</h6>
                    <span>{{$project->client}}</span>
                    <span>  |  </span>
                    <span>{{$project->location}}</span>
                    <div class="admin-options">
                        <a href="{{route('admin-projects-edit',['slug'=>$project->slug])}}" class="edit" >Edit</a>
                        <a href="{{route('admin-projects-delete',['slug'=>$project->slug])}}" class="delete">Delete</a>
                        {{--<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>--}}
                    </div>
                </a>

            </div>

        @endforeach
        <a style="margin-top: 20px" href="{{route('admin-projects')}}" class="btn btn--md btn--color">
            <span>View All</span>
        </a>


        <p style="margin-top: 60px">Recent Blogs</p>
        @foreach ($blogs as $blog)


            <div class="admin-project">
                <div class="cover_photo" style="background-image: url({{asset($blog->cover_photo)}})"></div>
                <a href="{{route('admin-blogs-view',['slug'=>$blog->slug])}}">
                    <h6>{{$blog->title}}</h6>
                    <span>{{$blog->created_at->diffForHumans()}}</span>
                    <div class="admin-options">
                        <a href="{{route('admin-blogs-edit',['slug'=>$blog->slug])}}" class="edit" >Edit</a>
                        <a href="{{route('admin-blogs-delete',['slug'=>$blog->slug])}}" class="delete">Delete</a>
                        {{--<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>--}}
                    </div>
                </a>

            </div>

        @endforeach
        <a style="margin-top: 20px" href="{{route('admin-blogs')}}" class="btn btn--md btn--color">
            <span>View All</span>
        </a>


    </div>
</x-app-layout>
