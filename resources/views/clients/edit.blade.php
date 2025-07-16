
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-xl font-semibold mb-4">Edit Client</h1>

    <form action="{{ route('clients.update', $client) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        @include('clients.form')
        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded">Update</button>
    </form>
</div>
@endsection
