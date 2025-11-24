@props(['comments'])

<div class="mt-12 max-w-4xl">
    <h3 class="text-2xl font-bold text-gray-900 mb-6">Comentários ({{ count($comments) }})</h3>
    
    <!-- Add Comment -->
    <div class="bg-white rounded-xl border border-gray-200 p-6 mb-8 shadow-sm">
        <div class="flex gap-4">
            <img src="https://ui-avatars.com/api/?name=Voce&background=random" class="w-10 h-10 rounded-full">
            <div class="flex-1">
                <textarea wire:model="newComment" class="w-full border-gray-200 rounded-xl focus:ring-blue-500 focus:border-blue-500" rows="3" placeholder="Adicione um comentário..."></textarea>
                <div class="flex justify-end mt-2">
                    <button wire:click="postComment" class="px-4 py-2 bg-blue-600 text-white rounded-lg font-bold text-sm hover:bg-blue-700 transition">Comentar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Comment List -->
    <div class="space-y-6">
        @foreach($comments as $comment)
        <div class="flex gap-4">
            <img src="{{ $comment['avatar'] }}" class="w-10 h-10 rounded-full">
            <div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="font-bold text-gray-900">{{ $comment['user'] }}</span>
                        <span class="text-xs text-gray-500">{{ $comment['date'] }}</span>
                    </div>
                    <p class="text-gray-700">{{ $comment['text'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
