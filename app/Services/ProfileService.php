<?php

namespace App\Services;
use Illuminate\Http\Response;
use App\Models\Profile;

class ProfileService 
{
    protected $profile;
    public function __construct(Profile $profile){
            $this->profile = $profile;        
    } 
    public function index($request)
    {    
        if ($request->filled('limit')) {
            if ($request->limit == '-1') {
                $data = $this->profile->get();
            }
        } else {
            $data = $this->profile->paginate(config('app.pageLimit'));
        }                                     
        $data = $this->profile->all();
        $totalCount = count($data);
        return response()->json($data, Response::HTTP_OK )->header('X-Total-Count', $totalCount);               
    }
    public function store($request)
    {        
        $dataFrom = $request->all();       
        try {        
            $data = $this->profile->create($dataFrom);               
            return response()->json($data,Response::HTTP_CREATED ) ;
        } 
        catch (\Exception $e) {            
            return response()->json(["message"=>'Não foi possível cadastrar',"error"=>$e], Response::HTTP_NOT_ACCEPTABLE );
        }             
    }
    public function show($id)
    {
        $data = $this->profile->find($id);
        $totalCount = count($data);
        if(!$data){
            return response()->json(['error'=>'Dados não encontrados'],Response::HTTP_NOT_FOUND) ;
        }
        return response()->json($data, Response::HTTP_OK )->header('X-Total-Count', $totalCount);               
    }
    public function update($request, $id)
    { 
        $data = $this->profile->find($id);  
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
        $data = $this->profile->find($id);
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
