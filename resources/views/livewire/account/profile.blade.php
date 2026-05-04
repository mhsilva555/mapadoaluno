<div class="max-w-4xl mx-auto space-y-8">
    <div class="mb-8 text-center md:text-left">
        <h1 class="text-3xl font-bold text-gray-900">Minha Conta</h1>
        <p class="mt-2 text-gray-600">Gerencie suas informações de perfil e segurança.</p>
    </div>

    <!-- Informações de Perfil -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50">
            <h2 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                Informações do Perfil
            </h2>
            <p class="mt-1 text-sm text-gray-500">Atualize o nome e endereço de e-mail da sua conta.</p>
        </div>
        
        <form wire:submit.prevent="updateProfile" class="p-6 space-y-6">
            @if (session('profile_message'))
                <div class="p-4 bg-green-50 rounded-xl flex items-start gap-3 border border-green-100">
                    <svg class="w-5 h-5 text-green-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-sm font-medium text-green-800">{{ session('profile_message') }}</p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                    <input type="text" id="name" wire:model="name" class="block w-full rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm px-4 py-3" placeholder="Seu nome">
                    @error('name') <span class="text-red-500 text-xs font-medium">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <input type="email" id="email" wire:model="email" class="block w-full rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm px-4 py-3" placeholder="seu@email.com">
                    @error('email') <span class="text-red-500 text-xs font-medium">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex items-center justify-end pt-4 border-t border-gray-100">
                <button type="submit" class="inline-flex justify-center rounded-xl bg-indigo-600 px-6 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg wire:loading wire:target="updateProfile" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    Salvar Alterações
                </button>
            </div>
        </form>
    </div>

    <!-- Segurança -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50">
            <h2 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                Segurança
            </h2>
            <p class="mt-1 text-sm text-gray-500">Garanta que sua conta esteja usando uma senha longa e aleatória para se manter segura.</p>
        </div>

        <form wire:submit.prevent="updatePassword" class="p-6 space-y-6">
            @if (session('password_message'))
                <div class="p-4 bg-green-50 rounded-xl flex items-start gap-3 border border-green-100">
                    <svg class="w-5 h-5 text-green-600 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-sm font-medium text-green-800">{{ session('password_message') }}</p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2 md:col-span-2 max-w-md">
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Senha Atual</label>
                    <input type="password" id="current_password" wire:model="current_password" class="block w-full rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm px-4 py-3" placeholder="••••••••">
                    @error('current_password') <span class="text-red-500 text-xs font-medium">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-2">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">Nova Senha</label>
                    <input type="password" id="new_password" wire:model="new_password" class="block w-full rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm px-4 py-3" placeholder="••••••••">
                    @error('new_password') <span class="text-red-500 text-xs font-medium">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-2">
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Nova Senha</label>
                    <input type="password" id="new_password_confirmation" wire:model="new_password_confirmation" class="block w-full rounded-xl border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-colors shadow-sm sm:text-sm px-4 py-3" placeholder="••••••••">
                </div>
            </div>

            <div class="flex items-center justify-end pt-4 border-t border-gray-100">
                <button type="submit" class="inline-flex justify-center rounded-xl bg-gray-900 px-6 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg wire:loading wire:target="updatePassword" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    Atualizar Senha
                </button>
            </div>
        </form>
    </div>
</div>
