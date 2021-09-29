<?php

namespace App\Actions\Future\Http\Category;


use App\Models\Type;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Actions\Future\Contracts\Category\CreateNewCategories;

class CreateNewCategory implements CreateNewCategories
{
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => 'required',
        ])->validate();

        $type = Category::create([
            'name' => $input['name'],
        ]);

        return $type;
    }
}
