<?php

namespace App\Services;
use Illuminate\Http\Response;
use App\Models\Donats;

class DonatsService 
{
    protected $donats;
    public function __construct(Donats $donats){
            $this->donats = $donats;        
    } 
    public function index($request)
    {    
        if ($request->filled('limit')) {
            if ($request->limit == '-1') {
                $data = $this->donats->get();
            }
        } else {
            $data = $this->donats->paginate(config('app.pageLimit'));
        }                                     
        $data = $this->donats->all();
        return response()->json($data, Response::HTTP_OK );                
    }
    public function store($request)
    {        
        $dataFrom = $request->all();       
        try {        
            $data = $this->donats->create($dataFrom);               
            return response()->json($data,Response::HTTP_CREATED ) ;
        } 
        catch (\Exception $e) {            
            return response()->json(["message"=>'Não foi possível cadastrar',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
        }             
    }
    public function show($id)
    {
        $data = $this->donats->find($id);
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }
        return response()->json($data,Response::HTTP_OK ) ;
    }
    public function update($request, $id)
    { 
        $data = $this->donats->find($id);  
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }            
        $dataFrom = $request->all();       
        try {          
            $data->update($dataFrom);               
            return response()->json($data,Response::HTTP_OK ) ;    
            }
        catch (\Exception $e)
             {             
             return response()->json(["message"=>'Não foi possível atualizar',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
            }                             
    }

    public function destroy($id)
    {
        $data = $this->donats->find($id);
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }        
         try {  
                $data->delete();                 
                return response()->json(['success'=>'Deletado com sucesso.'],Response::HTTP_OK ) ; 
         }
        catch (\Exception $e)
             {                
                return response()->json(["message"=>'Não foi possível excluir',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
            }                
    }    
    
}
