<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\LevelDonorRequest;
use App\Services\LevelDonorService;

class LevelDonorController extends Controller
{
    protected $level_donor_service;
    public function __construct(LevelDonorService $level_donor_service){
        $this->level_donor_service = $level_donor_service;        
    } 

    public function index(Request $request)
    {    
         return $this->level_donor_service->index($request);              
    }

    public function store(LevelDonorRequest $request)
    {        
        return $this->level_donor_service->store($request);   
    }

    public function show($id)
    {
        return $this->level_donor_service->show($id);       
    }

    public function update(LevelDonorRequest $request, $id)
    { 
        return $this->level_donor_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->level_donor_service->destroy($id);              
    }    
    
}
