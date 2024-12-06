<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | PendataX</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-pndtX.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url({{ asset('assets/images/bgr-pndtx.jpeg') }});">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Selamat Datang di Dashboard PendataX</h1>
                <p class="text-2xl my-4">Solusi terbaik untuk mengelola dan mengakses data di Sekolah anda.</p>
                <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700">Kembali ke halaman depan</a>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
                style="background-image: url({{ asset('assets/images/bgr-pndtx.jpeg') }});">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <div class="my-6 flex items-center justify-center">
                    <img src="{{ asset('assets/images/logo-pndtX.png') }}" class="w-auto h-12 sm:h-16" alt="PendataX">
                    <span class="text-4xl sm:text-5xl font-bold ml-2">PendataX</span>
                </div>
                <form action="" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password"
                            id="password" placeholder="Password">
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button
                            class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">sign
                            in</button>
                    </div>
                </form>
                <p class="text-center text-md mt-6">Belum punya akun?</p>
                <a href="" class="text-blue-500 hover:underline">Daftar Sekarang</a>
            </div>
        </div>
    </section>
</body>

</html>
