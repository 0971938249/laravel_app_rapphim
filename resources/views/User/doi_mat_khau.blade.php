<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    
</style>

<body style="background-image: url('{{ asset('assets/img/login_phim.jpg') }}');background-repeat: no-repeat; background-size: cover;">

    <div  style="max-width: 600px; " class="container">

        <div style="background-color: rgba(255, 255, 255, 0.2);" class="card o-hidden border-0 shadow-lg my-5">
            <div  style=" border: 1px solid white;border-radius: 10px;" class="card-body p-0">
                <!-- Nested Row within Card Body -->
             
                   
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-white mb-4">Change Password!</h1>
                            </div>
                            <form class="user"  method="POST" action="{{ route('user.doimatkhau') }}">
                                @csrf
                                
                                <div class="form-group">
                                   
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email" value="{{ $email }}" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatpassword" required>
                                    </div>
                                </div>
                                <button style="background-color: #f3ea28; color: black; font-weight: bold; font-size: 16px;" type="submit" class="btn btn-user btn-block">
                                    Change Password
                                </button>
                            </form>
                           
                        </div>
                    </div>
                
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets')}}/js/sb-admin-2.min.js"></script>

</body>

</html>