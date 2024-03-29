<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Client;

class ClientsApiController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return $clients;
    }

    public function store(StoreClientRequest $request)
    {
        return Client::create($request->all());
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        return $client->update($request->all());
    }

    public function show(Client $client)
    {
        return $client;
    }

    public function destroy(Client $client)
    {
        return $client->delete();
    }
}
