@extends('layouts.admin')
    @section('content')

    <x-breadcrumb>
        Category / Edit
    </x-breadcrumb->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
              <h3 class="card-title">Category Edit</h3>
           </div>
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           <!-- /.card-header -->
           <!-- form start -->
           <form action="{{route('admin.category.update', $category->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
              @csrf
              <div class="card-body">
                 <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{$category->name}}" placeholder="Enter name" name="name">
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
