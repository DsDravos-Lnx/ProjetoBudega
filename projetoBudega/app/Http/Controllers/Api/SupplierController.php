<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller {
	private $supplier;

	public function __construct(Supplier $supplier) {
		$this->supplier = $supplier;
	}

	public function index() {
		return response()->json($this->supplier->paginate(10));
	}

	public function show(Supplier $id) {
		$data = ['data' => $id];
		return response()->json($data);
	}

	public function store(Request $request) {
		try {
			$supplierData = $request->all();
			$this->supplier->create($supplierData);
			$return = ['data' => ['msg' => 'Supplier successful registed']];
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
			$supplierData = $request->all();
			$supplier = $this->supplier->find($id);
			$supplier->update($supplierData);
			$return = ['data' => ['msg' => 'Successfully uodated supplier']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
			}
			return response()->json(ApiError::errorMessage('Error updating supplier', 1002));

		}
	}

	public function delete(Supplier $id) {
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Supplier name:' . $id->name . 'successfully deleted']]);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1003));
			}
			return response()->json(ApiError::errorMessage('Erros deleting Supplier', 1003));
		}
	}

	public function showSearchByNames(string $name) {
		return response()->json($this->supplier->searchByNames($name));
	}
}
