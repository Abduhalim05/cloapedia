@extends('layouts.admin')
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
                <li class="breadcrumb-item"><a href="#">Advertising</a></li>
                <li class="breadcrumb-item active">Create</li>
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
              <h3 class="card-title">Image Add</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="{{route('admin.advertising.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                   <label for="exampleInputFile ">Image 1200x1200</label>
                   <div class="input-group">
                      <div class="custom-file">
                         <input type="file" class="custom-file-input" id="exampleInputFile" name="image_1200_1200" required>
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                         <span class="input-group-text">Upload</span>
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <label for="exampleInputFile ">Image 728x90</label>
                   <div class="input-group">
                      <div class="custom-file">
                         <input type="file" class="custom-file-input" id="exampleInputFile" name="image_728_90" required >
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
                       <option value="1">Active</option>
                       <option value="0">Inactive</option>
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

