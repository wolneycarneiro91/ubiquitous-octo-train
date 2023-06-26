<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\PaymmentTypeRequest;
use App\Services\PaymmentTypeService;

class PaymmentTypeController extends Controller
{
    protected $paymment_type_service;
    public function __construct(PaymmentTypeService $paymment_type_service){
        $this->paymment_type_service = $paymment_type_service;        
    } 

    public function index(Request $request)
    {    
         return $this->paymment_type_service->index($request);              
    }

    public function store(PaymmentTypeRequest $request)
    {        
        return $this->paymment_type_service->store($request);   
    }

    public function show($id)
    {
        return $this->paymment_type_service->show($id);       
    }

    public function update(PaymmentTypeRequest $request, $id)
    { 
        return $this->paymment_type_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->paymment_type_service->destroy($id);              
    }    
    
}
