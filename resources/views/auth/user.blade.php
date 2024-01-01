<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>
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
                    <h1 class="text-4xl text-gray-900 mb-4">Login</h1>
                </div>
                <form action="{{ route('user') }}" method="POST" class="user">
                    @csrf
                    <div class="mb-4">
                        <input name="email" type="email" class="w-full p-3 border border-gray-300 @error('email') border-red-500 @enderror" id="exampleInputEmail" placeholder="Email Address">
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input name="password" type="password" class="w-full p-3 border border-gray-300 @error('password') border-red-500 @enderror" id="exampleInputPassword" placeholder="Password">
                        @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="w-full py-3 bg-blue-500 text-white">Login</button>
                </form>
                <hr class="my-4">
                <div class="text-center">
                    <a class="text-sm text-blue-500" href="{{ route('register') }}">Don't have an account? Register!</a>
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