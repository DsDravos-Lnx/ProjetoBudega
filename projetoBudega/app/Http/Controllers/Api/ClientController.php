<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller {
	private $client;

	public function __construct(Client $client) {
		$this->client = $client;
	}

	public function index() {
		return response()->json($this->client->paginate(10));
	}

	public function show(Client $id) {
		$data = ['data' => $id];
		return response()->json($data);
	}

	public function store(Request $request) {
		try {
			$clientData = $request->all();
			$this->client->create($clientData);
			$return = ['data' => ['msg' => 'Client successful registed']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1001));
			}
			return response()->json(ApiError::errorMessage('Error registering client', 1001));
		}
	}

	public function update(Request $request, $id) {
		try {
			$clientData = $request->all();
			$client = $this->client->find($id);
			$client->update($clientData);
			$return = ['data' => ['msg' => 'Successfully updated client']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
			}
			return response()->json(ApiError::errorMessage('Error updating client', 1002));

		}
	}

	public function delete(Client $id) {
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Client name:' . $id->name . 'successfully deleted']]);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1003));
			}
			return response()->json(ApiError::errorMessage('Erros deleting Client', 1003));
		}
	}

	public function showSearchByNames(string $name) {
		return response()->json($this->client->searchByNames($name));
	}

}
