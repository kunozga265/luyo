<x-app-layout>
    <x-slot name="heading">
        + Edit Blog
    </x-slot>

    <x-slot name="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="{{route('admin-blogs')}}" class="breadcrumbs__url">Blogs</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            Edit Blog
        </li>
    </x-slot>

    @push('scripts')
        <script type="text/javascript">
            CKEDITOR.replace('body', {
                filebrowserUploadUrl: "{{route('blogs.image-upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form',
                toolbar:[
                    { name: 'styles', items: [ 'FontSize' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline',] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                    { name: 'links', items: [ 'Link', 'Unlink'] },
                    { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule'] },
                    { name: 'tools', items: [ 'Maximize'] },
                ]
            });
        </script>
    @endpush

    <!-- Contact Form -->
    <form id="new-project-form" class=" material" method="post" action="{{route('admin-blogs-update',['slug'=>$blog->slug])}}" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <div class="">
                <img src="{{asset($blog->cover_photo)}}" class="project__featured-img" alt="">
            </div>
            <!-- Cover Photo -->
            <div class="col-md-12 material__form-group form-group">
                <span>Cover Photo</span>
                <input type="file" name="cover_photo" id="cover_photo" class="form-input material__input pt-8"     >
            </div>

            <!-- Title -->
            <div class="col material__form-group form-group">
                <span>Title</span>
                <input type="text" name="title" id="title" class="form-input material__input" value="{{$blog->title}}" required="">
                <span class="material__underline"></span>
            </div>

            <!-- Body -->
            <div class="col-md-12 material__form-group form-group">
                <span>Body</span>
                <textarea id="" name="body" rows="70" class="form-input material__input" required="">{{$blog->body}}</textarea>
                <span class="material__underline"></span>
            </div>
        </div>


        <input type="submit" class="btn btn--lg btn--color btn--button" value="Edit" id="submit-message">
        <div id="msg" class="message"></div>
    </form>



</x-app-layout>
