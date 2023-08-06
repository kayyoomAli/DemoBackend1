


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
                                                <form action="{{(url('/insert'))}}" id="insertform" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group" >
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
                                                    </div>

                                                    <div class="form-group" >
                                                        <label>Address</label>
                                                        <textarea  id="address" name="address" class="form-control"  rows="1.5" cols="60"></textarea>
                                                    </div>

                                                    {{--  <div class="form-group" >
                                                        <label>Class</label>
                                                        <select class="form-control" name="userclass"  id="userclass" >
                                                            <option value="">Select Class</option>
                                                            <option value="BCA">BCA</option>
                                                            <option value="B.Tech">B.Tech </option>
                                                            <option value="MCA">MCA </option>
                                                            <option value="M.Tech">M.Tech </option>
                                                          </select>
                                                    </div>  --}}

                                                    <div class="form-group" >
                                                        <label>Date_of_Birth</label>
                                                        <input type="date" id="dob" name="dob" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <div class="row" style="margin-left: 3px">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="gender" id="male" class="gender" value="male">Male
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="gender" id="female" class="gender" value="female">Female
                                                            </label>
                                                        </div>
                                                    </div>

                                                    {{--  <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" id="phone"  name="phone" placeholder="Enter phone">
                                                    </div>  --}}


                                                    <div class="form-group">
                                                      <label>Email address</label>
                                                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                                    </div>

                                                    <div class="form-group">
                                                      <label>Password</label>
                                                      <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                                    </div>


                                                    {{--  <div class="form-group">
                                                        <label>Hobbies</label>
                                                        <div class="row" style="margin-left: 3px">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="hobbies[]" class="hobbies" value="chess">chess
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="hobbies[]" class="hobbies" value="cricket">cricket
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="hobbies[]" class="hobbies" value="reading">reading
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="hobbies[]" class="hobbies" value="writting">writting
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="hobbies[]" class="hobbies" value="cooking">cooking
                                                            </label>
                                                        </div>
                                                    </div>  --}}

                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" id="image" name="image" class="form-control">
                                                    </div><br>

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


