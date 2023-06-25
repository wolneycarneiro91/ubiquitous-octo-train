<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\TypeFileRequest;
use App\Services\TypeFileService;

class TypeFileController extends Controller
{
    protected $type_file_service;
    public function __construct(TypeFileService $type_file_service){
        $this->type_file_service = $type_file_service;        
    } 

    public function index(Request $request)
    {    
         return $this->type_file_service->index($request);              
    }

    public function store(TypeFileRequest $request)
    {        
        return $this->type_file_service->store($request);   
    }

    public function show($id)
    {
        return $this->type_file_service->show($id);       
    }

    public function update(TypeFileRequest $request, $id)
    { 
        return $this->type_file_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->type_file_service->destroy($id);              
    }    
    
}
