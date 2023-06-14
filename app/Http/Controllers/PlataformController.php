<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\PlataformRequest;
use App\Services\PlataformService;

class PlataformController extends Controller
{
    protected $plataform_service;
    public function __construct(PlataformService $plataform_service){
        $this->plataform_service = $plataform_service;        
    } 

    public function index(Request $request)
    {    
         return $this->plataform_service->index($request);              
    }

    public function store(PlataformRequest $request)
    {        
        return $this->plataform_service->store($request);   
    }

    public function show($id)
    {
        return $this->plataform_service->show($id);       
    }

    public function update(PlataformRequest $request, $id)
    { 
        return $this->plataform_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->plataform_service->destroy($id);              
    }    
    
}
