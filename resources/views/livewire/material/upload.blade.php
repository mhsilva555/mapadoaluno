<div class="max-w-4xl mx-auto">
    <!-- Header/Incentive -->
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Compartilhe seu conhecimento</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Envie materiais de estudo e ajude milhares de estudantes. 
            <span class="text-indigo-600 font-bold">Ganhe pontos e destaque na comunidade!</span>
        </p>
    </div>

    <!-- Stepper -->
    <div class="mb-12">
        <div class="flex items-center justify-between relative">
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-1 bg-gray-200 -z-10"></div>
            
            <!-- Step 1: Upload -->
            <div class="flex flex-col items-center bg-gray-50 px-4">
                <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mb-2 ring-4 ring-white">1</div>
                <span class="text-sm font-bold text-blue-600">Upload</span>
            </div>

            <!-- Step 2: Detalhes -->
            <div class="flex flex-col items-center bg-gray-50 px-4">
                <div class="w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold mb-2 ring-4 ring-white">2</div>
                <span class="text-sm font-medium text-gray-500">Detalhes</span>
            </div>

            <!-- Step 3: Feito -->
            <div class="flex flex-col items-center bg-gray-50 px-4">
                <div class="w-10 h-10 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold mb-2 ring-4 ring-white">3</div>
                <span class="text-sm font-medium text-gray-500">Conclusão</span>
            </div>
        </div>
    </div>

    <!-- Upload Area -->
    <div class="bg-white rounded-3xl border-2 border-dashed border-blue-200 p-12 text-center hover:border-blue-400 transition-colors cursor-pointer group relative overflow-hidden">
        <input type="file" multiple wire:model="files" accept=".pdf,.docx,.pptx,.jpg,.jpeg" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
        
        <div class="bg-blue-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
        </div>
        
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Arrastar e soltar arquivos</h3>
        <p class="text-gray-500 mb-8">ou clique para selecionar do seu computador</p>
        
        <button class="px-8 py-3 bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-600/20 pointer-events-none">
            Procurar arquivos
        </button>
        
        <p class="mt-6 text-xs text-gray-400 uppercase tracking-wide">Suporta: PDF, DOCX, PPTX, JPG (Máx. 10MB)</p>
        
        @error('files.*') <span class="text-red-500 text-sm block mt-2">{{ $message }}</span> @enderror
    </div>

    <!-- File List -->
    @if($files)
    <div class="mt-8 space-y-3">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Arquivos Selecionados ({{ count($files) }})</h3>
        @foreach($files as $file)
        <div class="bg-white rounded-xl border border-gray-200 p-4 flex items-center justify-between shadow-sm">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <div>
                    <p class="font-medium text-gray-900">{{ $file->getClientOriginalName() }}</p>
                    <p class="text-xs text-gray-500">{{ number_format($file->getSize() / 1024, 2) }} KB</p>
                </div>
            </div>
            <button wire:click="removeFile({{ $loop->index }})" class="text-gray-400 hover:text-red-500 transition p-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </button>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Info Box -->
    <div class="mt-8 bg-indigo-50 rounded-2xl p-6 flex items-start gap-4">
        <div class="bg-indigo-100 p-2 rounded-lg text-indigo-600 shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <div>
            <h4 class="font-bold text-indigo-900 mb-1">Dica Importante</h4>
            <p class="text-sm text-indigo-700 leading-relaxed">
                Certifique-se de que o material é de sua autoria ou que você tem permissão para compartilhá-lo. Materiais com boa qualidade e descrição detalhada recebem mais visualizações e pontos!
            </p>
        </div>
    </div>
</div>
