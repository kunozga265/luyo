<x-app-layout>
    <x-slot name="heading">
        Projects
        <a href="{{route('admin-projects-new')}}" class="btn btn--md btn--color">
            <span>New +</span>
        </a>
    </x-slot>

    <x-slot name="breadcrumbs">
        <li class="breadcrumbs__item breadcrumbs__item--current">
            Projects
        </li>
    </x-slot>

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
</x-app-layout>
