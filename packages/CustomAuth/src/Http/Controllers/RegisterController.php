<?php

namespace Nblkmal\CustomAuth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Nblkmal\CustomAuth\Classes\CustomRegister;
use Nblkmal\CustomAuth\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    protected $customRegister;

    public function __construct(CustomRegister $customRegister)
    {
        $this->customRegister = $customRegister;
    }
    
    public function create()
    {
        return $customRegister->showRegisterView();
        // return view('custom-auth::register');
    }

    public function store(RegisterRequest $request)
    {
        // no need to write validation, because $request ran through the RegisterRequest
        return $this->customRegister->createNewUser($request);
        // dd($request);
    }
}