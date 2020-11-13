<?php


namespace App\Http\Controllers;




use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function listClients(Request $request) {
        $clients = Client::all();

        $message = $request->session()->get("message");

        return view("clients.listClients",
            ['clients' => $clients, 'message' => $message]
        );
    }

    public function addClient() {
        return view("clients.createClient");
    }

    public function store( Request $request)
    {
        $client = Client::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'dateOfBirth' => $request->get('dateOfBirth'),
            'cep' => $request->get('cep'),
            'address' => $request->get('address'),
            'neighborhood' => $request->get('neighborhood'),
            'referencePoint' => $request->get('referencePoint'),
            'mail' => $request->get('mail')
        ]);

        $request->session()->flash("message", "Cliente com id {$client->id} criada: {$client-> nome}");

        return redirect('/clients');
    }

    public function getClientToUpdate(Request $request) {
        $client = Client::find( $request->id );

        return view('clients.updateClient', ['client' => $client]);
    }

    public function update(Request $request) {
        $client = Client::find( $request->id );

        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->dateOfBirth = $request->dateOfBirth;
        $client->cep = $request->cep;
        $client->address = $request->address;
        $client->neighborhood = $request->neighborhood;
        $client->referencePoint = $request->referencePoint;
        $client->mail = $request->mail;
        $client->update();

        return redirect('/clients');
    }

    public function destroy(Request $request)
    {
        Client::destroy($request->id);

        $request->session()->flash("message", "Cliente removido com sucesso");

        return redirect("/clients");
    }
}
