@extends('master')

@section('title','Sahas Blog | Edit Blog')
@section('Body')
    <div class="col-md-12">
        <form id="TypeValidation" class="form-horizontal process" action="{{URL::to('/blog/'.$blog->id)}}" method="post"
              enctype="multipart/form-data">
            @method('PUT')
            <div class="card ">
                <div class="card-header card-header-success card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">Blog</h4>
                    </div>
                </div>
                <div class="card-body ">

                    <div class="row">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label class="bmd-label-floating">Category (*)</label>
                                <select class="select2" data-size="7" name="category"
                                        data-style="select-with-transition" title="{{old('category')}}" required="true">
                                    <option disabled selected>Select Category</option>
                                    @foreach($category as $category)
                                        <option value="{{$category->id}}"
                                                @if($category->id==$blog->category)
                                                selected
                                                @endif
                                        >{{ucfirst($category->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label class="bmd-label-floating">Blog Title(*)</label>
                                <input class="form-control" type="text" maxlength="100" value="{{$blog->title}}"
                                       name="title" required="true"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                {{--tinymce--}}
                                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                                <textarea name="body" class="form-control my-editor">{{$blog->body}}</textarea>
                                <script>
                                    var editor_config = {
                                        path_absolute: "{{url('/')}}/",
                                        selector: "textarea.my-editor",
                                        plugins: [
                                            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                            "searchreplace wordcount visualblocks visualchars code fullscreen",
                                            "insertdatetime media nonbreaking save table contextmenu directionality",
                                            "emoticons template paste textcolor colorpicker textpattern"
                                        ],
                                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                                        relative_urls: false,
                                        file_browser_callback: function (field_name, url, type, win) {
                                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                                            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                                            if (type == 'image') {
                                                cmsURL = cmsURL + "&type=Images";
                                            } else {
                                                cmsURL = cmsURL + "&type=Files";
                                            }

                                            tinyMCE.activeEditor.windowManager.open({
                                                file: cmsURL,
                                                title: 'Filemanager',
                                                width: x * 0.8,
                                                height: y * 0.8,
                                                resizable: "yes",
                                                close_previous: "no"
                                            });
                                        }
                                    };

                                    tinymce.init(editor_config);
                                </script>
                                {{---------end of tiny mce---------}}

                            </div>
                        </div>
                    </div>

                    <label class="col-sm-1 col-form-label ml-5">Notice photo*</label>

                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <img src="{{url('/').Storage::url($blog->image)}}">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                                  <span class="btn btn-primary  btn-round btn-file">
                                    <label for="logo" class="fileinput-new">Choose Photo</label>
                                      <span for="logo" class="fileinput-exists">Change Photo</span>
                                      <input type="file" value="{{$blog->image}} " id="image"
                                             name="image"/>
                                  </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                               data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>


                    <div class="row">
                        <label class="col-sm-9 col-form-label"></label>
                        <button class="btn btn-primary btn-round float-right mr-1">
                            Update Blog
                        </button>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@stop