<div>
    <!-- Alert Banners -->
    @if($this->alerts->isNotEmpty())
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4" role="alert" aria-live="polite">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @foreach($this->alerts as $alert)
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-yellow-800">
                                <strong>{{ $alert->title }}:</strong> {{ $alert->content }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Hero Section -->
    <section class="relative bg-lime-500 text-gray-900 py-12 sm:py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div>
                    <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
                        Where Young Stars Shine
                    </h1>
                    <p class="text-white text-lg sm:text-xl text-gray-800 mb-6 sm:mb-8">
                        Off Broadway Children's Theatre has been inspiring young performers in the Atlanta area since 2000.
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap gap-4">
                        <a href="/classes"
                           wire:navigate
                           class="text-white inline-block text-center bg-gray-900 text-lime-400 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:bg-gray-800 transition shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 focus:ring-offset-lime-500">
                            Explore Classes
                        </a>
                        <a href="/contact"
                           wire:navigate
                           class="text-white inline-block text-center bg-gray-900 text-lime-400 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:bg-gray-800 transition shadow-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 focus:ring-offset-lime-500">
                            Get in Touch
                        </a>
                    </div>
                </div>

                @if($this->currentShow)
                    <div class="mt-8 md:mt-0">
                        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                            @if($this->currentShow->show_image)
                                <img src="{{ cdn_url($this->currentShow->show_image) }}"
                                     alt="{{ $this->currentShow->title }}"
                                     class="w-full h-64 sm:h-72 object-contain bg-gray-50">
                            @endif
                            <div class="p-4 sm:p-6">
                                <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2">Now Showing</h2>
                                <h3 class="text-lg sm:text-xl text-lime-600 mb-3">{{ $this->currentShow->title }}</h3>
                                <p class="text-gray-600 mb-4 text-sm sm:text-base">{{ Str::limit($this->currentShow->description, 150) }}</p>
                                <a href="/shows"
                                   wire:navigate
                                   class="inline-block bg-lime-500 text-gray-900 px-6 py-3 rounded-lg hover:bg-lime-400 transition font-semibold focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2">
                                    Learn More →
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- What's New Section -->
    @if($this->news->isNotEmpty())
        <section class="py-12 sm:py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 sm:mb-12 text-center">What's New</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($this->news as $item)
                        <article class="bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-lime-500 hover:shadow-lg transition">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $item->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $item->content }}</p>
                            @if($item->link_url)
                                <a href="{{ $item->link_url }}"
                                   class="text-lime-600 font-semibold hover:text-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">
                                    {{ $item->link_text ?? 'Read More' }} →
                                </a>
                            @endif
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Featured Classes -->
    @if($this->featuredClasses->isNotEmpty())
        <section class="py-12 sm:py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 sm:mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">Our Classes</h2>
                    <p class="text-lg sm:text-xl text-gray-600">Find the perfect class for your young performer</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($this->featuredClasses as $class)
                        <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition focus-within:ring-2 focus-within:ring-lime-500">
                            @if($class->image)
                                <img src="{{ Storage::url($class->image) }}"
                                     alt="{{ $class->name }}"
                                     class="w-full h-48 object-cover">
                            @endif
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $class->name }}</h3>
                                @if($class->age_range)
                                    <p class="text-sm text-lime-600 font-semibold mb-2">Ages: {{ $class->age_range }}</p>
                                @endif
                                <p class="text-gray-600 mb-4">{{ Str::limit($class->description, 100) }}</p>
                                @if($class->schedule)
                                    <p class="text-sm text-gray-500 mb-3">📅 {{ $class->schedule }}</p>
                                @endif
                                @if($class->price)
                                    <p class="text-lg font-bold text-lime-600">${{ number_format($class->price, 2) }}</p>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="text-center mt-8 sm:mt-12">
                    <a href="/classes"
                       wire:navigate
                       class="inline-block bg-lime-500 text-gray-900 px-6 sm:px-8 py-3 sm:py-4 rounded-lg hover:bg-lime-400 transition font-semibold focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2">
                        View All Classes
                    </a>
                </div>
            </div>
        </section>
    @endif

    <!-- Testimonials -->
    @if($this->testimonials->isNotEmpty())
        <section class="py-12 sm:py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 sm:mb-12 text-center">What Parents Say</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($this->testimonials as $testimonial)
                        <blockquote class="bg-lime-50 border-2 border-lime-500 rounded-xl p-6 relative">
                            <div class="text-lime-600 text-5xl sm:text-6xl mb-4" aria-hidden="true">"</div>
                            <p class="text-gray-700 mb-6 italic">{{ $testimonial->content }}</p>
                            <footer class="flex items-center">
                                @if($testimonial->photo)
                                    <img src="{{ Storage::url($testimonial->photo) }}"
                                         alt=""
                                         class="w-12 h-12 rounded-full mr-4">
                                @endif
                                <div>
                                    <cite class="font-bold text-gray-800 not-italic">{{ $testimonial->author_name }}</cite>
                                    @if($testimonial->author_role)
                                        <p class="text-sm text-gray-600">{{ $testimonial->author_role }}</p>
                                    @endif
                                </div>
                            </footer>
                        </blockquote>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Call to Action -->
    <section class="py-16 sm:py-20 bg-gradient-to-br from-lime-500 to-green-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4 sm:mb-6 text-white">Ready to Join the Show?</h2>
            <p class="text-lg sm:text-xl mb-6 sm:mb-8">
                Discover your child's passion for performing arts. Register for classes today!
            </p>
            <a href="/contact"
               wire:navigate
               class="inline-block bg-white text-gray-900 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg text-base sm:text-lg focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-lime-500">
                Contact Us Today
            </a>
        </div>
    </section>
</div>
