<x-filament-widgets::widget>
    <div
        x-data="{ open: false }"
        class="rounded-xl border border-gray-200 bg-white overflow-hidden shadow-sm"
    >
        {{-- Collapsible header --}}
        <button
            @click="open = !open"
            class="w-full flex items-center justify-between px-6 py-4 text-left hover:bg-gray-50 transition"
            type="button"
        >
            <div class="flex items-center gap-3">
                <div class="flex-shrink-0 w-9 h-9 rounded-full bg-lime-100 flex items-center justify-center">
                    <x-heroicon-o-book-open class="w-5 h-5 text-lime-600"/>
                </div>
                <div>
                    <p class="font-bold text-gray-800 text-base">How-To Guide</p>
                    <p class="text-sm text-gray-500">Step-by-step instructions for managing your site</p>
                </div>
            </div>
            <x-heroicon-o-chevron-down
                class="w-5 h-5 text-gray-400 transition-transform duration-200"
                x-bind:class="open ? 'rotate-180' : ''"
            />
        </button>

        {{-- Expandable body --}}
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2">
            <div class="border-t border-gray-100 px-6 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    {{-- Uploading Images --}}
                    <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
                        <div class="flex items-center gap-2 mb-3">
                            <x-heroicon-o-photo class="w-5 h-5 text-blue-600 flex-shrink-0"/>
                            <h3 class="font-bold text-gray-800">Uploading Images</h3>
                        </div>
                        <ol class="space-y-2 text-sm text-gray-700 list-decimal list-inside">
                            <li>Open the item you want to add a photo to (e.g. a Class or Show).</li>
                            <li>Scroll to the image field and click <strong>Select or Upload Image</strong>.</li>
                            <li>In the media library that opens, click <strong>Upload</strong> (top right) and choose your photo.</li>
                            <li>Click the photo to select it, then click <strong>Insert</strong>.</li>
                            <li>Click <strong>Save</strong> at the bottom of the page.</li>
                        </ol>
                        <p class="mt-3 text-xs text-blue-700 bg-blue-100 rounded-lg px-3 py-2">
                            💡 Tip: JPG or PNG files work best. Try to keep photos under 5 MB.
                        </p>
                    </div>

                    {{-- Adding a Summer Camp --}}
                    <div class="bg-green-50 rounded-xl p-5 border border-green-100">
                        <div class="flex items-center gap-2 mb-3">
                            <x-heroicon-o-academic-cap class="w-5 h-5 text-green-600 flex-shrink-0"/>
                            <h3 class="font-bold text-gray-800">Adding a Summer Camp</h3>
                        </div>
                        <ol class="space-y-2 text-sm text-gray-700 list-decimal list-inside">
                            <li>In the left menu, click <strong>Classes &amp; Camps</strong>.</li>
                            <li>Click <strong>New Class</strong> (top right).</li>
                            <li>Fill in the class name, description, and age range.</li>
                            <li>Under <strong>Class Type</strong>, select <strong>Summer Camp</strong> from the dropdown.</li>
                            <li>Add start and end dates, capacity, and price.</li>
                            <li>Paste the JackRabbit signup link into <strong>Registration Link (JackRabbit URL)</strong>.</li>
                            <li>Upload a photo, then click <strong>Save</strong>.</li>
                        </ol>
                        <p class="mt-3 text-xs text-green-700 bg-green-100 rounded-lg px-3 py-2">
                            💡 The camp will automatically appear under the "Summer Camps" tab on the website.
                        </p>
                    </div>

                    {{-- Adding a Year-Round Class --}}
                    <div class="bg-purple-50 rounded-xl p-5 border border-purple-100">
                        <div class="flex items-center gap-2 mb-3">
                            <x-heroicon-o-calendar-days class="w-5 h-5 text-purple-600 flex-shrink-0"/>
                            <h3 class="font-bold text-gray-800">Adding a Year-Round Class</h3>
                        </div>
                        <ol class="space-y-2 text-sm text-gray-700 list-decimal list-inside">
                            <li>In the left menu, click <strong>Classes &amp; Camps</strong>.</li>
                            <li>Click <strong>New Class</strong>.</li>
                            <li>Fill in the name, description, age range, and schedule (e.g. "Tuesdays 4–5 PM").</li>
                            <li>Under <strong>Class Type</strong>, select <strong>Year-Round</strong>.</li>
                            <li>Paste the JackRabbit registration link.</li>
                            <li>Upload a photo, then click <strong>Save</strong>.</li>
                        </ol>
                        <p class="mt-3 text-xs text-purple-700 bg-purple-100 rounded-lg px-3 py-2">
                            💡 Use "Featured" toggle to show a class on the home page.
                        </p>
                    </div>

                    {{-- Adding a Show --}}
                    <div class="bg-yellow-50 rounded-xl p-5 border border-yellow-100">
                        <div class="flex items-center gap-2 mb-3">
                            <x-heroicon-o-star class="w-5 h-5 text-yellow-600 flex-shrink-0"/>
                            <h3 class="font-bold text-gray-800">Adding a Show</h3>
                        </div>
                        <ol class="space-y-2 text-sm text-gray-700 list-decimal list-inside">
                            <li>Click <strong>Shows &amp; Performances</strong> in the left menu.</li>
                            <li>Click <strong>New Show</strong>.</li>
                            <li>Enter the show title, description, and performance dates.</li>
                            <li>Set the <strong>Status</strong> to <em>Upcoming</em>, <em>Running</em>, or <em>Past</em>.</li>
                            <li>Paste the Yapsody ticket link into <strong>Ticket Purchase Link</strong>.</li>
                            <li>Upload a poster or show image.</li>
                            <li>Toggle <strong>Current Show</strong> on to display it on the home page, then click <strong>Save</strong>.</li>
                        </ol>
                    </div>

                    {{-- Posting an Announcement --}}
                    <div class="bg-orange-50 rounded-xl p-5 border border-orange-100">
                        <div class="flex items-center gap-2 mb-3">
                            <x-heroicon-o-megaphone class="w-5 h-5 text-orange-600 flex-shrink-0"/>
                            <h3 class="font-bold text-gray-800">Posting an Announcement</h3>
                        </div>
                        <ol class="space-y-2 text-sm text-gray-700 list-decimal list-inside">
                            <li>Click <strong>What's New</strong> in the left menu.</li>
                            <li>Click <strong>New Announcement</strong>.</li>
                            <li>Enter a title and the announcement text.</li>
                            <li>Optionally add a button link (e.g. a registration page).</li>
                            <li>Set an <strong>Expiry Date</strong> if the announcement should disappear automatically.</li>
                            <li>Make sure <strong>Active</strong> is turned on, then click <strong>Save</strong>.</li>
                        </ol>
                        <p class="mt-3 text-xs text-orange-700 bg-orange-100 rounded-lg px-3 py-2">
                            💡 Announcements appear as a highlighted banner on the home page.
                        </p>
                    </div>

                    {{-- Managing the Gallery --}}
                    <div class="bg-pink-50 rounded-xl p-5 border border-pink-100">
                        <div class="flex items-center gap-2 mb-3">
                            <x-heroicon-o-camera class="w-5 h-5 text-pink-600 flex-shrink-0"/>
                            <h3 class="font-bold text-gray-800">Adding a Photo Gallery</h3>
                        </div>
                        <ol class="space-y-2 text-sm text-gray-700 list-decimal list-inside">
                            <li>Click <strong>Photo Galleries</strong> in the left menu.</li>
                            <li>Click <strong>New Gallery</strong>.</li>
                            <li>Give the gallery a title (e.g. "Peter Pan – Show Weekend").</li>
                            <li>Set the event date and optionally link it to a Show.</li>
                            <li>Upload a cover photo (shown as the thumbnail on the galleries page).</li>
                            <li>Make sure <strong>Show on website</strong> is toggled on, then click <strong>Save</strong>.</li>
                        </ol>
                        <p class="mt-3 text-xs text-pink-700 bg-pink-100 rounded-lg px-3 py-2">
                            💡 Individual gallery photos are managed from within each gallery record.
                        </p>
                    </div>

                </div>

                <p class="mt-6 text-xs text-center text-gray-400">
                    Need help? Email <a href="mailto:mjftrask@gmail.com" class="underline hover:text-gray-600">your site administrator</a>.
                </p>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
