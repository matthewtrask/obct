<x-filament-widgets::widget>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="{{ route('filament.admin.resources.shows.create') }}"
           class="flex flex-col items-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl hover:shadow-lg transition group border border-purple-200">
            <x-heroicon-o-plus-circle class="w-8 h-8 text-purple-600 mb-2 group-hover:scale-110 transition"/>
            <span class="text-sm font-semibold text-gray-700">New Show</span>
        </a>

        <a href="{{ route('filament.admin.resources.classes.create') }}"
           class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:shadow-lg transition group border border-blue-200">
            <x-heroicon-o-academic-cap class="w-8 h-8 text-blue-600 mb-2 group-hover:scale-110 transition"/>
            <span class="text-sm font-semibold text-gray-700">New Class</span>
        </a>

        <a href="{{ route('filament.admin.resources.announcements.create') }}"
           class="flex flex-col items-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl hover:shadow-lg transition group border border-green-200">
            <x-heroicon-o-megaphone class="w-8 h-8 text-green-600 mb-2 group-hover:scale-110 transition"/>
            <span class="text-sm font-semibold text-gray-700">New Announcement</span>
        </a>

        <a href="{{ route('filament.admin.resources.galleries.create') }}"
           class="flex flex-col items-center p-6 bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl hover:shadow-lg transition group border border-pink-200">
            <x-heroicon-o-photo class="w-8 h-8 text-pink-600 mb-2 group-hover:scale-110 transition"/>
            <span class="text-sm font-semibold text-gray-700">New Gallery</span>
        </a>
    </div>
</x-filament-widgets::widget>
