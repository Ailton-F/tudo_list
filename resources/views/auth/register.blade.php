<x-layout>
    <x-slot name="content">

        <main class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-800 flex items-center justify-center p-4">
            <div class="w-full max-w-md">
                <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-8 transform hover:scale-[1.01] transition-all duration-300">
                    
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-black to-gray-700 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-user-plus text-white text-2xl"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Criar Conta</h2>
                        <p class="text-gray-600">Junte-se a nós hoje mesmo</p>
                    </div>
        
                    <form class="space-y-5" action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="fullname" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nome Completo
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="fullname" 
                                    class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                                    placeholder="Seu nome completo"
                                    required
                                >
                            </div>
                        </div>
        
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
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
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    type="password" 
                                    id="password" 
                                    class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                                    placeholder="Mínimo 8 caracteres"
                                    required
                                >
                            </div>
                        </div>
        
                        <div>
                            <label for="confirm-password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirmar Senha
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    type="password" 
                                    id="confirm-password" 
                                    class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                                    placeholder="Confirme sua senha"
                                    required
                                >
                            </div>
                        </div>
        
                        <div class="space-y-2">
                            <div class="flex space-x-1">
                                <div class="h-1 w-1/4 bg-gray-200 rounded-full"></div>
                                <div class="h-1 w-1/4 bg-gray-200 rounded-full"></div>
                                <div class="h-1 w-1/4 bg-gray-200 rounded-full"></div>
                                <div class="h-1 w-1/4 bg-gray-200 rounded-full"></div>
                            </div>
                            <p class="text-xs text-gray-500">Use pelo menos 8 caracteres com letras, números e símbolos</p>
                        </div>
        
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-black to-gray-800 text-white py-3 px-4 rounded-xl font-semibold text-sm uppercase tracking-wider hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black"
                        >
                            <i class="fas fa-user-plus mr-2"></i>
                            Criar Conta
                        </button>
                    </form>
                    <div class="text-center mt-6">
                        <span class="text-gray-600">Já tem uma conta? </span>
                        <a href="{{ route('auth.login') }}" class="font-semibold text-black hover:underline transition-all duration-200">
                            Faça login
                        </a>
                    </div>
                </div>
            </div>
        </main>

    </x-slot>
</x-layout>