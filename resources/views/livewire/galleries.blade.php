<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Photo Gallery</h1>
            <p class="text-xl text-gray-800">Memories from our performances and events</p>
        </div>
    </section>

    <!-- Galleries Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($this->galleries->isEmpty())
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600">Photo galleries coming soon!</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($this->galleries as $gallery)
                        <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition group">
                            @if($gallery->cover_image)
                                <div class="aspect-video overflow-hidden">
                                    <img src="{{ cdn_url($gallery->cover_image) }}"
                                         alt="{{ $gallery->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </div>
                            @elseif($gallery->images->isNotEmpty())
                                <div class="aspect-video overflow-hidden">
                                    <img src="{{ cdn_url($gallery->images->first()->image_path) }}"
                                         alt="{{ $gallery->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </div>
                            @else
                                <div class="aspect-video bg-gray-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif

                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $gallery->title }}</h2>

                                @if($gallery->description)
                                    <p class="text-gray-600 mb-4">{{ Str::limit($gallery->description, 120) }}</p>
                                @endif

                                <div class="flex items-center justify-between text-sm text-gray-500">
                                    @if($gallery->event_date)
                                        <span>📅 {{ $gallery->event_date->format('M j, Y') }}</span>
                                    @endif

                                    @if($gallery->images->isNotEmpty())
                                        <span>📸 {{ $gallery->images->count() }} {{ Str::plural('photo', $gallery->images->count()) }}</span>
                                    @endif
                                </div>

                                @if($gallery->show)
                                    <div class="mt-4 pt-4 border-t border-gray-200">
                                        <p class="text-sm text-lime-600 font-semibold">
                                            From: {{ $gallery->show->title }}
                                        </p>
                                    </div>
                                @endif

                                <!-- Photo Grid Preview -->
                                @if($gallery->images->count() > 0)
                                    <div class="mt-4 grid grid-cols-2 sm:grid-cols-3 gap-2" x-data="{ showLightbox: false, currentImage: 0 }">
                                        @foreach($gallery->images->take(6) as $index => $image)
                                            <button @click="showLightbox = true; currentImage = {{ $index }}"
                                                    aria-label="View photo {{ $index + 1 }}{{ $image->caption ? ': ' . $image->caption : '' }} in lightbox"
                                                    class="aspect-square overflow-hidden rounded-lg focus:ring-2 focus:ring-lime-500 focus:ring-offset-2">
                                                <img src="{{ cdn_url($image->image_path) }}"
                                                     alt="{{ $image->caption ?? $gallery->title }}"
                                                     class="w-full h-full object-cover hover:opacity-90 transition">
                                            </button>
                                        @endforeach

                                        @if($gallery->images->count() > 6)
                                            <div class="aspect-square bg-gray-900 bg-opacity-75 rounded-lg flex items-center justify-center text-white font-bold">
                                                +{{ $gallery->images->count() - 6 }}
                                            </div>
                                        @endif

                                        <!-- Simple Lightbox -->
                                        <div x-show="showLightbox"
                                             @click.away="showLightbox = false"
                                             @keydown.escape.window="showLightbox = false"
                                             role="dialog"
                                             aria-modal="true"
                                             aria-label="{{ $gallery->title }} photo gallery"
                                             style="display: none;"
                                             class="fixed inset-0 z-50 bg-black bg-opacity-90 flex items-center justify-center p-4">
                                            <button @click="showLightbox = false"
                                                    aria-label="Close gallery"
                                                    class="absolute top-4 right-4 text-white text-4xl hover:text-lime-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black rounded">
                                                <span aria-hidden="true">×</span>
                                            </button>

                                            <div class="max-w-5xl w-full">
                                                @foreach($gallery->images as $index => $image)
                                                    <img x-show="currentImage === {{ $index }}"
                                                         src="{{ cdn_url($image->image_path) }}"
                                                         alt="{{ $image->caption ?? $gallery->title }}"
                                                         class="w-full h-auto rounded-lg">
                                                @endforeach

                                                @if($gallery->images->count() > 1)
                                                    <div class="flex items-center justify-center gap-4 mt-4">
                                                        <button @click="currentImage = currentImage > 0 ? currentImage - 1 : {{ $gallery->images->count() - 1 }}"
                                                                class="bg-white text-gray-900 px-4 py-2 rounded-lg hover:bg-lime-500 transition">
                                                            Previous
                                                        </button>
                                                        <span class="text-white" x-text="`${currentImage + 1} / {{ $gallery->images->count() }}`"></span>
                                                        <button @click="currentImage = currentImage < {{ $gallery->images->count() - 1 }} ? currentImage + 1 : 0"
                                                                class="bg-white text-gray-900 px-4 py-2 rounded-lg hover:bg-lime-500 transition">
                                                            Next
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</div>
