<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <form class="relative bg-white rounded-lg shadow-sm dark:bg-white-700" action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-black">
                    Cadastrar Tarefa
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            
            <div class="p-4 md:p-5 space-y-6">
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Título
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <input 
                            type="text" 
                            id="title"
                            name="title" 
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="Título da tarefa"
                            required
                        >
                    </div>
                </div>

                <div class="mt-4">
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                        Descrição
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <textarea 
                            id="description" 
                            name="description"
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                            placeholder="Descrição da tarefa"
                            rows="4"
                            required
                        ></textarea>
                </div>

                <div class="mt-4">
                    <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                        Status
                    </label>

                    <select id="status" name="status" class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" required>
                        <option value="pending">Pendente</option>
                        <option value="in_progress">Em Progresso</option>
                        <option value="completed">Concluída</option>
                    </select>
                </div>

                <div class="mt-4">
                    <label for="dead_line" class="block text-sm font-semibold text-gray-700 mb-2">
                        Data de Vencimento
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        </div>
                        <input 
                            type="date" 
                            id="dead_line" 
                            name="dead_line"
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200 bg-gray-50 hover:bg-white" 
                            required
                        >
                </div>
            </div>

            <div class="flex items-center gap-4 py-4 rounded-b">
                <button data-modal-hide="default-modal" type="submit" class="bg-gradient-to-r from-black to-gray-800 text-white px-6 py-2 rounded-xl font-semibold text-sm hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">Salvar</button>

                <button data-modal-hide="default-modal" type="button" class="bg-gradient-to-r from-red-700 to-black text-white px-6 py-2 rounded-xl font-semibold text-sm transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">Cancelar</button>
            </div>
        </form>
    </div>
</div>