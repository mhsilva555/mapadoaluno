@props([
    'id',
    'title',
    'subject',
    'university',
    'author',
    'authorAvatar',
    'pages',
])

<div class="group">
    <a href="{{ route('material.show', $id) }}" class="flex flex-col md:flex-row gap-6 hover:bg-gray-50 rounded-2xl p-4 transition -mx-4">
        <!-- Thumbnail -->
        <div class="w-full md:w-64 h-32 bg-white border border-gray-200 rounded-xl relative overflow-hidden shrink-0 shadow-sm group-hover:shadow-md transition flex items-center justify-center">
            {{ $thumbnail ?? '' }}
            
            <!-- Page Badge -->
            <div class="absolute bottom-2 right-2 bg-gray-800 text-white text-xs font-bold px-2 py-1 rounded-md">
                {{ $pages }} pág.
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1 flex flex-col">
            <div class="mb-auto">
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition leading-tight">
                    {{ $title }}
                </h3>
                <div class="flex items-center gap-2 text-sm">
                    <span class="font-bold text-orange-500">{{ $subject }}</span>
                    <span class="text-gray-400">•</span>
                    <span class="text-gray-500">{{ $university }}</span>
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center gap-3">
                    <img src="{{ $authorAvatar }}" class="w-8 h-8 rounded-full">
                    <span class="text-gray-600 font-medium text-sm">{{ $author }}</span>
                </div>
                <button class="text-gray-400 hover:text-gray-600 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                </button>
            </div>
        </div>
    </a>
    <hr class="border-gray-100 mt-8">
</div>
