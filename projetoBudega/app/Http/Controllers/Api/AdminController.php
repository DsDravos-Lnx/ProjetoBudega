<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Controllers\Controller;
use App\Api\ApiError;

class AdminController extends Controller
{
    private $admin;

    public function __construct(Admin $admin){
        $this->admin = $admin;
    }

    public function index(){
        return response()->json($this->admin->paginate(10));
    }

    public function show(Admin $id){
        $data = ['data' => $id];
        return response()->json($data);
    }
    
    public function store(Request $request){
        try {
            $adminData = $request->all();
            $this->admin->create($adminData);
            $return = ['data' => ['msg' => 'Admin successful registed']];
            return response()->json($return, 201);
        } catch (\Exception $e) {
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1001));
            }
            return response()->json(ApiError::errorMessage('Error registering client', 1001));
        }
    }

    public function update(Request $request, $id){
        try{
            $adminData = $request->all();
            $admin = $this->admin->find($id);
            $admin->update($adminData);
            $return = ['data' => ['msg' => 'Successfully uodated admin']];
            return response()->json($return, 201);
        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1002));
            }
            return response()->json(ApiError::errorMessage('Error updating admin', 1002));

        }
    }

    public function delete(Admin $id){
        try{
            $id->delete();
            return response()->json(['data' => ['msg' => 'Admin name:' . $id->name . 'successfully deleted']]);
        }catch(\Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1003));
            }
            return response()->json(ApiError::errorMessage('Erros deleting Admin', 1003));
        }
    }

}

