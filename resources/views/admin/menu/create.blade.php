@extends('layouts.admin')
    @section('content')

    <x-breadcrumb>
        Menu / Create
    </x-breadcrumb->
    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
              <h3 class="card-title">Menu Create</h3>
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
           <form action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                 <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="" placeholder="Enter name" name="name" required>
                 </div>

                 <div class="form-group">
                    <label for="">Categories</label>
                    <select name="category_id" class="form-control" id="">
                       @foreach ($categories as $category )
                       <option value="{{$category->id}}">{{$category->name}}</option>
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
