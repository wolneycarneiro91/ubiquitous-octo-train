<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\DonorRequest;
use App\Services\DonorService;

class DonorController extends Controller
{
    protected $donor_service;
    public function __construct(DonorService $donor_service){
        $this->donor_service = $donor_service;        
    } 

    public function index(Request $request)
    {    
         return $this->donor_service->index($request);              
    }

    public function store(DonorRequest $request)
    {        
        return $this->donor_service->store($request);   
    }

    public function show($id)
    {
        return $this->donor_service->show($id);       
    }

    public function update(DonorRequest $request, $id)
    { 
        return $this->donor_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->donor_service->destroy($id);              
    }    
    
}
