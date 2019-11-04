<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Purshase;
use Illuminate\Http\Request;

class PurshaseController extends Controller {
	private $purshase;

	public function __construct(Purshase $purshase) {
		$this->purshase = $purshase;
	}

	public function index() {
		return response()->json($this->purshase->paginate(10));
	}

	public function show(Purshase $id) {
		$data = ['data' => $id];
		return response()->json($data);
	}

	public function store(Request $request) {
		try {
			$purshaseData = $request->all();
			$this->purshase->create($purshaseData);
			$return = ['data' => ['msg' => 'Purshase successful registed']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1001));
			}
			return response()->json(ApiError::errorMessage('Error registering purshase', 1001));
		}
	}

	public function update(Request $request, $id) {
		try {
			$purshaseData = $request->all();
			$purshase = $this->purshase->find($id);
			$purshase->update($purshaseData);
			$return = ['data' => ['msg' => 'Successfully updated purshase']];
			return response()->json($return, 201);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
			}
			return response()->json(ApiError::errorMessage('Error updating purshase', 1002));

		}
	}

	public function delete(Purshase $id) {
		try {
			$id->delete();
			return response()->json(['data' => ['msg' => 'Purshase name:' . $id->name . 'successfully deleted']]);
		} catch (\Exception $e) {
			if (config('app.debug')) {
				return response()->json(ApiError::erorMessage($e->getMessage(), 1003));
			}
			return response()->json(ApiError::errorMessage('Erros deleting purshase', 1003));
		}
	}

}
