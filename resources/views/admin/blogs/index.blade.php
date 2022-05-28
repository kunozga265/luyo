<x-app-layout>
    <x-slot name="heading">
        Blogs
        <a href="{{route('admin-blogs-new')}}" class="btn btn--md btn--color">
            <span>New +</span>
        </a>
    </x-slot>

    <x-slot name="breadcrumbs">
        <li class="breadcrumbs__item breadcrumbs__item--current">
            Blogs
        </li>
    </x-slot>

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

    {{$blogs->links()}}
</x-app-layout>
