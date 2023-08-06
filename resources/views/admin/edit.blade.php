

@extends('admin.layouts.app')
@section('content')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>


                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Register Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="border">
                                    <div class="card">
                                        <div class="card-header">
                                            <div id="success_message" ></div>
                                            <div class="card-body">
                                                <form action="{{(url('/update'))}}" id="insertform" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" class="form-control" id="edit_id" name="edit_id" value="{{ $find->id }}">

                                                    <div class="form-group" >
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter email" value="{{ $find->name }}">
                                                    </div>

                                                    <div class="form-group" >
                                                        <label>Address</label>
                                                        <textarea  id="address" name="address" class="form-control"  rows="1.5" cols="60">{{$find->address}}</textarea>
                                                    </div>



                                                    <div class="form-group" >
                                                        <label>Date_of_Birth</label>
                                                        <input type="date" id="dob" name="dob" class="form-control" value="{{ $find->dob }}">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <div class="row" style="margin-left: 3px">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="gender" id="male" class="gender" value="male" {{ $find->gender == 'male' ? 'checked' : '' }}>Male
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="gender" id="female" class="gender" value="female" {{ $find->gender == 'female' ? 'checked' : '' }}>Female
                                                            </label>
                                                        </div>
                                                    </div>




                                                    <div class="form-group">
                                                      <label>Email address</label>
                                                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $find->email }}">
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Password</label>
                                                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ $find->password }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Image</label>
                                                         <input type="file" name="image" value="{{($find->images) }}"/>
                                                         <img height="50" width="50" src="{{ asset('uploads/userimage/'.$find->image) }}">
                                                    </div>


                                                    <button type="submit" class="btn btn-primary" id="submitbtn" >Submit</button>
                                                    <a href="{{url('userlist')}}" class="btn btn-danger" >cancel</a>
                                                  </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
@endsection


