<x-app-layout>
    <x-slot name="heading">
        + New Project
    </x-slot>

    <x-slot name="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="{{route('admin-projects')}}" class="breadcrumbs__url">Projects</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            New Project
        </li>
    </x-slot>

    {{--<x-slot name="scripts">
        CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('projects.image-upload', ['_token' => csrf_token() ])}}",
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
    </x-slot>--}}

    @push('scripts')
        <script type="text/javascript">
            CKEDITOR.replace('body', {
                filebrowserUploadUrl: "{{route('projects.image-upload', ['_token' => csrf_token() ])}}",
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
    <form id="new-project-form" class=" material" method="post" action="{{route('admin-projects-store')}}" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <!-- Cover Photo -->
            <div class="col-md-12 material__form-group form-group">
                <span>Cover Photo</span>
                <input type="file" name="cover_photo" id="cover_photo" class="form-input material__input pt-8" required>

{{--                <span class="material__underline"></span>--}}
            </div>

            <!-- Title -->
            <div class="col-md-6 material__form-group form-group">
                <span>Title</span>
                <input type="text" name="title" id="title" class="form-input material__input" required="">
{{--                <label for="name" class="material__label">Title</label>--}}
                <span class="material__underline"></span>
            </div>

            <!-- Client -->
            <div class="col-md-6 material__form-group form-group">
                <span>Client</span>
                <input type="text" name="client" id="client" class="form-input material__input" required="">
{{--                <label for="name" class="material__label">Client</label>--}}
                <span class="material__underline"></span>
            </div>

            <!-- Location -->
            <div class="col-md-6 material__form-group form-group">
                <span>Location</span>
                <input type="text" name="location" id="location" class="form-input material__input" required="">
{{--                <label for="name" class="material__label">Location</label>--}}
                <span class="material__underline"></span>
            </div>

            <!-- Completed Date -->
            <div class="col-md-6 material__form-group form-group">
                <span>Completed Date</span>
{{--                <input type="text" name="completed_date" id="completed_date" class="form-input material__input" required="">--}}
                <input  id='datetimepicker' name="completed_date"  class="form-control material__input" type="text">
{{--                <label for="datetimepicker" class="material__label"> Completed Date</label>--}}
                <span class="material__underline"></span>
                {{--<div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                        <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>--}}
            </div>

            <!-- Body -->
            <div class="col-md-12 material__form-group form-group">
                <span>Body</span>
                <textarea id="" name="body" rows="7" class="form-input material__input" required=""></textarea>
{{--                <label for="message" class="material__label">Body</label>--}}
                <span class="material__underline"></span>
            </div>
        </div>


        <input type="submit" class="btn btn--lg btn--color btn--button" value="Create" id="submit-message">
        <div id="msg" class="message"></div>
    </form>



</x-app-layout>
