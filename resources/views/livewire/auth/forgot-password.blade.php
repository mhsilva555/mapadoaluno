<div>
    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Redefinir Senha</h2>
        <p class="text-sm text-gray-600">Esqueceu sua senha? Sem problemas.</p>
    </div>

    <div class="mb-4 text-sm text-gray-600">
        Informe seu endereço de email e enviaremos um link para redefinição de senha.
    </div>

    @if ($status)
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $status }}
        </div>
    @endif

    <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
            <input wire:model="email" id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" required autofocus />
            @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                Voltar para o login
            </a>

            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Enviar Link
            </button>
        </div>
    </form>
</div>
