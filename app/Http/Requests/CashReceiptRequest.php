<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CashReceiptRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'date_cobro' => 'required|date',
        'numero_rc' => 'required|string',
        'num_factura' => 'required|string',
        'nombre_cliente' => 'required|string',
        'email_cliente' => 'required|email',
        'cobro_abono' => 'required|string',
        'nit' => 'required|string',
        'abono' => 'nullable|string',
        'descuento' => 'nullable|string',
        'retencion' => 'nullable|string',
        'devolucion' => 'nullable|string',
        'metodo_pago' => 'required|string',
        'informacion' => 'nullable|string',
        ];
    }
}
