<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Off Broadway Children's Theatre - Inspiring young performers in Atlanta since 2000">
    <title>{{ $title ?? 'OBCT - Off Broadway Children\'s Theatre' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50 font-sans antialiased">

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-lime-500 focus:text-gray-900 focus:rounded">
    Skip to main content
</a>

<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50" role="navigation" aria-label="Main navigation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3" aria-label="Off Broadway Children's Theatre Home">
                    <img src="/images/green-logo.png" alt="OBCT Logo" class="h-16 w-auto">
                    <span class="hidden sm:block text-xl font-bold text-gray-800">Off Broadway Children's Theatre</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="/"
                   class="text-gray-700 hover:text-lime-500 font-medium transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded px-2 py-1"
                   aria-current="{{ request()->is('/') ? 'page' : 'false' }}">
                    Home
                </a>
                <a href="/classes"
                   class="text-gray-700 hover:text-lime-500 font-medium transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded px-2 py-1">
                    Classes
                </a>
                <a href="/teachers"
                   class="text-gray-700 hover:text-lime-500 font-medium transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded px-2 py-1">
                    Teachers
                </a>
                <a href="/shows"
                   class="text-gray-700 hover:text-lime-500 font-medium transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded px-2 py-1">
                    Shows
                </a>
                <a href="/galleries"
                   class="text-gray-700 hover:text-lime-500 font-medium transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded px-2 py-1">
                    Gallery
                </a>
                <a href="/about"
                   class="text-gray-700 hover:text-lime-500 font-medium transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded px-2 py-1">
                    About
                </a>
                <a href="/contact"
                   class="bg-lime-500 text-gray-900 px-6 py-2 rounded-lg hover:bg-lime-400 transition font-medium focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="text-gray-700 hover:text-lime-500 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded p-2"
                        aria-label="Toggle mobile menu"
                        aria-expanded="false"
                        x-bind:aria-expanded="mobileMenuOpen.toString()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-data="{ mobileMenuOpen: false }"
         x-show="mobileMenuOpen"
         @click.away="mobileMenuOpen = false"
         class="lg:hidden bg-white border-t"
         style="display: none;"
         role="dialog"
         aria-label="Mobile navigation">
        <div class="px-4 pt-2 pb-4 space-y-2">
            <a href="/"
               class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-lime-50 hover:text-lime-600 font-medium focus:outline-none focus:ring-2 focus:ring-lime-500"
               aria-current="{{ request()->is('/') ? 'page' : 'false' }}">
                Home
            </a>
            <a href="/classes"
               class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-lime-50 hover:text-lime-600 font-medium focus:outline-none focus:ring-2 focus:ring-lime-500">
                Classes
            </a>
            <a href="/teachers"
               class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-lime-50 hover:text-lime-600 font-medium focus:outline-none focus:ring-2 focus:ring-lime-500">
                Teachers
            </a>
            <a href="/shows"
               class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-lime-50 hover:text-lime-600 font-medium focus:outline-none focus:ring-2 focus:ring-lime-500">
                Shows
            </a>
            <a href="/galleries"
               class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-lime-50 hover:text-lime-600 font-medium focus:outline-none focus:ring-2 focus:ring-lime-500">
                Gallery
            </a>
            <a href="/about"
               class="block px-3 py-2 rounded-lg text-gray-700 hover:bg-lime-50 hover:text-lime-600 font-medium focus:outline-none focus:ring-2 focus:ring-lime-500">
                About
            </a>
            <a href="/contact"
               class="block px-3 py-2 rounded-lg bg-lime-500 text-gray-900 hover:bg-lime-400 font-medium text-center focus:outline-none focus:ring-2 focus:ring-lime-600">
                Contact
            </a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main id="main-content" role="main">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-white mt-20" role="contentinfo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About -->
            <div>
                <img src="/images/green-logo.png" alt="OBCT Logo" class="h-16 w-auto mb-4">
                <h3 class="text-lg font-bold mb-2">Off Broadway Children's Theatre</h3>
                <p class="text-gray-400">Inspiring young performers since 2000</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                <nav aria-label="Footer navigation">
                    <ul class="space-y-2">
                        <li><a href="/classes" class="text-gray-400 hover:text-lime-400 transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-gray-900 rounded">Classes</a></li>
                        <li><a href="/teachers" class="text-gray-400 hover:text-lime-400 transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-gray-900 rounded">Teachers</a></li>
                        <li><a href="/shows" class="text-gray-400 hover:text-lime-400 transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-gray-900 rounded">Shows</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-lime-400 transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-gray-900 rounded">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-bold mb-4">Contact</h3>
                <address class="not-italic space-y-2 text-gray-400">
                    <p>{{ \App\Models\Setting::get('address_line1', '12315 Crabapple Rd Suite 122') }}</p>
                    <p>{{ \App\Models\Setting::get('address_line2', 'Alpharetta, GA 30004') }}</p>
                    <p class="pt-2">
                        <a href="tel:{{ \App\Models\Setting::get('phone_e164', '+17706642410') }}" class="hover:text-lime-400 transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-gray-900 rounded">
                            📞 {{ \App\Models\Setting::get('phone', '770-664-2410') }}
                        </a>
                    </p>
                    <p>
                        <a href="mailto:{{ \App\Models\Setting::get('email', 'offbroadway@msn.com') }}" class="hover:text-lime-400 transition focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 focus:ring-offset-gray-900 rounded">
                            ✉️ {{ \App\Models\Setting::get('email', 'offbroadway@msn.com') }}
                        </a>
                    </p>
                </address>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Off Broadway Children's Theatre. All rights reserved.</p>
        </div>
    </div>
</footer>

@livewireScripts
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
