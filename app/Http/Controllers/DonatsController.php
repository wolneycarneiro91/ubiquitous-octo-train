<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\DonatsRequest;
use App\Services\DonatsService;

class DonatsController extends Controller
{
    protected $donats_service;
    public function __construct(DonatsService $donats_service){
        $this->donats_service = $donats_service;        
    } 

    public function index(Request $request)
    {    
         return $this->donats_service->index($request);              
    }

    public function store(DonatsRequest $request)
    {        
        return $this->donats_service->store($request);   
    }

    public function show($id)
    {
        return $this->donats_service->show($id);       
    }

    public function update(DonatsRequest $request, $id)
    { 
        return $this->donats_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->donats_service->destroy($id);              
    }    
    
}
