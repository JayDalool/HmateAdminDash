
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Client') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">Add New Client</h1>

        <form action="{{ route('clients.store') }}" method="POST" class="space-y-6">
            @csrf
            @include('clients.form')
            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded shadow hover:bg-blue-700">Save</button>
        </form>
    </div>
</x-app-layout>
