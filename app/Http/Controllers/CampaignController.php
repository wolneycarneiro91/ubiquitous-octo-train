<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\CampaignRequest;
use App\Services\CampaignService;

class CampaignController extends Controller
{
    protected $campaign_service;
    public function __construct(CampaignService $campaign_service){
        $this->campaign_service = $campaign_service;        
    } 

    public function index(Request $request)
    {    
         return $this->campaign_service->index($request);              
    }

    public function store(CampaignRequest $request)
    {        
        return $this->campaign_service->store($request);   
    }

    public function show($id)
    {
        return $this->campaign_service->show($id);       
    }

    public function update(CampaignRequest $request, $id)
    { 
        return $this->campaign_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->campaign_service->destroy($id);              
    }    
    
}
