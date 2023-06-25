<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use App\Services\FileService;

class FileController extends Controller
{
    protected $file_service;
    public function __construct(FileService $file_service){
        $this->file_service = $file_service;        
    } 

    public function index(Request $request)
    {    
         return $this->file_service->index($request);              
    }

    public function store(FileRequest $request)
    {        
        return $this->file_service->store($request);   
    }

    public function show($id)
    {
        return $this->file_service->show($id);       
    }

    public function update(FileRequest $request, $id)
    { 
        return $this->file_service->update($request,$id);           
    }

    public function destroy($id)
    {
        return $this->file_service->destroy($id);              
    }    
    
}
