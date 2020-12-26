<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopUpdateRequest extends FormRequest
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
            'address' => 'string',
            'seafood_id' => 'integer|exists:seafoods,id',
            'algae_id' => 'integer|exists:algaes,id',
            'river_fish_id' => 'integer|exists:river_fishes,id',
            'sea_fish_id' => 'integer|exists:sea_fishes,id',
            'bake_id' => 'integer|exists:bakes,id',
        ];
    }
}
