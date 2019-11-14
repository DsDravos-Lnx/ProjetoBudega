<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller {

	#private $stock;

	public function __construct(Stock $stock) {
		$this->stock = $stock;
	}

	public function index() {
		return response()->json($this->stock->paginate(10));
	}

	public function show(Stock $id) {
		$data = ['data' => $id];
		return response()->json($data);
	}

	public function store(Request $request) {
		try {
			$stockData = $request->all();
			$this->stock->create($stockData);
			$return = ['data' => ['msg' => 'Stock successful registed']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1001));
			}
			return response()->json(ApiError::errorMessage('Error register stock', 1001));
		}
	}

	public function update(Request $request, $id) {
		try {
			$stockData = $request->all();
			$stock = $this->stock->find($id);
			$stock->update($stockData);
			$return = ['data' => ['msg' => 'Successfully updated stock']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
			}
			return response()->json(ApiError::errorMessage('Error updating stock', 1002));

		}
	}

	public function delete(Stock $id) {
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Stock cod:' . $id->id . 'successfully deleted']]);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::erorMessage($e->getMessage(), 1003));
			}
			return response()->json(ApiError::errorMessage('Erros deleting stock', 1003));
		}
	}

	public function showFromEachSupplier(int $id) {
		return response()->json($this->stock->fromEachSupplier($id));
	}

	public function showProductsInStock() {
		return response()->json($this->stock->productsInStock());
	}

	public function showProductsWithoutStock() {
		return response()->json($this->stock->productsWithoutStock());
	}

}
