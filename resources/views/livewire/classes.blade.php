<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Our Classes</h1>
            <p class="text-xl text-gray-800">Discover the perfect class for your young performer</p>
        </div>
    </section>

    <!-- Filter Tabs -->
    <section class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 py-6 justify-center">
                <button wire:click="$set('selectedType', 'all')"
                        class="px-6 py-2 rounded-lg font-semibold transition {{ $selectedType === 'all' ? 'bg-lime-500 text-gray-900' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    All Classes
                </button>
                <button wire:click="$set('selectedType', 'year-round')"
                        class="px-6 py-2 rounded-lg font-semibold transition {{ $selectedType === 'year-round' ? 'bg-lime-500 text-gray-900' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Year-Round
                </button>
                <button wire:click="$set('selectedType', 'summer')"
                        class="px-6 py-2 rounded-lg font-semibold transition {{ $selectedType === 'summer' ? 'bg-lime-500 text-gray-900' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Summer Camps
                </button>
                <button wire:click="$set('selectedType', 'workshop')"
                        class="px-6 py-2 rounded-lg font-semibold transition {{ $selectedType === 'workshop' ? 'bg-lime-500 text-gray-900' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Workshops
                </button>
            </div>
        </div>
    </section>

    <!-- Classes Grid -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($this->classes->isEmpty())
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600">No classes available at this time. Check back soon!</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($this->classes as $class)
                        <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition flex flex-col h-full">
                            @if($class->image)
                                <img src="{{ cdn_url($class->image) }}"
                                     alt="{{ $class->name }}"
                                     class="w-full h-56 object-cover">
                            @endif

                            <div class="p-6 flex flex-col flex-grow">
                                <!-- Header with title and badge -->
                                <div class="flex items-start justify-between gap-3 mb-3">
                                    <h2 class="text-2xl font-bold text-gray-800 flex-grow">{{ $class->name }}</h2>
                                    @if($class->session_type)
                                        @php
                                            $typeLabels = [
                                                'year-round' => 'Year-Round',
                                                'summer'     => 'Summer Camp',
                                                'workshop'   => 'Workshop',
                                            ];
                                        @endphp
                                        <span class="px-3 py-1 bg-lime-100 text-lime-700 text-xs font-semibold rounded-full whitespace-nowrap flex-shrink-0">
                                            {{ $typeLabels[$class->session_type] ?? ucfirst(str_replace('-', ' ', $class->session_type)) }}
                                        </span>
                                    @endif
                                </div>

                                @if($class->age_range)
                                    <p class="text-sm text-lime-600 font-semibold mb-3">👥 Ages: {{ $class->age_range }}</p>
                                @endif

                                <!-- Description grows to fill space -->
                                <p class="text-gray-700 mb-4 leading-relaxed flex-grow">{{ $class->description }}</p>

                                <!-- Footer info stays at bottom -->
                                <div class="border-t border-gray-200 pt-4 space-y-2 mt-auto">
                                    @if($class->schedule)
                                        <p class="text-sm text-gray-600">📅 {{ $class->schedule }}</p>
                                    @endif

                                    @if($class->start_date && $class->end_date)
                                        <p class="text-sm text-gray-600">
                                            📆 {{ (new DateTimeImmutable($class->start_date))->format('M j') }} - {{ (new DateTimeImmutable($class->end_date))->format('M j, Y') }}
                                        </p>
                                    @endif

                                    @if($class->capacity)
                                        <p class="text-sm text-gray-600">👤 Max students: {{ $class->capacity }}</p>
                                    @endif

                                    @if($class->price)
                                        <p class="text-2xl font-bold text-lime-600 mt-4">${{ number_format($class->price, 2) }}</p>
                                    @endif

                                    @if($class->signup_url)
                                        <a href="{{ $class->signup_url }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="mt-4 inline-block w-full text-center bg-lime-500 hover:bg-lime-400 text-gray-900 font-bold py-3 px-6 rounded-lg transition shadow">
                                            Register Now
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Enroll?</h2>
            <p class="text-xl text-gray-600 mb-8">Contact us today to register your child for classes!</p>
            <a href="/contact" wire:navigate class="inline-block bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg">
                Contact Us
            </a>
        </div>
    </section>
</div>
