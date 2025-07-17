
<!-- @extends('layouts.app') -->

<!-- @section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-xl font-semibold mb-4">Edit Client</h1>

    <form action="{{ route('clients.update', $client) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        @include('clients.form')
        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded">Update</button>
    </form>
</div>
@endsection -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Client') }}
        </h2>
    </x-slot>
    <div class="max-w-2xl mx-auto p-6">
        <form action="{{ route('clients.update', $client) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            @include('clients.form')
            <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
