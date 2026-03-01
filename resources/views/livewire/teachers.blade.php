<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Meet Our Teachers</h1>
            <p class="text-xl text-gray-800">Experienced professionals dedicated to nurturing young talent</p>
        </div>
    </section>

    <!-- Teachers Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($this->teachers->isEmpty())
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600">Teacher profiles coming soon!</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    @foreach($this->teachers as $teacher)
                        <article class="text-center group">
                            @if($teacher->image)
                                <div class="mb-6 overflow-hidden rounded-2xl">
                                    <img src="{{ cdn_url($teacher->image) }}"
                                         alt="{{ $teacher->name }}"
                                         class="w-full h-80 object-cover group-hover:scale-105 transition duration-300">
                                </div>
                            @else
                                <div class="mb-6 bg-lime-100 rounded-2xl h-80 flex items-center justify-center">
                                    <span class="text-6xl text-lime-500" aria-hidden="true">🎭</span>
                                </div>
                            @endif

                            <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $teacher->name }}</h2>

                            @if($teacher->specialties)
                                <p class="text-lime-600 font-semibold mb-4">{{ $teacher->specialties }}</p>
                            @endif

                            <p class="text-gray-700 leading-relaxed">{{ $teacher->bio }}</p>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-50 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Join Our Community</h2>
            <p class="text-xl text-gray-600 mb-8">Learn from the best instructors in Atlanta!</p>
            <a href="/classes" wire:navigate class="inline-block bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg">
                View Classes
            </a>
        </div>
    </section>
</div>
