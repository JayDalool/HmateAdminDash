<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'db_host' => 'required|string',
            'db_port' => 'required|string',
            'db_name' => 'required|string',
            'db_username' => 'required|string',
            'db_password' => 'required|string',
            'subscription_start_date' => 'required|date',
            'subscription_end_date' => 'nullable|date',
            'renewal_date' => 'nullable|date',
            'price_per_month' => 'required|numeric',
        ];
    }
}
