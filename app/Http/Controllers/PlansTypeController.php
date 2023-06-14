<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\PlansTypeRequest;
use App\Services\PlansTypeService;

class PlansTypeController extends Controller
{
    protected $plans_type_service;
    public function __construct(PlansTypeService $plans_type_service){
        $this->plans_type_service = $plans_type_service;        
    } 

    public function index(Request $request)
    {    
         return $this->plans_type_service->index($request);              
    }

    public function store(PlansTypeRequest $request)
    {        
        return $this->plans_type_service->store($request);   
    }

    public function show($id)
    {
        return $this->plans_type_service->show($id);       
    }

    public function update(PlansTypeRequest $request, $id)
    { 
        return $this->plans_type_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->plans_type_service->destroy($id);              
    }    
    
}
