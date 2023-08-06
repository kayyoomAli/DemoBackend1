@extends('admin.layouts.app')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif


                <div class="card mb-4">
                    {{--  <div class="card-header">
                    </div>  --}}
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Date of birth</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    {{--  <th scope="col">Image</th>  --}}

                                    <th scope="col">Recover</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $list)
                                    <tr>
                                        <td>{{ $list->id }}</td>
                                        <td>{{ $list->name }}</td>
                                        <td>{{ $list->address }}</td>
                                        <td>{{ $list->dob }}</td>
                                        <td>{{ $list->gender }}</td>
                                        <td>{{ $list->email }}</td>
                                        {{--  <td> <img height="50" width="50"src="{{ asset('uploads/userimage/' . $list->image) }}" /></td>  --}}


                                        <td>
                                            <a href="{{ url('recover/' . $list->id) }}" class="btn btn-danger">recover</a>
                                        </td>
                                        <td>
                                            <input data-id="{{$list->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $list->status ? 'checked' : '' }}>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </main>

    </div>
    </div>
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0;
          var user_id = $(this).data('id');

          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'user_id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>
