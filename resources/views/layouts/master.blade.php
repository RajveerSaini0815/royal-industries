<!DOCTYPE html>
<html lang="en" class="scroll-smooth theme-1">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal PinkCity Industries | Premium Glass Products & Services</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        // Theme 1 Colors (Blue Glass)
                        'primary-1': '#0066cc',
                        'secondary-1': '#4a4a4a',
                        'accent-1': '#00a8e8',
                        'glass-1': '#1e88e5',

                        // Theme 2 Colors (Emerald Glass)
                        'primary-2': '#059669',
                        'secondary-2': '#374151',
                        'accent-2': '#10b981',
                        'glass-2': '#059669',
                    },
                    fontFamily: {
                        body: ['Poppins', 'sans-serif'],
                        heading: ['Playfair Display', 'serif'],
                    },
                    animation: {
                        pulse: 'pulse 2s infinite',
                        float: 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="font-body bg-white text-gray-800 dark:bg-gray-900 transition-colors duration-300"data-bs-theme="light">
    <!-- Theme Toggle Button -->
    <div class="fixed bottom-8 right-8 flex flex-col space-y-4 z-50">
        <button id="themeToggle" class="w-12 h-12 rounded-full flex items-center justify-center bg-primary-1 text-white shadow-lg hover:bg-accent-1 hover:rotate-12 transition-all duration-300">
            <i class="fas fa-moon dark:hidden"></i>
            <i class="fas fa-sun hidden dark:inline"></i>
        </button>
        
        <!-- <button id="colorThemeToggle" class="w-12 h-12 rounded-full flex items-center justify-center bg-primary-1 text-white shadow-lg hover:bg-accent-1 hover:rotate-12 transition-all duration-300">
            <i class="fas fa-palette text-xl"></i>
        </button> -->
    </div>
    <!-- <button id="themeToggle" class="text-white p-2 rounded-full hover:bg-white hover:bg-opacity-20">
        <i class="fas fa-moon dark:hidden"></i>
        <i class="fas fa-sun hidden dark:inline"></i>
    </button> -->



    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919876543210" class="fixed bottom-24 right-8 w-12 h-12 rounded-full flex items-center justify-center bg-green-500 text-white shadow-lg z-50 hover:scale-110 hover:bg-green-600 transition-all duration-300">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>

    @include('partials.navigation')

    {{-- <main>
        @yield('content')
    </main> --}}
    @include('partials.baner')
    @include('partials.service')
    @include('partials.product')
    @include('partials.project')
    @include('partials.about')
    @include('partials.journey')
    @include('partials.review')
    @include('partials.transform')
    @include('partials.contact')
    @include('partials.map')
    @include('partials.footer')
    @include('partials.modals')


<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/tongle.js') }}"></script>
</body>

</html>