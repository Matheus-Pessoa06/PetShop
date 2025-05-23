<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ClientService;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    protected $clientService;
    public function __construct(ClientService $client){
        $this->clientService = $client;
    }

    public function store(ClientRequest $request){

        $client = $this->clientService->createdUser($request->all());

        return response()->json($client->load('adress', 'pet'), 201);
    }

    public function show(){
        
        $client = $this->clientService->getAllClients();

        return response()->json($client->load('pet'));
    }

    public function edit(ClientRequest $request){

        
        $client = $this->clientService->updatedClient($request->id, $request->all());

        return response()->json($client->load('adress'), 201);

    }

    public function getClient(ClientRequest $request){
        
        $client = $this->clientService->getOne($request->id);

        return response()->json($client);
    }
}
