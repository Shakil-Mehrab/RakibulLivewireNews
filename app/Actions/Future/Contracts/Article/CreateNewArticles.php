<?php

namespace App\Actions\Future\Contracts\Article;

interface CreateNewArticles
{
    public function create($user, array $input);
}
