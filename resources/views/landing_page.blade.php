<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PendataX</title>
    <link rel="icon" href="{{ asset('assets/images/logo-pndtX.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-pndtX.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/landing_page.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    @vite('resources/css/app.css')
    <style>
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            background-image: url('{{ asset('assets/images/bgr-pndtx.jpeg') }}');
        }

        .typing-text::after {
            content: '|';
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-lg fixed w-full top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo dan Judul -->
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/logo-pndtX.png') }}" alt="Logo" class="h-10 mr-3">
                    <h1 class="text-2xl font-bold text-[#4D8291] dark:text-[#6FAEBB]">PendataX</h1>
                </div>
                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#home"
                        class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Beranda</a>
                    <a href="#faq"
                        class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">FAQ</a>
                    <a href="#testimonial"
                        class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-300">Testimonial</a>
                    <a href="{{ route('login') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-300">Sign
                        In</a>
                    <button id="darkModeToggle"
                        class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                </div>
                <!-- Menu Mobile -->
                <div class="md:hidden flex items-center space-x-4">
                    <!-- Sign In Button -->
                    <a href="#"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-all duration-300 text-sm font-medium">
                        Sign In
                    </a>
                    <!-- Mobile Menu Button -->
                    <button class="mobile-menu-button text-gray-700 dark:text-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
            <a href="#home"
                class="block py-3 px-4 text-gray-700 hover:text-blue-500 hover:bg-gray-100 transition-colors duration-300 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-blue-400 border-b dark:border-gray-700">
                Beranda
            </a>
            <a href="#faq"
                class="block py-3 px-4 text-gray-700 hover:text-blue-500 hover:bg-gray-100 transition-colors duration-300 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-blue-400 border-b dark:border-gray-700">
                FAQ
            </a>
            <a href="#testimonial"
                class="block py-3 px-4 text-gray-700 hover:text-blue-500 hover:bg-gray-100 transition-colors duration-300 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-blue-400 border-b dark:border-gray-700">
                Testimonial
            </a>
            <button id="darkModeToggleMobile"
                class="block w-full text-left py-3 px-4 text-gray-700 hover:text-blue-500 hover:bg-gray-100 transition-colors duration-300 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-blue-400">
                Toggle Dark Mode
            </button>
        </div>
    </nav>


    <section id="home"
        class="parallax min-h-[90vh] flex flex-col justify-center items-start text-left px-6 pt-20 md:pl-20">
        <div class="p-8 rounded-lg md:w-1/2 bg-white bg-opacity-80 dark:bg-gray-800 dark:bg-opacity-80"
            data-aos="fade-right" data-aos-duration="1000">
            <h1 class="text-5xl font-bold mb-4 text-[#4D8291] dark:text-[#6FAEBB] typing-text" id="welcome-text"></h1>
            <p class="text-xl mb-8 text-[#4D8291] dark:text-[#6FAEBB]">Solusi terbaik untuk mengelola dan mengakses data
                di Sekolah anda.</p>
        </div>
    </section>

    <section class="py-12 bg-gray-100 dark:bg-gray-800 -mt-2">
        <div class="container mx-auto px-6 -mt-2">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-24">
                <!-- Card 1 -->
                <div class="card " data-aos="fade-up" data-aos-delay="100">
                    <div class="card-content dark:bg-gray-700">
                        <div class="text-4xl mb-4 text-blue-500">📋</div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Pendataan Terpusat</h3>
                        <p class="text-gray-600 dark:text-gray-300">Kelola data diri siswa dan guru dalam satu platform
                            terintegrasi.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-content dark:bg-gray-700">
                        <div class="text-4xl mb-4 text-blue-500">🔒</div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Keamanan Data</h3>
                        <p class="text-gray-600 dark:text-gray-300">Pastikan informasi penting tersimpan aman dengan
                            sistem yang andal.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-content dark:bg-gray-700">
                        <div class="text-4xl mb-4 text-blue-500">⚡</div>
                        <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Efisiensi Proses</h3>
                        <p class="text-gray-600 dark:text-gray-300">Optimalkan waktu pendataan untuk fokus pada
                            pengembangan pendidikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800 dark:text-white" data-aos="fade-up">FAQ</h2>
            <div class="max-w-3xl mx-auto text-center mb-12">
                <p class="text-gray-600 dark:text-gray-300 mb-6" data-aos="fade-up" data-aos-delay="100">Berikut
                    adalah pertanyaan yang sering diajukan terkait PendataX. Klik pada setiap pertanyaan untuk melihat
                    jawabannya.</p>
            </div>
            <div class="max-w-2xl mx-auto space-y-4">
                <!-- Question 1 -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4" data-aos="zoom-in" data-aos-delay="200">
                    <button
                        class="flex justify-between items-center w-full text-left text-gray-800 dark:text-white font-medium focus:outline-none"
                        onclick="toggleAnswer('answer1')">
                        <span>Apa itu PendataX?</span>
                        <svg class="w-5 h-5 transition-transform transform rotate-0" id="icon-answer1"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="answer1" class="mt-3 text-gray-600 dark:text-gray-300 hidden">
                        PendataX adalah Sistem Informasi Data untuk mengelola data siswa, guru, dan staf di sekolah
                        anda.
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4" data-aos="zoom-in" data-aos-delay="300">
                    <button
                        class="flex justify-between items-center w-full text-left text-gray-800 dark:text-white font-medium focus:outline-none"
                        onclick="toggleAnswer('answer2')">
                        <span>Bagaimana cara mengisi data di PendatX?</span>
                        <svg class="w-5 h-5 transition-transform transform rotate-0" id="icon-answer2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="answer2" class="mt-3 text-gray-600 dark:text-gray-300 hidden">
                        Proses pengisian data dilakukan dengan formulir online yang tersedia, memungkinkan input data
                        secara mudah dan cepat.
                    </div>
                </div>
                <!-- Question 3 -->
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-4" data-aos="zoom-in" data-aos-delay="400">
                    <button
                        class="flex justify-between items-center w-full text-left text-gray-800 dark:text-white font-medium focus:outline-none"
                        onclick="toggleAnswer('answer3')">
                        <span>Siapa saja yang dapat menggunakan PendataX?</span>
                        <svg class="w-5 h-5 transition-transform transform rotate-0" id="icon-answer3"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="answer3" class="mt-3 text-gray-600 dark:text-gray-300 hidden">
                        PendataX dirancang untuk digunakan oleh seluruh komunitas pendidikan di Sekolah anda, termasuk
                        siswa, guru, dan staf.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-10 text-gray-800 dark:text-white" data-aos="fade-up">Apa yang
                Mereka Katakan
                Tentang Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimoni 1 -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 hover:shadow-xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <p class="text-gray-600 dark:text-gray-300 italic mb-4">"PendataX sangat membantu dalam mendata
                        siswa dengan cepat dan mudah."</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 text-right">24 November 2024</p>
                </div>

                <!-- Testimoni 2 -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 hover:shadow-xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <p class="text-gray-600 dark:text-gray-300 italic mb-4">"Sistemnya sangat mudah digunakan, terutama
                        untuk administrasi sekolah."</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 text-right">22 November 2024</p>
                </div>

                <!-- Testimoni 3 -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 hover:shadow-xl transition-shadow duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <p class="text-gray-600 dark:text-gray-300 italic mb-4">"Data kami sekarang lebih terorganisir, dan
                        aksesnya juga sangat cepat."</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400 text-right">20 November 2024</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-800 dark:bg-gray-900 text-white text-center">
        <div class="container mx-auto px-6">
            <p>&copy;2024 PendataX. All rights reserved.</p>
            <p class="mt-2">Email: <a href="mailto:pendataX@gmail.com"
                    class="text-blue-400 hover:underline">pendataX@gmail.com</a></p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/landing_page.js') }}"></script>
</body>

</html>
