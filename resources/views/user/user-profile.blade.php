@extends('user.layouts.app')
@section('content')


    {{--  <div id="layoutSidenav">  --}}

        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="border mt-5" style="width: 50%; margin-left:20%;">
                        <div class="card">
                            <div class="card-header">
                                <h5>Profile Information</h5>
                            </div>
                                <div class="card-body">
                                    <form action="{{ url('user-update') }}" id="insertform" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        {{--  <div class="text-center">
                                            <label>Image</label>
                                             <img height="50" width="50" src="{{ asset('assets/uploads/userimage/'.$user->image) }}">
                                        </div>  --}}


                                        <div class="form-group" >
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                        </div>

                                        <div class="form-group" >
                                            <label>Address</label>
                                            <textarea  id="address" name="address" class="form-control"  rows="1.5" cols="60">{{$user->address}}</textarea>
                                        </div>



                                        <div class="form-group" >
                                            <label>Date_of_Birth</label>
                                            <input type="date" id="dob" name="dob" class="form-control" value="{{ $user->dob }}">
                                        </div>


                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="row" style="margin-left: 3px">
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="male" class="gender" value="male" {{ $user->gender == 'male' ? 'checked' : '' }}>Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" id="female" class="gender" value="female" {{ $user->gender == 'female' ? 'checked' : '' }}>Female
                                                </label>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                          <label>Email address</label>
                                          <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $user->email }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary" id="submitbtn" >Submit</button>
                                        <a href=" " class="btn btn-danger" >cancel</a>
                                    </form>


                                </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @endsection
