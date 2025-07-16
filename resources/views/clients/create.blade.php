<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Client') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-6">
        <form action="{{ route('clients.store') }}" method="POST" class="space-y-4">
            @csrf
            @include('clients.form')
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Save</button>
        </form>
    </div>
</x-app-layout>
