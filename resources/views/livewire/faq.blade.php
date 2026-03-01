<div>
    <!-- Hero -->
    <section class="bg-lime-500 text-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
            <p class="text-xl text-gray-800">Find answers to common questions</p>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($this->faqs->isEmpty())
                <div class="text-center py-12">
                    <p class="text-xl text-gray-600">No FAQs available yet. Check back soon!</p>
                </div>
            @else
                <div class="space-y-8" x-data="{ openFaq: null }">
                    @foreach($this->faqs as $category => $questions)
                        @if($category)
                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-lime-500">
                                    {{ $category }}
                                </h2>
                                @endif

                                <div class="space-y-4">
                                    @foreach($questions as $faq)
                                        <div class="border-2 border-gray-200 rounded-lg overflow-hidden hover:border-lime-500 transition">
                                            <button @click="openFaq === {{ $faq->id }} ? openFaq = null : openFaq = {{ $faq->id }}"
                                                    class="w-full flex items-center justify-between p-6 text-left focus:outline-none focus:ring-2 focus:ring-lime-500"
                                                    :aria-expanded="(openFaq === {{ $faq->id }}).toString()">
                                                <h3 class="text-lg font-bold text-gray-800 pr-8">{{ $faq->question }}</h3>
                                                <svg class="w-6 h-6 text-lime-600 flex-shrink-0 transition-transform"
                                                     :class="{ 'rotate-180': openFaq === {{ $faq->id }} }"
                                                     fill="none"
                                                     stroke="currentColor"
                                                     viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                                </svg>
                                            </button>

                                            <div x-show="openFaq === {{ $faq->id }}"
                                                 x-collapse
                                                 class="px-6 pb-6">
                                                <div class="prose prose-lg max-w-none text-gray-700">
                                                    {!! nl2br(e($faq->answer)) !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @if($category)
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-50 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Still Have Questions?</h2>
            <p class="text-xl text-gray-600 mb-8">We're here to help! Contact us anytime.</p>
            <a href="/contact" wire:navigate class="inline-block bg-lime-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-lime-400 transition shadow-lg">
                Contact Us
            </a>
        </div>
    </section>
</div>
