<x-layout>
    <x-slot name="content">
        <main class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-800 flex items-center justify-center p-4">
            
            @include('components.toast')

            <div class="w-full max-w-md">
                <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl p-8 transform hover:scale-[1.01] transition-all duration-300">
                    
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-black to-gray-700 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
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
                                </div>
                                <input 
                                    type="text" 
                                    id="fullname" 
                                    name="name"
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
                                </div>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email"
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
                                    name="password"
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
                                </div>
                                <input 
                                    type="password" 
                                    id="confirm-password"
                                    name="password_confirmation"
                                    class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                                    placeholder="Confirme sua senha"
                                    required
                                >
                            </div>
                        </div>
        
                        <div class="space-y-2">
                            <p class="text-xs text-gray-500">Use pelo menos 8 caracteres</p>
                        </div>
        
                        <button 
                            type="submit"
                            disabled 
                            class="w-full bg-gradient-to-r from-black to-gray-800 text-white py-3 px-4 rounded-xl font-semibold text-sm uppercase tracking-wider hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black"
                        >
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
    <script>
        const checkPasswordMatch = () => {
            const password = document.querySelector('#password').value;
            const confirmPassword = document.querySelector('#confirm-password').value;
            const submitButton = document.querySelector('button[type="submit"]');
            
            if (password && confirmPassword && password === confirmPassword) {
                submitButton.disabled = false;
                submitButton.classList.remove('opacity-50','from-gray-400','to-gray-500', 'cursor-not-allowed');
            } else {
                submitButton.disabled = true;
                submitButton.classList.add('opacity-50','from-gray-400','to-gray-500', 'cursor-not-allowed');
            }
        };

        document.querySelector('#confirm-password').addEventListener('input', checkPasswordMatch);
        document.querySelector('#password').addEventListener('input', checkPasswordMatch);
    </script>
    </x-slot>
</x-layout>