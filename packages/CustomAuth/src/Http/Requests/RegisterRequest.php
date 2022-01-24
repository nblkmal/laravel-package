<?php

namespace Nblkmal\CustomAuth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Nblkmal\CustomAuth\Classes\CustomRegister;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return CustomRegister::validationRules();
    }
}