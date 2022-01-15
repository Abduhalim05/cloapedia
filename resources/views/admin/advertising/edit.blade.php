@extends('layouts.admin')
{{--

@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
@endsection --}}

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Advertising</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Advertising</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
</section>

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Advert. Edit {{$advertising->id}}</h3>
          </div>
          <!-- /.card-header -->
          <form action="{{route('admin.advertising.update', $advertising->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
               <div class="form-group">
                   <img src="/admin/images/advertisings/{{$advertising->image_1200_1200}}"  alt="" srcset="">
                  <label for="exampleInputFile ">Image 1200x1200</label>
                  <div class="input-group">
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_1200_1200">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                     </div>
                     <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                <img src="/admin/images/advertisings/{{$advertising->image_728_90}}" height="90" width="728" alt="" srcset="">
                  <label for="exampleInputFile ">Image 728x90</label>
                  <div class="input-group">
                     <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image_728_90" >
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
                    <option  {{$advertising->status==1 ? 'selected' : ''  }} value="1">Active</option>
                    <option {{$advertising->status==0 ? 'selected' : ''  }}  value="0">Inactive</option>
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

@endsection
