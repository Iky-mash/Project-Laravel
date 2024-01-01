<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gadgetin Aja</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Page Wrapper -->


    <!-- Sidebar -->

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->


    <!-- Main Content -->


    <!-- Topbar -->
    @include('layout.navbar')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->

    @yield('content')
    <section class="bg-white dark:bg-gray-900 ">

        <h2 id="list" class="mt-8 lg:mt-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">You’ll be in good company</h2>
        <div class="">
            <div class="flex flex-wrap">
                @foreach($products as $product)
                <div class=" mt-5 md:w-1/2 lg:w-1/5 p-2">
                    <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg object-cover w-full h-70" src="/images/{{ $product->image }}" alt="" />
                        </a>
                        <div class="p-1">
                            <a href="#">
                                <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h5>
                            </a>
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">${{ $product->price }}</p>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $product->status }}</p>
                            <a href="https://wa.me/6285600666157?text=Halo%20saya%20tertarik%20dengan%20produk%20{{ $product->name }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-400 dark:hover:bg-green-500 dark:focus:ring-green-600 mb-3">
                                Pesan Sekarang
                                <!-- Ganti placeholder SVG dengan ikon WhatsApp sesuai kebutuhan -->
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        </div>
    </section>
    <!-- /.container-fluid -->


    <!-- End of Main Content -->

    <!-- Footer -->
    @include('layout.footer')
    <!-- End of Footer -->


    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('admin_assets/vendor/chart.js/Chart.min.js') }}"></script>
</body>

</html>