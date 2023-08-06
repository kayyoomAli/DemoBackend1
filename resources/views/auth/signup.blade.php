<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="{{(url('/insertsignup'))}}" id="insertform" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group" >
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
                                            </div>

                                            <div class="form-group" >
                                                <label>Address</label>
                                                <textarea  id="address" name="address" class="form-control"  rows="1.5" cols="60"></textarea>
                                            </div>



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




                                            <div class="form-group">
                                              <label>Email address</label>
                                              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                            </div>

                                            <div class="form-group">
                                              <label>Password</label>
                                              <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                            </div><br>

                                            <button type="submit" class="btn btn-primary" id="submitbtn" >Submit</button>
                                            <a href="{{url('login')}}" class="btn btn-danger" >cancel</a>
                                          </form>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ url('login') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>




    </body>
</html>
