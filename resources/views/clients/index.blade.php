@extends('layouts.app')

@section('content')
<div class="flex">
    {{-- Sidebar --}}
    <div class="w-1/5 bg-gray-800 text-white h-screen p-4">
        <h2 class="text-lg font-bold mb-4">Admin Panel</h2>
        <ul>
            <li><a href="{{ route('clients.index') }}" class="block py-2">Clients</a></li>
            <li><a href="#" class="block py-2">Transactions</a></li>
            <li><a href="#" class="block py-2">Settings</a></li>
        </ul>
    </div>

    {{-- Main Content --}}
    <div class="w-4/5 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold">Clients</h1>
            <a href="{{ route('clients.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">+ Add Client</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($clients as $client)
            <div class="bg-white rounded shadow p-4">
                <h2 class="text-lg font-semibold">{{ $client->name }}</h2>
                <p>Status: <span class="font-medium">{{ ucfirst($client->status) }}</span></p>
                <p>Start: {{ $client->subscription_start_date }}</p>
                <p>Renew: {{ $client->renewal_date }}</p>
                <p>Paid: ${{ $client->amount_paid }}</p>
                <div class="mt-4 flex justify-between">
                    <a href="{{ route('clients.edit', $client) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
