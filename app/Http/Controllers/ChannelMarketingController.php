<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\ChannelMarketingRequest;
use App\Services\ChannelMarketingService;

class ChannelMarketingController extends Controller
{
    protected $channel_marketing_service;
    public function __construct(ChannelMarketingService $channel_marketing_service){
        $this->channel_marketing_service = $channel_marketing_service;        
    } 

    public function index(Request $request)
    {    
         return $this->channel_marketing_service->index($request);              
    }

    public function store(ChannelMarketingRequest $request)
    {        
        return $this->channel_marketing_service->store($request);   
    }

    public function show($id)
    {
        return $this->channel_marketing_service->show($id);       
    }

    public function update(ChannelMarketingRequest $request, $id)
    { 
        return $this->channel_marketing_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->channel_marketing_service->destroy($id);              
    }    
    
}
