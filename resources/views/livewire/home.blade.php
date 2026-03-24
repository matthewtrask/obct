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
        <section class="py-12 sm:py-16 bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex items-center justify-center gap-3 mb-8 sm:mb-12">
                    <div class="h-px flex-1 bg-lime-300 max-w-[80px]"></div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 text-center">What's New at OBCT</h2>
                    <div class="h-px flex-1 bg-lime-300 max-w-[80px]"></div>
                </div>

                <div class="flex flex-col gap-6">
                    @foreach($this->news as $item)
                        <article
                            x-data="{ expanded: false }"
                            class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition"
                        >
                            {{-- Colored top bar --}}
                            <div class="h-1.5 bg-gradient-to-r from-lime-400 to-green-500"></div>

                            <div class="p-6 sm:p-8">
                                {{-- Header row --}}
                                <div class="flex items-start gap-4 mb-4">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-lime-100 flex items-center justify-center mt-0.5">
                                        <svg class="w-5 h-5 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl sm:text-2xl font-bold text-gray-800 leading-snug">{{ $item->title }}</h3>
                                </div>

                                {{-- Content with expand/collapse for long text --}}
                                @php $isLong = strlen($item->content) > 300; @endphp

                                <div class="text-gray-600 leading-relaxed text-sm sm:text-base pl-14">
                                    @if($isLong)
                                        <div x-show="!expanded" class="relative">
                                            <p>{!! nl2br(e(Str::limit($item->content, 280))) !!}</p>
                                            <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-white to-transparent"></div>
                                        </div>
                                        <div x-show="expanded" x-cloak>
                                            <p>{!! nl2br(e($item->content)) !!}</p>
                                        </div>
                                        <button
                                            @click="expanded = !expanded"
                                            class="mt-3 text-lime-600 font-semibold text-sm hover:text-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-500 rounded"
                                        >
                                            <span x-text="expanded ? '↑ Show less' : '↓ Read full announcement'"></span>
                                        </button>
                                    @else
                                        <p>{!! nl2br(e($item->content)) !!}</p>
                                    @endif
                                </div>

                                {{-- Optional link button --}}
                                @if($item->link_url)
                                    <div class="mt-5 pl-14">
                                        <a href="{{ $item->link_url }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="inline-flex items-center gap-2 bg-lime-500 hover:bg-lime-400 text-gray-900 font-bold px-5 py-2.5 rounded-lg transition shadow-sm focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2">
                                            {{ $item->link_text ?? 'Learn More' }}
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
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
                                <img src="{{ cdn_url($class->image) }}"
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
                                    <img src="{{ cdn_url($testimonial->photo) }}"
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
