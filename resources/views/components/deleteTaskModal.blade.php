@props([
    'task'
])
<div id="delete-modal-{{$task->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" dialog="true">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <form class="relative bg-white rounded-lg shadow-sm dark:bg-white-700" action="{{ route('tasks.destroy', ['task'=>$task]) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="flex items-center justify-between p-5 rounded-t">
                <h3 class="text-xl font-semibold text-red-600">
                    Tem certeza que deseja excluir a tarefa?
                </h3>
            </div>
            <div class="p-6 space-y-3">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Esta ação não pode ser desfeita. A tarefa <span class="font-semibold text-gray-900 dark:text-black">{{ $task->title }}</span> será permanentemente excluída.
                </p>
            </div>

            <div class="flex items-center gap-4 py-4 px-5 rounded-b">
                <button data-modal-hide="delete-modal-{{$task->id}}" type="submit" class="bg-gradient-to-r from-black to-gray-800 text-white px-6 py-2 rounded-xl font-semibold text-sm hover:from-gray-800 hover:to-black transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">Sim</button>
                <button data-modal-hide="delete-modal-{{$task->id}}" type="button" class="bg-gradient-to-r from-red-700 to-black text-white px-6 py-2 rounded-xl font-semibold text-sm transform hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">Cancelar</button>
            </div>
        </form>
    </div>
</div>