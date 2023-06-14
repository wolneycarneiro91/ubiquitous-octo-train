<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\DonorTypeRequest;
use App\Services\DonorTypeService;

class DonorTypeController extends Controller
{
    protected $donor_type_service;
    public function __construct(DonorTypeService $donor_type_service){
        $this->donor_type_service = $donor_type_service;        
    } 

    public function index(Request $request)
    {    
         return $this->donor_type_service->index($request);              
    }

    public function store(DonorTypeRequest $request)
    {        
        return $this->donor_type_service->store($request);   
    }

    public function show($id)
    {
        return $this->donor_type_service->show($id);       
    }

    public function update(DonorTypeRequest $request, $id)
    { 
        return $this->donor_type_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->donor_type_service->destroy($id);              
    }    
    
}
