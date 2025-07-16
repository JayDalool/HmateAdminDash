<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'db_host' => 'required|string',
            'db_port' => 'required|string',
            'db_name' => 'required|string',
            'db_username' => 'required|string',
            'db_password' => 'required|string',
            'subscription_start_date' => 'required|date',
            'subscription_end_date' => 'nullable|date',
            'renewal_date' => 'nullable|date',
            'price_per_month' => 'required|numeric',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'db_host' => 'required|string',
            'db_port' => 'required|string',
            'db_name' => 'required|string',
            'db_username' => 'required|string',
            'db_password' => 'required|string',
            'subscription_start_date' => 'required|date',
            'subscription_end_date' => 'nullable|date',
            'renewal_date' => 'nullable|date',
            'price_per_month' => 'required|numeric',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted.');
    }
}
