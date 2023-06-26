<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\DonationRequest;
use App\Services\DonationService;

class DonationController extends Controller
{
    protected $donation_service;
    public function __construct(DonationService $donation_service){
        $this->donation_service = $donation_service;        
    } 

    public function index(Request $request)
    {    
         return $this->donation_service->index($request);              
    }

    public function store(DonationRequest $request)
    {        
        return $this->donation_service->store($request);   
    }

    public function show($id)
    {
        return $this->donation_service->show($id);       
    }

    public function update(DonationRequest $request, $id)
    { 
        return $this->donation_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->donation_service->destroy($id);              
    }    
    
}
