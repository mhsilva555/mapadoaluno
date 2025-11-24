<div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">
        <!-- Left Side -->
        <div class="flex flex-col h-full">
            <div class="mb-16">
                <a href="/" class="flex items-center gap-2 group w-fit">
                    <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/></svg>
                    </div>
                    <span class="text-xl font-bold text-gray-900 tracking-tight">Mapa do Aluno</span>
                </a>
            </div>

            <div class="mb-5">
                <span class="text-gray-600 text-lg block mb-2">Junte-se a nós.</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-4">Crie sua conta<br>gratuitamente!</h1>
            </div>

            <!-- Promotional Box -->
            <div>
                <h3 class="text-2xl font-bold mb-2">Faça parte da comunidade</h3>
                <p>Compartilhe conhecimentos e acesse materiais exclusivos de estudantes de todo o Brasil.</p>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="bg-white rounded-2xl w-full max-w-md mx-auto lg:mx-0 lg:ml-auto">
            <form wire:submit="register" class="space-y-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nome completo</label>
                    <input wire:model="name" id="name" class="block w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition text-gray-900 placeholder-gray-400" type="text" name="name" required autofocus autocomplete="name" placeholder="Seu nome" />
                    @error('name') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                    <input wire:model="email" id="email" class="block w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition text-gray-900 placeholder-gray-400" type="email" name="email" required autocomplete="username" placeholder="seu@email.com" />
                    @error('email') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-2">Senha</label>
                    <input wire:model="password" id="password" class="block w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition text-gray-900 placeholder-gray-400" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                    @error('password') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-bold text-gray-700 mb-2">Confirmar Senha</label>
                    <input wire:model="password_confirmation" id="password_confirmation" class="block w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 transition text-gray-900 placeholder-gray-400" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
                </div>

                <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-lg shadow-sm text-base font-bold text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition duration-200">
                    Criar conta
                </button>
                
                <div class="flex flex-col space-y-3 pt-2">
                    <div class="text-sm">
                        <span class="font-bold text-gray-700">Já tem uma conta?</span> <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700" wire:navigate>Fazer login</a>
                    </div>
                </div>
            </form>

            <div class="mt-0 pt-6">
                <p class="text-sm text-gray-500 mb-4">Ou cadastre-se com:</p>
                <!-- Social Login -->
                <div class="grid grid-cols-3 gap-3">
                    <button class="flex items-center justify-center px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-gray-300 transition duration-200">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
                    </button>
                    <button class="flex items-center justify-center px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-gray-300 transition duration-200">
                        <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" class="w-5 h-5" alt="Facebook">
                    </button>
                    <button class="flex items-center justify-center px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-gray-300 transition duration-200">
                        <img src="https://www.svgrepo.com/show/511330/apple-173.svg" class="w-5 h-5" alt="Apple">
                    </button>
                </div>
            </div>

            <div class="mt-5 flex flex-wrap gap-2">
                <p class="text-sm text-gray-600">Precisa de ajuda?</p>
                <a href="#" class="flex items-center text-sm font-bold text-gray-900 hover:underline">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Fale conosco
                </a>
            </div>
        </div>
    </div>
</div>
