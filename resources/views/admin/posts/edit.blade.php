@extends('layouts.admin')


@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
@endsection

@section('content')

    <x-breadcrumb>
        Posts / Edit
    </x-breadcrumb->

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Post Edit {{$post->id}}</h3>
          </div>
          <!-- /.card-header -->
          <form action="{{route('admin.posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
               <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$post->title}}" >
               </div>
               <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Enter Description" name="description"  value="{{$post->description}}">
                </div>
               <div class="form-group">
                  <label>Body</label>
                  <textarea name="body" rows="5" cols="40" class="form-control tinymce-editor">{!!$post->body!!}</textarea>
              </div>
               <div class="form-group">
                  <label for="exampleInputFile ">Image</label>
                  <div class="input-group">
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                     </div>
                     <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" id="">
                    <option  {{$post->status==1 ? 'selected' : ''  }} value="1">Active</option>
                    <option {{$post->status==0 ? 'selected' : ''  }}  value="0">Inactive</option>
                </select>
              </div>
               <div class="form-group">
                  <label for="">Categories</label>
                  <select name="category_id[]" class="form-control" id="" multiple>
                     @foreach ($categories as $category )
                        <option
                            @foreach($post->categories as $cat)
                                @if ($cat->id==$category->id) selected
                                @endif
                            @endforeach
                            value="{{$category->id}}"> {{$category->name}}
                        </option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                  <label for="">Tags</label>
                  <select name="tag_id[]" class="form-control" id="" multiple>
                     @foreach ($tags as $tag )
                        <option
                            @foreach($post->tags as $tag1)
                                @if ($tag1->id==$tag->id) selected
                                @endif
                            @endforeach
                            value="{{$tag->id}}"> {{$tag->name}}
                        </option>
                     @endforeach
                  </select>
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
        </div>
        <!-- /.card -->


      </div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        // tinymce.init({
        //     selector: 'textarea.tinymce-editor',
        //     height: 100,
        //     menubar: 'insert',
        //     plugins: [
        //         'advlist autolink lists link image charmap print preview anchor',
        //         'searchreplace visualblocks code fullscreen',
        //         'insertdatetime media table paste imagetools wordcount'
        //     ],
        //     toolbar: 'undo redo | formatselect | image' +
        //         'bold italic backcolor | alignleft aligncenter ' +
        //         'alignright alignjustify | bullist numlist outdent indent | ' +
        //         'removeformat | help' + 'image',
        //     content_css: '//www.tiny.cloud/css/codepen.min.css',
        //     image_list: [
        //         {title: 'My image 1', value: 'https://www.example.com/my1.gif'},
        //         {title: 'My image 2', value: 'http://www.moxiecode.com/my2.gif'}
        //     ]
        // });

        tinymce.init({
  selector: 'textarea.tinymce-editor',
  height: 500,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste imagetools wordcount'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});


    </script>
@endsection
