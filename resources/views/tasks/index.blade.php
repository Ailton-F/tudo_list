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

                    <div class="flex gap-4">
                        <button
                            data-modal-target="create-task-modal" 
                            data-modal-toggle="create-task-modal"
                            class="bg-gradient-to-r from-black to-gray-800 text-white px-6 py-2 rounded-xl font-semibold text-sm hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Nova Tarefa
                        </button>
    
                        <button
                            class="bg-gradient-to-r from-red-700 to-black text-white px-6 py-2 rounded-xl font-semibold text-sm transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                            Sair
                        </button>
                    </div>
                </div>
            </div>
        </header>
        
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @include('components.toast')
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Pendentes</p>
                            <p class="text-2xl font-bold text-yellow-600" id="pending-count">{{ $tasks->where('status', 'pending')->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                        </div>
                    </div>
                </div>
        
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Em Progresso</p>
                            <p class="text-2xl font-bold text-blue-600" id="progress-count">{{ $tasks->where('status', 'in_progress')->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        </div>
                    </div>
                </div>
        
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Concluídas</p>
                            <p class="text-2xl font-bold text-green-600" id="completed-count">{{ $tasks->where('status', 'completed')->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
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
                @foreach ($tasks as $task)
                    <div class="task-card bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-200" data-status="{{ $task->status }}">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $task->title }}</h4>
                                <p class="text-gray-600 text-sm mb-3">{{ $task->description }}</p>

                                <div class="flex items-center space-x-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ $task->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : ($task->status === 'in_progress' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800') }}">
                                        {{ $task->status === 'pending' ? 'Pendente' : ($task->status === 'in_progress' ? 'Em Progresso' : 'Concluída') }}
                                    </span>
                                    <span class="text-gray-500">
                                        {{ $task->dead_line ? $task->dead_line->format('d/m/Y') : 'Sem prazo' }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex space
                                <button onclick="editTask({{ $task->id }})" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
                                </button>
                                <button onclick="deleteTask({{ $task->id }})" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200">
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-xs text-gray-500">
                                Criado em {{ $task->created_at->format('d/m/Y \à\s H:i') }}
                            </div>
                            <div class="flex items-center space-x-4">
                                <select onchange="updateTaskStatus({{ $task->id }}, this.value)" class="text-sm border border-gray-200 rounded-lg px-3 py-1 focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent">
                                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pendente</option>
                                    <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>Em Progresso</option>
                                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Concluída</option>
                                </select>

                                <button class="text-blue-600 bg-blue-50 rounded-lg py-1 px-2"  data-modal-target="default-modal-{{$task->id}}" data-modal-toggle="default-modal-{{$task->id}}">Editar</button>
                                <button class="text-red-600 bg-red-50 rounded-lg py-1 px-2" data-modal-target="delete-modal-{{$task->id}}" data-modal-toggle="delete-modal-{{$task->id}}">Excluir</button>
                            </div>
                    
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
        
        <div id="taskModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md transform transition-all duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-gray-900" id="modal-title">Nova Tarefa</h3>
                        <button onclick="closeModal()" class="p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors duration-200">
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

@foreach ($tasks as $task)
    <x-editTaskModal :task="$task"/>
    <x-deleteTaskModal :task="$task"/>
@endforeach

@include('components.createTaskModal')