<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:64'],
            'description' => ['required', 'max:256'],
            'amount_month' => ['sometimes', 'numeric', 'gt:0', 'max:9999999999'],
            'amount_year' => ['sometimes', 'numeric', 'gt:0', 'max:9999999999'],
            'currency' => ['sometimes'],
            'coupons' => ['sometimes', 'nullable'],
            'tax_rates' => ['sometimes', 'nullable'],
            'trial_days' => ['sometimes', 'integer', 'min:0', 'max:3650'],
            'visibility' => ['required', 'integer', 'between:0,1'],
            'position' => ['required', 'integer', 'min:0', 'max:4294967295'],
            'features.links' => ['required', 'integer', 'min:-1', 'max:9999999999'],
            'features.spaces' => ['required', 'integer', 'min:-1', 'max:9999999999'],
            'features.domains' => ['required', 'integer', 'min:-1', 'max:9999999999'],
            'features.global_domains' => ['required', 'integer', 'between:0,1'],
            'features.pixels' => ['required', 'integer', 'min:-1', 'max:9999999999'],
            'features.link_stats' => ['required', 'integer', 'between:0,1'],
            'features.link_targeting' => ['required', 'integer', 'between:0,1'],
            'features.link_password' => ['required', 'integer', 'between:0,1'],
            'features.link_expiration' => ['required', 'integer', 'between:0,1'],
            'features.link_disabling' => ['required', 'integer', 'between:0,1'],
            'features.link_deep' => ['required', 'integer', 'between:0,1'],
            'features.link_utm' => ['required', 'integer', 'between:0,1'],
            'features.data_export' => ['required', 'integer', 'between:0,1'],
            'features.api' => ['required', 'integer', 'between:0,1']
        ];
    }
}
