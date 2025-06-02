<div id="toast-container" class="fixed bottom-4 right-4 z-50 space-y-2">
    
    @if(Session::has('error'))
    <div id="errorToast" class="toast flex items-center w-full max-w-sm p-4 text-white bg-red-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out translate-x-0 opacity-100" role="alert">
        <div class="flex items-center flex-1">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-circle text-lg"></i>
            </div>
            <div class="ml-3 text-sm font-medium">
                {{ Session::get('error') }}
            </div>
        </div>
        <button type="button" class="ml-4 text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 rounded-lg p-1" onclick="closeToast('errorToast')">
            <i class="fas fa-times"></i>
        </button>
    </div>
    @endif
    
    @if(Session::has('success'))
    <div id="successToast" class="toast flex items-center w-full max-w-sm p-4 text-white bg-green-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out translate-x-0 opacity-100" role="alert">
        <div class="flex items-center flex-1">
            <div class="flex-shrink-0">
                <i class="fas fa-check-circle text-lg"></i>
            </div>
            <div class="ml-3 text-sm font-medium">
                {{ Session::get('success') }}
            </div>
        </div>
        <button type="button" class="ml-4 text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 rounded-lg p-1" onclick="closeToast('successToast')">
            <i class="fas fa-times"></i>
        </button>
    </div>
    @endif
    
    @if(Session::has('warning'))
    <div id="warningToast" class="toast flex items-center w-full max-w-sm p-4 text-gray-800 bg-yellow-400 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out translate-x-0 opacity-100" role="alert">
        <div class="flex items-center flex-1">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-lg"></i>
            </div>
            <div class="ml-3 text-sm font-medium">
                {{ Session::get('warning') }}
            </div>
        </div>
        <button type="button" class="ml-4 text-gray-800 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-opacity-50 rounded-lg p-1" onclick="closeToast('warningToast')">
            <i class="fas fa-times"></i>
        </button>
    </div>
    @endif
    
    @if(Session::has('info'))
    <div id="infoToast" class="toast flex items-center w-full max-w-sm p-4 text-white bg-blue-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out translate-x-0 opacity-100" role="alert">
        <div class="flex items-center flex-1">
            <div class="flex-shrink-0">
                <i class="fas fa-info-circle text-lg"></i>
            </div>
            <div class="ml-3 text-sm font-medium">
                {{ Session::get('info') }}
            </div>
        </div>
        <button type="button" class="ml-4 text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 rounded-lg p-1" onclick="closeToast('infoToast')">
            <i class="fas fa-times"></i>
        </button>
    </div>
    @endif
    
    @if($errors->any())
    <div id="validationErrorToast" class="toast w-full max-w-md p-4 text-white bg-red-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out translate-x-0 opacity-100" role="alert">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-circle text-lg mt-0.5"></i>
            </div>
            <div class="ml-3 flex-1">
                <div class="text-sm font-medium mb-2">Erro de validação</div>
                <ul class="text-sm space-y-1 list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="ml-4 text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 rounded-lg p-1" onclick="closeToast('validationErrorToast')">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.toast');
    toasts.forEach(toast => {
        setTimeout(() => {
            closeToast(toast.id);
        }, 5000);
    });
});

function closeToast(toastId) {
    const toast = document.getElementById(toastId);
    if (toast) {
        toast.classList.add('translate-x-full', 'opacity-0');
        setTimeout(() => {
            toast.remove();
        }, 300);
    }
}
</script>