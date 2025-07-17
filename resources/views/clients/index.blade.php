<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
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
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Clients</h1>
                <a href="{{ route('clients.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded shadow">+ Add Client</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($clients as $client)
                <div class="bg-white rounded-lg shadow p-6 space-y-2">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $client->name }}</h2>
                    <p>Status: <span class="font-medium">{{ ucfirst($client->status) }}</span></p>
                    <p>Start: {{ $client->subscription_start_date }}</p>
                    <p>Renew: {{ $client->renewal_date }}</p>
                    <p>Paid: ${{ $client->amount_paid }}</p>
                    <div class="flex justify-between pt-4">
                        <a href="{{ route('clients.edit', $client) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
    </div>
</x-app-layout>
