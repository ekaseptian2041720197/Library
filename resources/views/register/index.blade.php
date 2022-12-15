@extends('layout.login')
@section('isi')
    
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="/register" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name"
                                        placeholder="Name" value="{{ old('name') }}">
                                        
                                        @error('name')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror           
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" id="username" name="username"
                                        placeholder="Username" value="{{ old('username') }}">
                                        
                                        @error('username')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror           
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
                                        placeholder="Email" value="{{ old('email') }}">
                                        
                                        @error('email')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror           
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password"
                                        placeholder="Password" value="{{ old('password') }}">
                                        
                                        @error('password')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                        @enderror           
                                </div>
                               
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                    
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

