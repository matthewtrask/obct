<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">About OBCT</h1>
            <p class="text-xl text-gray-800">Inspiring young performers since 2000</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($this->page)
                <!-- Main Image if available -->
                @if($this->page->image)
                    <div class="mb-12">
                        <img src="{{ cdn_url($this->page->image) }}"
                             alt="{{ $this->page->title }}"
                             class="w-full h-96 object-cover rounded-2xl shadow-xl">
                    </div>
                @endif

                <!-- Page Content -->
                <div class="prose prose-lg max-w-none">
                    {!! nl2br(e($this->page->content)) !!}
                </div>
            @else
                <!-- Default About Content -->
                <div class="prose prose-lg max-w-none">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Story</h2>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Off Broadway Children's Theatre (OBCT) has been a cornerstone of performing arts education in the Atlanta area since 2000.
                        We are dedicated to nurturing young talent and providing a safe, supportive environment where children can discover
                        their passion for theater.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-800 mb-4 mt-8">Our Mission</h3>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        To provide high-quality theater education and performance opportunities for young people, fostering creativity,
                        confidence, and a lifelong love of the performing arts.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-800 mb-4 mt-8">What We Offer</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                        <li>Year-round acting, singing, and dance classes</li>
                        <li>Summer intensive programs</li>
                        <li>Full-scale theatrical productions</li>
                        <li>Professional instruction from experienced theater educators</li>
                        <li>Performance opportunities for all skill levels</li>
                        <li>School assembly programs</li>
                    </ul>

                    <h3 class="text-2xl font-bold text-gray-800 mb-4 mt-8">Our Location</h3>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        We're located in the heart of Alpharetta, Georgia, serving students from across the metro Atlanta area.
                    </p>

                    <div class="bg-lime-50 border-2 border-lime-500 rounded-lg p-6 mt-8">
                        <h4 class="font-bold text-gray-800 mb-2">Visit Us</h4>
                        <address class="not-italic text-gray-700">
                            12315 Crabapple Rd Suite 122<br>
                            Alpharetta, GA 30004<br>
                            <a href="tel:+17706642410" class="text-lime-600 hover:text-lime-700 font-semibold">
                                (770) 664-2410
                            </a>
                        </address>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-lime-600 mb-2">25+</div>
                    <div class="text-gray-600">Years of Excellence</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-lime-600 mb-2">1000+</div>
                    <div class="text-gray-600">Students Taught</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-lime-600 mb-2">100+</div>
                    <div class="text-gray-600">Productions Staged</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-lime-600 mb-2">20+</div>
                    <div class="text-gray-600">Talented Instructors</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-900 text-white text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-4">Join Our Community</h2>
            <p class="text-xl text-gray-300 mb-8">Discover your child's potential in the performing arts!</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/classes" wire:navigate class="inline-block bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg">
                    View Classes
                </a>
                <a href="/contact" wire:navigate class="inline-block border-2 border-lime-500 text-lime-500 px-8 py-4 rounded-lg font-semibold hover:bg-lime-500 hover:text-gray-900 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</div>
