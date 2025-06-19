<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Human Plus Institute')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icon Humplus-->
    <link rel="icon" href="{{ asset('images/icon_logo_humplus.png') }}" type="image/x-icon">

</head>

<body class="min-h-screen bg-gray-100">
    <!-- Navigation Header -->
    <nav class="bg-slate-800 text-white px-6 py-4 flex items-center justify-between fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo_humplus.png') }}" alt="Human Plus Institute Logo"
                    class="h-10 w-auto z-12">
            </div>

            <!-- Navigation Links -->
            <div class="flex items-center space-x-6">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center space-x-2 px-4 py-2 rounded-lg {{ request()->is('/') ? 'text-white' : 'text-slate-300 hover:text-white' }}">
                    <i class="fas fa-th-large"></i>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('formulir') }}"
                    class="flex items-center space-x-2 px-4 py-2 rounded-lg {{ request()->is('formulir') ? 'text-white' : 'text-slate-300 hover:text-white' }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Formulir</span>
                </a>

            </div>
        </div>

        <!-- User Profile -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/profile_pict.jpg') }}" alt="Profile" class="w-10 h-10 rounded-full">
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>
</body>

</html>
