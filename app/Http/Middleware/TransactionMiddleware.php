<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Throwable;

class TransactionMiddleware
{
    public function handle($request, Closure $next)
    {
        DB::beginTransaction();

        try {
            $response = $next($request);

            if ($response->isSuccessful()) {
                DB::commit();
            } else {
                DB::rollBack();
            }
        } catch (Throwable $e) {
            DB::rollBack();

            throw $e; // Lançar o erro para ser tratado pelo Laravel

            // Alternativamente, você pode retornar uma resposta de erro personalizada:
            // return response()->json(['error' => 'Ocorreu um erro.'], 500);
        }

        return $response;
    }
}
