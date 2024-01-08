@extends('admin.layout')
@section('content')

@if(Session::has('success'))
        {{Session::get('success')}}
    @endif
    
{{-- @php
    print_r($data);
@endphp --}}
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $usr )
                        <tr>
                            <td>{{ $usr->id}}</td>
                            <td>{{ $usr->name}}</td>
                            <td>{{ $usr->email}}</td>
                            <td>{{ $usr->type}}</td>
                            <td>
                                <a href="{{url('/admin-dashboard/edit/'.$usr->id)}}">edit</a>&nbsp;|&nbsp;
                                <a href="{{url('/admin-dashboard/delete/'.$usr->id)}}">delete</a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->




@endsection
