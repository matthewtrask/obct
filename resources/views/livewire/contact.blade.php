<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-gray-800">We'd love to hear from you!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">

                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Send us a Message</h2>

                    @if($sent)
                        <div class="bg-lime-50 border-2 border-lime-500 rounded-lg p-6 mb-6" role="alert">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-lime-600 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <h3 class="font-bold text-lime-800 mb-1">Message Sent!</h3>
                                    <p class="text-lime-700">Thanks for contacting us. We'll get back to you soon!</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form wire:submit="submit" class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   id="name"
                                   wire:model="name"
                                   aria-required="true"
                                   @error('name') aria-invalid="true" @enderror
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-lime-500 focus:ring focus:ring-lime-200 transition"
                                   placeholder="Your name">
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email"
                                   id="email"
                                   wire:model="email"
                                   aria-required="true"
                                   @error('email') aria-invalid="true" @enderror
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-lime-500 focus:ring focus:ring-lime-200 transition"
                                   placeholder="your@email.com">
                            @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                Phone
                            </label>
                            <input type="tel"
                                   id="phone"
                                   wire:model="phone"
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-lime-500 focus:ring focus:ring-lime-200 transition"
                                   placeholder="(123) 456-7890">
                            @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message"
                                      wire:model="message"
                                      rows="6"
                                      aria-required="true"
                                      @error('message') aria-invalid="true" @enderror
                                      class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-lime-500 focus:ring focus:ring-lime-200 transition"
                                      placeholder="Tell us how we can help..."></textarea>
                            @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                                class="w-full bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>

                    <div class="space-y-8">
                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Location</h3>
                                <address class="not-italic text-gray-600">
                                    {{ \App\Models\Setting::get('address_line1', '12315 Crabapple Rd Suite 122') }}<br>
                                    {{ \App\Models\Setting::get('address_line2', 'Alpharetta, GA 30004') }}
                                </address>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Phone</h3>
                                <a href="tel:{{ \App\Models\Setting::get('phone_e164', '+17706642410') }}" class="text-lime-600 hover:text-lime-700 font-semibold">
                                    {{ \App\Models\Setting::get('phone', '770-664-2410') }}
                                </a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Email</h3>
                                <a href="mailto:{{ \App\Models\Setting::get('email', 'offbroadway@msn.com') }}" class="text-lime-600 hover:text-lime-700 font-semibold">
                                    {{ \App\Models\Setting::get('email', 'offbroadway@msn.com') }}
                                </a>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-1">Office Hours</h3>
                                <p class="text-gray-600">
                                    {{ \App\Models\Setting::get('hours_weekday', 'Monday - Friday: 9:00 AM - 5:00 PM') }}<br>
                                    {{ \App\Models\Setting::get('hours_weekend', 'Saturday: By appointment') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="mt-8 rounded-lg overflow-hidden shadow-lg h-48 md:h-64 lg:h-80">
                        <iframe
                            title="Off Broadway Children's Theatre location map"
                            src="{{ \App\Models\Setting::get('maps_embed_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.6494897392854!2d-84.2698!3d34.0521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f574e0c2e6e5b1%3A0x123456789!2s12315%20Crabapple%20Rd%20Suite%20122%2C%20Alpharetta%2C%20GA%2030004!5e0!3m2!1sen!2sus!4v1234567890') }}"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
