<x-layout>
    <x-slot name="content">
    <body class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-800 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-8 transform hover:scale-[1.02] transition-all duration-300">
            
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-black to-gray-700 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Bem-vindo</h2>
                <p class="text-gray-600">Faça login em sua conta</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="seu@email.com"
                            required
                        >
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Senha
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="••••••••"
                            required
                        >
                    </div>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-black to-gray-800 text-white py-3 px-4 rounded-xl font-semibold text-sm uppercase tracking-wider hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black"
                >
                    Entrar
                </button>
            </form>

            <div class="text-center mt-6">
                <span class="text-gray-600">Não tem uma conta? </span>
                <a href="{{ route('auth.register') }}" class="font-semibold text-black hover:underline transition-all duration-200">
                    Cadastre-se
                </a>
            </div>
        </div>
    </div>

    <div class="fixed top-10 left-10 w-20 h-20 bg-white/5 rounded-full blur-xl"></div>
    <div class="fixed top-40 right-20 w-32 h-32 bg-white/3 rounded-full blur-2xl"></div>
    <div class="fixed bottom-20 left-1/4 w-24 h-24 bg-white/4 rounded-full blur-xl"></div>
    </x-slot>
</x-layout>