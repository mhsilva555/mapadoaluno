<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mapa do Aluno - Aprenda em conjunto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="antialiased bg-gray-50 text-gray-900">
    <main>
        <!-- Navbar -->
        <nav class="absolute top-0 w-full z-50 py-4 px-6 flex justify-between items-center text-white glass-nav">
            <div class="flex items-center space-x-8">
                <a href="/" class="text-2xl font-bold flex items-center gap-2 tracking-tight">
                    <div class="bg-white text-indigo-600 p-1.5 rounded-lg">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/></svg>
                    </div>
                    <span>Mapa do Aluno</span>
                </a>
                <div class="hidden md:flex space-x-8 text-sm font-medium text-gray-100">
                    <a href="#" class="hover:text-white transition">Universidade</a>
                    <a href="#" class="hover:text-white transition">Ensino Médio</a>
                    <a href="#" class="hover:text-white transition">Materiais</a>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="bg-white text-indigo-600 px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-gray-100 transition shadow-lg shadow-indigo-900/20">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-white font-medium hover:text-gray-200 transition px-4">Login</a>
                    <a href="{{ route('register') }}" class="bg-white text-indigo-600 px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-gray-100 transition shadow-lg shadow-indigo-900/20">Criar conta</a>
                @endauth
            </div>
        </nav>

        {{ $slot }}

        <!-- Footer -->
        <footer class="bg-gray-950 text-gray-400 py-16 border-t border-gray-900">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                    <div class="col-span-1 md:col-span-1">
                        <a href="/" class="text-2xl font-bold text-white flex items-center gap-2 mb-6">
                            <div class="bg-indigo-600 text-white p-1 rounded-lg">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/></svg>
                            </div>
                            <span>Mapa do Aluno</span>
                        </a>
                        <p class="text-sm leading-relaxed">
                            A plataforma líder para compartilhamento de materiais acadêmicos. Feito por estudantes, para estudantes.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-4">Empresa</h3>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-indigo-400 transition">Sobre Nós</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Carreiras</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Blog</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Imprensa</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-4">Comunidade</h3>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-indigo-400 transition">Diretrizes</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Honra Acadêmica</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Central de Ajuda</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white font-bold mb-4">Legal</h3>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-indigo-400 transition">Termos de Uso</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Privacidade</a></li>
                            <li><a href="#" class="hover:text-indigo-400 transition">Cookies</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-gray-900 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-sm">
                        &copy; 2025 Mapa do Aluno. Todos os direitos reservados.
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white transition"><span class="sr-only">Facebook</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><span class="sr-only">Twitter</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><span class="sr-only">Instagram</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>