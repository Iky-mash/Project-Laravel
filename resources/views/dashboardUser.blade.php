@extends('layout.app')

@section('content')
<div class="row w-full  h-full">
    <div class=" w-full h-full">

        <section class="bg-blue-800 dark:bg-gray-900 text-white mt-8 lg:mt-16 h-full">
            <div class="grid px-4  lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 h-full w-full ">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">Temukan gadget kesukaan anda disini</h1>
                    <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">kemudahan berbelanja hanya dengan sekali klik, tanpa keluar rumah dan barang pasti datang sesuai dengan pesanan anda</p>
                    <a href="#list" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center rounded-lg bg-white text-blue-700 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        cari sekarang
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup" class="h-full w-full">
                </div>
            </div>
        </section>

    </div>
</div>



@endsection