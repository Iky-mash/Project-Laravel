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
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10">
            <div class="bg-white p-8 shadow-md rounded-md">
                <div class="text-center">
                    <h1 class="text-4xl text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form action="{{ route('register.save') }}" method="POST" class="user">
                    @csrf
                    <div class="mb-4">
                        <input name="name" type="text" class="w-full p-3 border border-gray-300 @error('name') border-red-500 @enderror" id="exampleInputName" placeholder="Name">
                        @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input name="email" type="email" class="w-full p-3 border border-gray-300 @error('email') border-red-500 @enderror" id="exampleInputEmail" placeholder="Email Address">
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input name="phone" type="text" class="w-full p-3 border border-gray-300 @error('phone') border-red-500 @enderror" id="exampleInputPhone" placeholder="Phone Number" value="{{ old('phone') }}">
                        @error('phone')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 mr-2">
                            <input name="password" type="password" class="w-full p-3 border border-gray-300 @error('password') border-red-500 @enderror" id="exampleInputPassword" placeholder="Password">
                            @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2">
                            <input name="password_confirmation" type="password" class="w-full p-3 border border-gray-300 @error('password_confirmation') border-red-500 @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                            @error('password_confirmation')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="w-full py-3 bg-blue-500 text-white">Register Account</button>
                </form>
                <hr class="my-4">
                <div class="text-center">
                    <a class="text-sm text-blue-500" href="{{ route('user') }}">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>

</html>