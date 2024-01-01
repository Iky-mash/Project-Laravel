<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top" style="height: 60px;">

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-10 top-0 start-0 border-b border-gray-200 dark:border-gray-600" style="height: 0;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Gadgetin Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gadgetin Aja</span>
            </a>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - User Information -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Search Button -->
                    <li class="nav-item">
                        <a href="#list" class="nav-link text-gray-800 dark:text-white items-center ">
                            Cari
                        </a>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ auth()->user()->name }}
                                <br>
                                <small>{{ auth()->user()->level }}</small>
                            </span>
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>

        </div>
    </nav>

    @vite(['resources/css/app.css','resources/js/app.js'])

</nav>