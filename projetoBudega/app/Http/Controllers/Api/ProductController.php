<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	private $product;

	public function __construct(Product $product) {
		$this->product = $product;
	}

	public function index() {
		return response()->json($this->product->paginate(10));
	}

	public function show(Admin $id) {
		$data = ['data' => $id];
		return response()->json($data);
	}

	public function store(Request $request) {
		try {
			$adminData = $request->all();
			$this->product->create($productData);
			$return = ['data' => ['msg' => 'Product successful registed']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1001));
			}
			return response()->json(ApiError::errorMessage('Error registering product', 1001));
		}
	}

	public function update(Request $request, $id) {
		try {
			$productData = $request->all();
			$product = $this->product->find($id);
			$product->update($productData);
			$return = ['data' => ['msg' => 'Successfully updated product']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
			}
			return response()->json(ApiError::errorMessage('Error updating product', 1002));

		}
	}

	public function delete(Product $id) {
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Product name:' . $id->name . 'successfully deleted']]);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::erorMessage($e->getMessage(), 1003));
			}
			return response()->json(ApiError::errorMessage('Erros deleting product', 1003));
		}
	}

	public function toListProductsAvailables() {
		return response()->json($this->product->productsAvailables());
	}

}