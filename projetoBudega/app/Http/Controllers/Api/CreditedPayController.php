<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\CreditedPay;
use App\Http\Controllers\Controller;
use App\Api\ApiError;

class CreditedPayController extends Controller
{
    private $creditedPay;

    public function __construct(CreditedPay $creditedPay){
        $this->creditedPay = $creditedPay;
    }

    public function index(){
        return response()->json($this->creditedPay->paginate(10));
    }

    public function show(CreditedPay $id){
        $data = ['data' => $id];
        return response()->json($data);
    }
    
    public function store(Request $request){
        try {
            $creditedPayData = $request->all();
            $this->creditedPay->create($creditedPayData);
            $return = ['data' => ['msg' => 'Credited Pay successful registed']];
            return response()->json($return, 201);
        } catch (\Exception $e) {
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1001));
            }
            return response()->json(ApiError::errorMessage('Error registering credited pay', 1001));
        }
    }

    public function update(Request $request, $id){
        try{
            $creditedPayData = $request->all();
            $creditedPay = $this->creditedPay->find($id);
            $creditedPay->update($creditedPayData);
            $return = ['data' => ['msg' => 'Successfully updated credited pay']];
            return response()->json($return, 201);
        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
            }
            return response()->json(ApiError::errorMessage('Error updating credited pay', 1002));

        }
    }

    public function delete(CreditedPay $id){
        try{
            $id->delete();
            return response()->json(['data' => ['msg' => 'Credited pay id:' . $id->id . 'successfully deleted']]);
        }catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1003));
            }
            return response()->json(ApiError::errorMessage('Erros deleting credited pay', 1003));
        }
    }
}
