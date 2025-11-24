<div class="max-w-6xl mx-auto">
    <!-- Breadcrumb -->
    <nav class="flex mb-8 text-sm text-gray-500">
        <a href="{{ route('dashboard') }}" class="hover:text-blue-600 transition">Início</a>
        <span class="mx-2">/</span>
        <span class="text-gray-900 font-medium">Cálculo I</span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content (Preview & Details) -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Header -->
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Resumo Completo de Cálculo I - Limites e Derivadas</h1>
                <div class="flex items-center gap-4 text-sm">
                    <div class="flex items-center gap-2">
                        <img src="https://ui-avatars.com/api/?name=Ana+Silva&background=random" class="w-8 h-8 rounded-full">
                        <span class="font-medium text-gray-900">Ana Silva</span>
                    </div>
                    <span class="text-gray-300">|</span>
                    <span class="text-gray-600">USP</span>
                    <span class="text-gray-300">|</span>
                    <div class="flex items-center text-yellow-400 font-bold">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        4.9 <span class="text-gray-400 font-normal ml-1">(128 avaliações)</span>
                    </div>
                </div>
            </div>

            <!-- Document Preview -->
            <div class="bg-gray-100 rounded-2xl border border-gray-200 aspect-[4/3] relative overflow-hidden group">
                <!-- PDF Iframe -->
                <iframe src="https://pdfobject.com/pdf/sample.pdf#toolbar=0&navpanes=0&scrollbar=0" class="w-full h-full pointer-events-none" frameborder="0"></iframe>
                
                <!-- Blur/Gradient Overlay -->
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-b from-transparent via-white/90 to-white backdrop-blur-[2px] flex items-center justify-center">
                    <div class="text-center p-6">
                        <p class="text-gray-900 font-bold text-lg mb-2">Este é apenas um trecho</p>
                        <p class="text-gray-500 mb-6">Para visualizar o documento completo, faça o download.</p>
                        <button wire:click="download" class="px-8 py-3 bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-600/20 transform hover:scale-105">
                            Baixar Material Completo
                        </button>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Descrição</h3>
                <p class="text-gray-600 leading-relaxed">
                    Este material contém um resumo completo da disciplina de Cálculo I, focado nos tópicos de Limites e Derivadas. Inclui definições teóricas, exemplos práticos e uma lista de exercícios resolvidos passo a passo. Ideal para revisão antes das provas P1 e P2.
                </p>
                <div class="flex flex-wrap gap-2 mt-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium">#Cálculo</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium">#Limites</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium">#Derivadas</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm font-medium">#Exatas</span>
                </div>
            </div>
        </div>

        <!-- Sidebar Actions -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Main Actions Card -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm sticky top-24">
                <button wire:click="download" class="w-full flex items-center justify-center px-6 py-4 bg-blue-600 text-white rounded-xl font-bold text-lg hover:bg-blue-700 transition shadow-lg shadow-blue-600/20 mb-4 group">
                    <svg class="w-6 h-6 mr-2 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    Baixar Material
                </button>
                
                <!-- Like/Dislike -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <button wire:click="vote('like')" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl font-medium text-gray-700 hover:bg-gray-50 transition {{ $userVote === 'like' ? 'bg-green-50 text-green-600 border-green-200' : '' }}">
                        <svg class="w-5 h-5 mr-2" fill="{{ $userVote === 'like' ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                        {{ $likes }}
                    </button>
                    <button wire:click="vote('dislike')" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl font-medium text-gray-700 hover:bg-gray-50 transition {{ $userVote === 'dislike' ? 'bg-red-50 text-red-600 border-red-200' : '' }}">
                        <svg class="w-5 h-5 mr-2" fill="{{ $userVote === 'dislike' ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.095c.5 0 .905-.405.905-.905 0-.714.211-1.412.608-2.006L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5"></path></svg>
                        {{ $dislikes }}
                    </button>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <button wire:click="toggleFavorite" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl font-medium text-gray-700 hover:bg-gray-50 transition {{ $isFavorite ? 'text-red-500 border-red-200 bg-red-50' : '' }}">
                        <svg class="w-5 h-5 mr-2 {{ $isFavorite ? 'fill-current' : 'fill-none' }}" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        {{ $isFavorite ? 'Salvo' : 'Salvar' }}
                    </button>
                    <button wire:click="$set('showShareModal', true)" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl font-medium text-gray-700 hover:bg-gray-50 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                        Compartilhar
                    </button>
                </div>

                <div class="mt-6 pt-6 border-t border-gray-100">
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <span>Downloads</span>
                        <span class="font-bold text-gray-900">{{ number_format($downloadCount) }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-2">
                        <span>Tamanho</span>
                        <span class="font-bold text-gray-900">2.4 MB</span>
                    </div>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>Formato</span>
                        <span class="font-bold text-gray-900 uppercase">PDF</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comments Section -->
    <x-comments-section :comments="$comments" />

    <!-- Share Modal -->
    <x-modals.share :show="$showShareModal" />
    </div>
</div>
