<?php

namespace App\Actions\Future\Contracts\Category;

interface UpdateCategories
{
    public function update($category, array $input);
}
