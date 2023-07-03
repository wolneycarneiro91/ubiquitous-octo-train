<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleAuthService;

class GoogleController extends Controller
{
    protected $google_auth_service;
    public function __construct(GoogleAuthService $google_auth_service)
    {
         $this->google_auth_service = $google_auth_service;
    }
    public function googlepage()
    {
        return  $this->google_auth_service->googlepage();
    }
    public function googlecallback()
    {
        return  $this->google_auth_service->googlecallback();
    }
}
