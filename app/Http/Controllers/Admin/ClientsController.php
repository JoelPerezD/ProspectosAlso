<?php
// los controladores sirven para manejar lo que se hace en la base de datos,
// tienen los metodos para almacenar, mostrar, editar
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClientRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Client;

class ClientsController extends Controller
{
    public function index()
    {
        // metodo para mostrar toda la base de datos
        // pide el permiso, muestra todos los clientes
        abort_unless(\Gate::allows('client_access'), 403);

        $clients = Client::all();

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('client_create'), 403);

        return view('admin.clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        abort_unless(\Gate::allows('client_create'), 403);

        $client = Client::create($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function edit(Client $client)
    {
        abort_unless(\Gate::allows('client_edit'), 403);

        return view('admin.clients.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        abort_unless(\Gate::allows('client_edit'), 403);

        $client->update($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function show(Client $client)
    {
        abort_unless(\Gate::allows('client_show'), 403);

        return view('admin.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        abort_unless(\Gate::allows('client_delete'), 403);

        $client->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientRequest $request)
    {
        Client::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
