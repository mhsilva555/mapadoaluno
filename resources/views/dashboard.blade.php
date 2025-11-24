<x-layouts.dashboard>
    <!-- Search Header -->
    <div class="max-w-4xl mx-auto mb-12 text-center">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">O que você quer estudar hoje?</h1>
        <div class="relative max-w-2xl mx-auto">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" class="block w-full pl-12 pr-4 py-4 bg-white border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg shadow-sm placeholder-gray-400 transition" placeholder="Pesquise por matéria, universidade ou título...">
            <div class="absolute inset-y-0 right-0 pr-2 flex items-center">
                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                </button>
            </div>
        </div>
        
        <!-- Quick Filters -->
        <div class="flex flex-wrap justify-center gap-2 mt-4">
            <button class="px-4 py-1.5 bg-white border border-gray-200 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition">Cálculo I</button>
            <button class="px-4 py-1.5 bg-white border border-gray-200 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition">Direito Civil</button>
            <button class="px-4 py-1.5 bg-white border border-gray-200 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition">Anatomia</button>
            <button class="px-4 py-1.5 bg-white border border-gray-200 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition">Programação Web</button>
        </div>
    </div>

    <!-- Segmented Control -->
    <div class="flex items-center justify-between mb-8">
        <div class="bg-gray-200/50 p-1 rounded-xl inline-flex">
            <button class="px-6 py-2 bg-white text-gray-900 shadow-sm rounded-lg text-sm font-bold transition">Todos</button>
            <button class="px-6 py-2 text-gray-600 hover:text-gray-900 rounded-lg text-sm font-medium transition">Resumos</button>
            <button class="px-6 py-2 text-gray-600 hover:text-gray-900 rounded-lg text-sm font-medium transition">Provas</button>
            <button class="px-6 py-2 text-gray-600 hover:text-gray-900 rounded-lg text-sm font-medium transition">Trabalhos</button>
        </div>
        
        <div class="flex items-center gap-2">
            <span class="text-sm text-gray-500">Ordenar por:</span>
            <select class="bg-transparent border-none text-sm font-bold text-gray-900 focus:ring-0 cursor-pointer">
                <option>Relevância</option>
                <option>Mais recentes</option>
                <option>Mais baixados</option>
            </select>
        </div>
    </div>

    <!-- Material List -->
    <div class="space-y-8">
        <!-- Card 1 -->
        <x-material-card
            id="1"
            title="Cálculo I - Atividade de Estudo II - 30-11-2015 - Unicesumar EAD"
            subject="Cálculo"
            university="Centro Universitário de Maringá - EAD"
            author="Diego Duarte"
            author-avatar="https://ui-avatars.com/api/?name=Diego+Duarte&background=random"
            pages="7"
        >
            <x-slot:thumbnail>
                <div class="absolute inset-0 p-4 opacity-50">
                    <div class="w-full h-2 bg-gray-200 rounded mb-2"></div>
                    <div class="w-3/4 h-2 bg-gray-200 rounded mb-4"></div>
                    <div class="space-y-2">
                        <div class="w-full h-1.5 bg-gray-100 rounded"></div>
                        <div class="w-full h-1.5 bg-gray-100 rounded"></div>
                        <div class="w-full h-1.5 bg-gray-100 rounded"></div>
                        <div class="w-5/6 h-1.5 bg-gray-100 rounded"></div>
                    </div>
                </div>
            </x-slot:thumbnail>
        </x-material-card>

        <!-- Card 2 -->
        <x-material-card
            id="2"
            title="Exercício Força Cortante e Momento Fletor Resolvido Passo-à-passo - Engenharia - Unicesumar EAD"
            subject="Resistência dos Materiais"
            university="Centro Universitário de Maringá - EAD"
            author="Diego Duarte"
            author-avatar="https://ui-avatars.com/api/?name=Diego+Duarte&background=random"
            pages="6"
        >
            <x-slot:thumbnail>
                <div class="absolute inset-0 p-4 opacity-50">
                    <div class="w-full h-2 bg-gray-200 rounded mb-2"></div>
                    <div class="w-3/4 h-2 bg-gray-200 rounded mb-4"></div>
                    <div class="space-y-2">
                        <div class="w-full h-1.5 bg-gray-100 rounded"></div>
                        <div class="w-full h-1.5 bg-gray-100 rounded"></div>
                        <div class="w-full h-1.5 bg-gray-100 rounded"></div>
                        <div class="w-5/6 h-1.5 bg-gray-100 rounded"></div>
                    </div>
                    <div class="mt-4 w-full h-20 bg-gray-50 rounded border border-gray-100"></div>
                </div>
            </x-slot:thumbnail>
        </x-material-card>

        <!-- Card 3 -->
        <x-material-card
            id="3"
            title="Mapa Mental - Direito Constitucional - Direitos Fundamentais"
            subject="Direito"
            university="UFRJ"
            author="Lucas M."
            author-avatar="https://ui-avatars.com/api/?name=Lucas+M&background=random"
            pages="1"
        >
            <x-slot:thumbnail>
                <div class="absolute top-4 right-4 bg-green-100 px-2 py-1 rounded-md text-xs font-bold text-green-600 uppercase tracking-wide">Mapa Mental</div>
                <svg class="w-16 h-16 text-green-200" fill="currentColor" viewBox="0 0 24 24"><path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 00-1.391-.836l-3.9 1.3a1 1 0 000 1.92l3.9 1.3a1 1 0 001.391-.836 1 1 0 00.045-.352V6.628a1 1 0 00-.045-.352zM6 13a2 2 0 012-2 1 1 0 012 2v6a2 2 0 01-2 2 1 1 0 01-2-2v-6zM14 13a2 2 0 012-2 1 1 0 012 2v6a2 2 0 01-2 2 1 1 0 01-2-2v-6z"></path></svg>
            </x-slot:thumbnail>
        </x-material-card>
    </div>
</x-layouts.dashboard>
