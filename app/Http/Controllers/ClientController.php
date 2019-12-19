<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }
 
    // public function show(Client $client)
    // {
    //     return $client;
    // }
 
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required',
            'email' => 'required|unique:clients',
            'company' => 'required',
            'phone' => 'required',
            'country' => 'required',
        ]);

        $client = Client::create($validatedData);
 
        return response()->json($client, 201);
    }
 
    // public function update(Request $request, client $client)
    // {
    //     $client->update($request->all());
 
    //     return response()->json($client, 200);
    // }
 
    // public function delete(client $client)
    // {
    //     $client->delete();
 
    //     return response()->json(null, 204);
    // }
}
