<section class="py-20 bg-white" x-data="{ 
    level: 'university', 
    hsTab: 'escolas' 
}">
    <div class="container mx-auto px-6 text-center">
        
        <!-- Main Toggle -->
        <div class="inline-block p-2 rounded-full bg-gray-100 mb-8">
            <button 
                @click="level = 'university'" 
                :class="{ 'bg-white text-indigo-600 shadow-sm': level === 'university', 'text-gray-500 hover:text-gray-900': level !== 'university' }"
                class="px-6 py-2 rounded-full font-bold transition-all duration-200">
                Universidade
            </button>
            <button 
                @click="level = 'highschool'" 
                :class="{ 'bg-white text-indigo-600 shadow-sm': level === 'highschool', 'text-gray-500 hover:text-gray-900': level !== 'highschool' }"
                class="px-6 py-2 rounded-full font-medium transition-all duration-200">
                Ensino Médio
            </button>
        </div>

        <!-- University Content -->
        <div x-show="level === 'university'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Explore por Instituição</h2>
            <p class="text-gray-500 mb-12 max-w-2xl mx-auto text-lg">Navegue pelos materiais das principais universidades e encontre exatamente o que você precisa para passar naquela matéria difícil.</p>

            <div class="flex flex-wrap justify-center gap-4 max-w-5xl mx-auto">
                @foreach(['USP', 'Unicamp', 'UFRJ', 'UNESP', 'UFMG', 'UFRGS', 'UFSC', 'UFPR', 'UnB', 'UFPE', 'UFC', 'UFBA', 'PUC-SP', 'PUC-RS', 'Mackenzie'] as $uni)
                    <a href="#" class="group bg-white border border-gray-200 text-gray-600 px-6 py-3 rounded-full text-sm font-semibold hover:border-indigo-500 hover:text-indigo-600 hover:shadow-md transition duration-200 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-gray-300 group-hover:bg-indigo-500 transition"></span>
                        {{ $uni }}
                    </a>
                @endforeach
            </div>

            <div class="mt-16">
                <a href="#" class="inline-flex items-center text-indigo-600 font-bold hover:text-indigo-800 transition">
                    Ver todas as universidades
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>

        <!-- High School Content -->
        <div x-show="level === 'highschool'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" style="display: none;">
            
            <!-- Sub Tabs -->
            <div class="flex justify-center space-x-8 mb-12 border-b border-gray-100 pb-4 max-w-md mx-auto">
                <button @click="hsTab = 'ensino_medio'" :class="{ 'text-blue-500 border-b-2 border-blue-500': hsTab === 'ensino_medio', 'text-gray-500 hover:text-gray-700': hsTab !== 'ensino_medio' }" class="pb-2 font-medium transition">Ensino Médio</button>
                <button @click="hsTab = 'escolas'" :class="{ 'text-blue-500 border-b-2 border-blue-500': hsTab === 'escolas', 'text-gray-500 hover:text-gray-700': hsTab !== 'escolas' }" class="pb-2 font-medium transition">Escolas</button>
                <button @click="hsTab = 'documentos'" :class="{ 'text-blue-500 border-b-2 border-blue-500': hsTab === 'documentos', 'text-gray-500 hover:text-gray-700': hsTab !== 'documentos' }" class="pb-2 font-medium transition">Documentos</button>
            </div>

            <!-- Escolas Content -->
            <div x-show="hsTab === 'escolas'">
                <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto">
                    @foreach(['Colegio Anhanguera', 'Colegio Tecnico Da Ufmg', 'Cruzeiro Do Sul Escola', 'ETEC Adolpho Berezin', 'Ensino Médio – Brasil', 'Escola De Aplicacao Da Unipac', 'Escola De Aplicação Da Faculdade De Educação Usp'] as $school)
                        <a href="#" class="bg-white border border-gray-200 text-gray-600 px-6 py-3 rounded-full text-sm font-semibold hover:border-blue-500 hover:text-blue-600 hover:shadow-md transition duration-200">
                            {{ $school }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Ensino Médio Content -->
            <div x-show="hsTab === 'ensino_medio'">
                <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto mb-12">
                    <a href="#" class="bg-white border border-gray-200 text-gray-600 px-10 py-4 rounded-full text-base font-semibold hover:border-blue-500 hover:text-blue-600 hover:shadow-md transition duration-200">
                        Ensino Médio
                    </a>
                </div>
            </div>

            <!-- Documentos Content -->
            <div x-show="hsTab === 'documentos'" class="text-gray-500 mb-12">
                <p>Nenhum documento encontrado.</p>
            </div>

            <div class="mt-8 max-w-4xl mx-auto">
                <a href="#" class="block w-full text-blue-500 font-bold hover:text-blue-700 transition border border-gray-200 py-4 rounded-full hover:bg-blue-50 text-center">
                    Ver tudo
                </a>
            </div>
        </div>
    </div>
</section>