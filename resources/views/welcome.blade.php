{{-- resources/views/welcome.blade.php --}}
<x-app-layout>
    <div class="flex justify-center min-h-screen bg-gray-100 dark:bg-gray-900 items-center py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800 dark:text-white">Welcome to Laravel</h1>
                <p class="mt-4 text-gray-600 dark:text-gray-400">
                    Get started by exploring the docs or logging in to your dashboard.
                </p>
            </div>

            <div class="flex justify-center space-x-4">
                <a href="https://laravel.com/docs" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Documentation
                </a>
                <a href="{{ route('login') }}" class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded">
                    Log In
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
