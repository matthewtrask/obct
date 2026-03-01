<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Our Shows</h1>
            <p class="text-xl text-gray-800">Experience the magic of live theater</p>
        </div>
    </section>

    <!-- Current Show -->
    @if($this->currentShow)
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8">
                    <span class="inline-block px-4 py-2 bg-lime-500 text-gray-900 font-bold rounded-full mb-4">Now Showing</span>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    @if($this->currentShow->show_image)
                        <div class="order-2 md:order-1">
                            <img src="{{ cdn_url($this->currentShow->show_image) }}"
                                 alt="{{ $this->currentShow->title }}"
                                 class="w-full rounded-2xl shadow-2xl">
                        </div>
                    @endif

                    <div class="order-1 md:order-2">
                        <h2 class="text-4xl font-bold text-gray-800 mb-4">{{ $this->currentShow->title }}</h2>

                        @if($this->currentShow->teaser)
                            <p class="text-xl text-lime-600 font-semibold mb-4">{{ $this->currentShow->teaser }}</p>
                        @endif

                        <p class="text-gray-700 mb-6 leading-relaxed text-lg">{{ $this->currentShow->description }}</p>

                        <div class="space-y-3 mb-8">
                            @if($this->currentShow->start_date)
                                <p class="flex items-center text-gray-700">
                                    <span class="font-semibold mr-2">📅 Dates:</span>
                                    {{ $this->currentShow->start_date->format('M j') }} - {{ $this->currentShow->end_date?->format('M j, Y') }}
                                </p>
                            @endif

                            @if($this->currentShow->performance_times)
                                <p class="flex items-start text-gray-700">
                                    <span class="font-semibold mr-2">🎭 Showtimes:</span>
                                    <span>{{ implode(', ', $this->currentShow->performance_times) }}</span>
                                </p>
                            @endif

                            @if($this->currentShow->ticket_price)
                                <p class="flex items-center text-gray-700">
                                    <span class="font-semibold mr-2">🎟️ Tickets:</span>
                                    ${{ number_format($this->currentShow->ticket_price, 2) }}
                                </p>
                            @endif
                        </div>

                        @if($this->currentShow->ticket_url)
                            <a href="{{ $this->currentShow->ticket_url }}"
                               target="_blank"
                               class="inline-block bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg">
                                Buy Tickets
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Upcoming Shows -->
    @if($this->upcomingShows->isNotEmpty())
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Coming Soon</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($this->upcomingShows as $show)
                        <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                            @if($show->show_image)
                                <img src="{{ cdn_url($show->show_image) }}"
                                     alt="{{ $show->title }}"
                                     class="w-full h-64 object-cover">
                            @endif

                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $show->title }}</h3>

                                @if($show->teaser)
                                    <p class="text-lime-600 font-semibold mb-3">{{ $show->teaser }}</p>
                                @endif

                                <p class="text-gray-700 mb-4">{{ Str::limit($show->description, 150) }}</p>

                                @if($show->start_date)
                                    <p class="text-gray-600 text-sm">
                                        📅 {{ $show->start_date->format('M j, Y') }}
                                    </p>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Past Shows -->
    @if($this->pastShows->isNotEmpty())
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Past Productions</h2>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                    @foreach($this->pastShows as $show)
                        <div class="text-center">
                            @if($show->show_image)
                                <img src="{{ cdn_url($show->show_image) }}"
                                     alt="{{ $show->title }}"
                                     class="w-full aspect-square object-cover rounded-lg shadow-md hover:shadow-xl transition mb-3">
                            @endif
                            <h4 class="font-bold text-gray-800 text-sm">{{ $show->title }}</h4>
                            @if($show->start_date)
                                <p class="text-xs text-gray-500">{{ $show->start_date->format('Y') }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA -->
    <section class="py-16 bg-gray-900 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-4">Want to Be Part of the Show?</h2>
            <p class="text-xl text-gray-300 mb-8">Join our talented cast and crew!</p>
            <a href="/classes" wire:navigate class="inline-block bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg">
                Explore Classes
            </a>
        </div>
    </section>
</div>
