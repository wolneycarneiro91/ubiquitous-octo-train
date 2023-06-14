<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\FundTypeRequest;
use App\Services\FundTypeService;

class FundTypeController extends Controller
{
    protected $fund_type_service;
    public function __construct(FundTypeService $fund_type_service){
        $this->fund_type_service = $fund_type_service;        
    } 

    public function index(Request $request)
    {    
         return $this->fund_type_service->index($request);              
    }

    public function store(FundTypeRequest $request)
    {        
        return $this->fund_type_service->store($request);   
    }

    public function show($id)
    {
        return $this->fund_type_service->show($id);       
    }

    public function update(FundTypeRequest $request, $id)
    { 
        return $this->fund_type_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->fund_type_service->destroy($id);              
    }    
    
}
