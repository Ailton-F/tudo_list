<x-layout>
    <x-slot name="content">

        <header class="bg-white/95 backdrop-blur-sm border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">

                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-black to-gray-700 rounded-xl flex items-center justify-center"></div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-900">Tudo List</h1>
                            <p class="text-sm text-gray-600">Gerencie suas tarefas</p>
                        </div>
                    </div>

                    <div>
                        <button
                            onclick="openAddTaskModal()"
                            class="bg-gradient-to-r from-black to-gray-800 text-white px-6 py-2 rounded-xl font-semibold text-sm hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Nova Tarefa
                        </button>
    
                        <button
                            onclick="openAddTaskModal()"
                            class="bg-gradient-to-r from-red-700 to-black text-white px-6 py-2 rounded-xl font-semibold text-sm transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Sair
                        </button>
                    </div>
                </div>
            </div>
        </header>
        
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Pendentes</p>
                            <p class="text-2xl font-bold text-yellow-600" id="pending-count">3</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-clock text-yellow-600 text-xl"></i>
                        </div>
                    </div>
                </div>
        
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Em Progresso</p>
                            <p class="text-2xl font-bold text-blue-600" id="progress-count">2</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-spinner text-blue-600 text-xl"></i>
                        </div>
                    </div>
                </div>
        
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Concluídas</p>
                            <p class="text-2xl font-bold text-green-600" id="completed-count">5</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Filtros</h3>
                <div class="flex flex-wrap gap-4">
                    <button onclick="filterTasks('all')" class="filter-btn bg-black text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors duration-200">
                        Todas
                    </button>
                    <button onclick="filterTasks('pending')" class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-100 hover:text-yellow-700 transition-colors duration-200">
                        Pendentes
                    </button>
                    <button onclick="filterTasks('in_progress')" class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-100 hover:text-blue-700 transition-colors duration-200">
                        Em Progresso
                    </button>
                    <button onclick="filterTasks('completed')" class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-100 hover:text-green-700 transition-colors duration-200">
                        Concluídas
                    </button>
                </div>
            </div>
        
            <div class="space-y-4" id="tasks-container">
                <div class="task-card bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-200" data-status="pending">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Implementar sistema de autenticação</h4>
                            <p class="text-gray-600 text-sm mb-3">Criar telas de login, registro e recuperação de senha com validação completa</p>
        
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-clock mr-1"></i>
                                    Pendente
                                </span>
                                <span class="text-gray-500">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    15/12/2024
                                </span>
                            </div>
                        </div>
        
                        <div class="flex space-x-2">
                            <button onclick="editTask(1)" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="deleteTask(1)" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
        
                    <div class="flex justify-between items-center">
                        <div class="text-xs text-gray-500">
                            Criado em 10/12/2024 às 14:30
                        </div>
                        <select onchange="updateTaskStatus(1, this.value)" class="text-sm border border-gray-200 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent">
                            <option value="pending" selected>Pendente</option>
                            <option value="in_progress">Em Progresso</option>
                            <option value="completed">Concluída</option>
                        </select>
                    </div>
                </div>
        
                <div class="task-card bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-200" data-status="in_progress">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Design do dashboard</h4>
                            <p class="text-gray-600 text-sm mb-3">Criar interface moderna e responsiva para o painel administrativo</p>
        
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    <i class="fas fa-spinner mr-1"></i>
                                    Em Progresso
                                </span>
                                <span class="text-gray-500">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    20/12/2024
                                </span>
                            </div>
                        </div>
        
                        <div class="flex space-x-2">
                            <button onclick="editTask(2)" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="deleteTask(2)" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
        
                    <div class="flex justify-between items-center">
                        <div class="text-xs text-gray-500">
                            Criado em 12/12/2024 às 09:15
                        </div>
                        <select onchange="updateTaskStatus(2, this.value)" class="text-sm border border-gray-200 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent">
                            <option value="pending">Pendente</option>
                            <option value="in_progress" selected>Em Progresso</option>
                            <option value="completed">Concluída</option>
                        </select>
                    </div>
                </div>
        
                <div class="task-card bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-200" data-status="completed">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">Configurar banco de dados</h4>
                            <p class="text-gray-600 text-sm mb-3">Estruturar tabelas e relacionamentos do sistema</p>
        
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Concluída
                                </span>
                                <span class="text-gray-500">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    10/12/2024
                                </span>
                            </div>
                        </div>
        
                        <div class="flex space-x-2">
                            <button onclick="editTask(3)" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button onclick="deleteTask(3)" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
        
                    <div class="flex justify-between items-center">
                        <div class="text-xs text-gray-500">
                            Criado em 08/12/2024 às 16:45
                        </div>
                        <select onchange="updateTaskStatus(3, this.value)" class="text-sm border border-gray-200 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent">
                            <option value="pending">Pendente</option>
                            <option value="in_progress">Em Progresso</option>
                            <option value="completed" selected>Concluída</option>
                        </select>
                    </div>
                </div>
            </div>
        </main>
        
        <div id="taskModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md transform transition-all duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-gray-900" id="modal-title">Nova Tarefa</h3>
                        <button onclick="closeModal()" class="p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
        
                    <form class="space-y-4">
                        <div>
                            <label for="task-title" class="block text-sm font-semibold text-gray-700 mb-2">Título</label>
                            <input
                                type="text"
                                id="task-title"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white"
                                placeholder="Título da tarefa"
                                required>
                        </div>
        
                        <div>
                            <label for="task-description" class="block text-sm font-semibold text-gray-700 mb-2">Descrição</label>
                            <textarea
                                id="task-description"
                                rows="3"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white resize-none"
                                placeholder="Descrição detalhada da tarefa (opcional)"></textarea>
                        </div>
        
                        <div>
                            <label for="task-status" class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                            <select
                                id="task-status"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white">
                                <option value="pending">Pendente</option>
                                <option value="in_progress">Em Progresso</option>
                                <option value="completed">Concluída</option>
                            </select>
                        </div>
        
                        <div>
                            <label for="task-deadline" class="block text-sm font-semibold text-gray-700 mb-2">Prazo</label>
                            <input
                                type="datetime-local"
                                id="task-deadline"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white">
                        </div>
        
                        <div class="flex space-x-3 pt-4">
                            <button
                                type="button"
                                onclick="closeModal()"
                                class="flex-1 bg-gray-200 text-gray-700 py-3 px-4 rounded-xl font-semibold hover:bg-gray-300 transition-colors duration-200">
                                Cancelar
                            </button>
                            <button
                                type="submit"
                                onclick="saveTask(event)"
                                class="flex-1 bg-gradient-to-r from-black to-gray-800 text-white py-3 px-4 rounded-xl font-semibold hover:from-gray-800 hover:to-black transition-all duration-200">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>