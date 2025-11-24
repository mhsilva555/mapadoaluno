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

    <!-- Material Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <a href="{{ route('material.show', 1) }}" class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group cursor-pointer block">
            <div class="h-40 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-t-2xl relative overflow-hidden p-6 flex items-center justify-center">
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-md text-xs font-bold text-blue-600 uppercase tracking-wide">Resumo</div>
                <svg class="w-16 h-16 text-blue-200 group-hover:scale-110 transition duration-300" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z"></path></svg>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-2 mb-3">
                    <img src="https://ui-avatars.com/api/?name=Ana+Silva&background=random" class="w-6 h-6 rounded-full">
                    <span class="text-xs text-gray-500 font-medium">Ana Silva • USP</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition">Resumo Completo de Cálculo I - Limites e Derivadas</h3>
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">Material cobrindo todo o conteúdo do primeiro semestre, com exercícios resolvidos.</p>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                    <div class="flex items-center text-yellow-400 text-sm font-bold">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        4.9 <span class="text-gray-400 font-normal ml-1">(128)</span>
                    </div>
                    <div class="flex items-center text-gray-500 text-sm">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        2.5k
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="{{ route('material.show', 2) }}" class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group cursor-pointer block">
            <div class="h-40 bg-gradient-to-br from-purple-50 to-pink-50 rounded-t-2xl relative overflow-hidden p-6 flex items-center justify-center">
                 <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-md text-xs font-bold text-purple-600 uppercase tracking-wide">Prova</div>
                <svg class="w-16 h-16 text-purple-200 group-hover:scale-110 transition duration-300" fill="currentColor" viewBox="0 0 24 24"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h12a1 1 0 100-2H7zm0 4a1 1 0 000 2h12a1 1 0 100-2H7zm0 4a1 1 0 000 2h12a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-2 mb-3">
                    <img src="https://ui-avatars.com/api/?name=Pedro+Santos&background=random" class="w-6 h-6 rounded-full">
                    <span class="text-xs text-gray-500 font-medium">Pedro Santos • Unicamp</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-purple-600 transition">Prova Antiga - Física II (2023)</h3>
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">PDF da P1 e P2 do ano passado com gabarito não oficial.</p>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                    <div class="flex items-center text-yellow-400 text-sm font-bold">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        4.7 <span class="text-gray-400 font-normal ml-1">(84)</span>
                    </div>
                    <div class="flex items-center text-gray-500 text-sm">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        1.2k
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="{{ route('material.show', 3) }}" class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition group cursor-pointer block">
            <div class="h-40 bg-gradient-to-br from-green-50 to-teal-50 rounded-t-2xl relative overflow-hidden p-6 flex items-center justify-center">
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-md text-xs font-bold text-green-600 uppercase tracking-wide">Mapa Mental</div>
                <svg class="w-16 h-16 text-green-200 group-hover:scale-110 transition duration-300" fill="currentColor" viewBox="0 0 24 24"><path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 00-1.391-.836l-3.9 1.3a1 1 0 000 1.92l3.9 1.3a1 1 0 001.391-.836 1 1 0 00.045-.352V6.628a1 1 0 00-.045-.352zM6 13a2 2 0 012-2 1 1 0 012 2v6a2 2 0 01-2 2 1 1 0 01-2-2v-6zM14 13a2 2 0 012-2 1 1 0 012 2v6a2 2 0 01-2 2 1 1 0 01-2-2v-6z"></path></svg>
            </div>
            <div class="p-5">
                <div class="flex items-center gap-2 mb-3">
                    <img src="https://ui-avatars.com/api/?name=Lucas+M&background=random" class="w-6 h-6 rounded-full">
                    <span class="text-xs text-gray-500 font-medium">Lucas M. • UFRJ</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-green-600 transition">Mapa Mental - Direito Constitucional</h3>
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">Esquema visual sobre Direitos Fundamentais para revisão rápida.</p>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-50">
                    <div class="flex items-center text-yellow-400 text-sm font-bold">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        5.0 <span class="text-gray-400 font-normal ml-1">(56)</span>
                    </div>
                    <div class="flex items-center text-gray-500 text-sm">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        890
                    </div>
                </div>
            </div>
        </a>
    </div>
</x-layouts.dashboard>
