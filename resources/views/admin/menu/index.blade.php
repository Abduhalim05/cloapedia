@extends('layouts.admin')
    @section('content')


<div class="col-12">
    <div class="card">
        <div class="col-lg-2 card-header">
            <a href="{{route('admin.menu.create')}}" class="btn btn-block bg-gradient-primary">Create Menu</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i></h5>
                    {{session('success')}}
                </div>
            @endif
            @if (Session::has('warning'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    {{session('warning')}}
                </div>
            @endif
           <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                       <thead>
                          <tr role="row">
                             <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">№</th>
                             <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Name</th>
                             <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Category Name</th>

                             <th> Actions </th>
                          </tr>
                       </thead>
                       <tbody>
                           {{-- @php
                               dd($items);
                           @endphp --}}
                           @foreach($items as $item)
                             <tr class="odd">
                             <td class="dtr-control" tabindex="0">{{$loop->iteration}}</td>
                             <td class="sorting_1">{{ $item->name }}</td>
                             <td class="sorting_1">{{ $item->category->name  ?? '' }}</td>
                             <td class="project-actions text-right dtr-control">
                                
                                <a class="btn btn-info btn-sm col-md-10" href="{{route('admin.menu.edit', $item->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form action="{{route('admin.menu.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm col-md-10 ">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
        <!-- /.card-body -->
     </div>
</div>

    @endsection
