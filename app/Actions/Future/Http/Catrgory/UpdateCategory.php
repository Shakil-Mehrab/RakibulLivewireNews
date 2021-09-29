<?php

namespace App\Actions\Future\Http\Category;


use Illuminate\Support\Facades\Validator;
use App\Actions\Future\Contracts\Category\UpdateCategories;

class UpdateCategory implements UpdateCategories
{
    public function update($type, array $input)
    {
        Validator::make($input, [
            'name' => 'required',
        ])->validate();

        $type->update([
            'name' => $input['name'],
        ]);

        return $type;
    }
}
