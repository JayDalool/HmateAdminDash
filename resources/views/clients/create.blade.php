
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Client') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-white p-6 space-y-4">
            <h2 class="text-xl font-bold">Admin Panel</h2>
            <nav class="space-y-2">
                <a href="{{ route('clients.index') }}" class="block hover:underline">Clients</a>
                <a href="#" class="block hover:underline">Transactions</a>
                <a href="#" class="block hover:underline">Settings</a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-6">Add New Client</h1>

            <form action="{{ route('clients.store') }}" method="POST" class="space-y-6">
                @csrf
                @include('clients.form')
                <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded shadow hover:bg-blue-700">Save</button>
            </form>
        </main>
    </div>
</x-app-layout>
