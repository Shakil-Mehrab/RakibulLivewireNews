<?php

namespace App\Actions\Future\Http\Article;

use Illuminate\Support\Facades\Validator;
use App\Actions\Future\Contracts\Article\CreateNewArticles;

class CreateNewArticle implements CreateNewArticles
{
    public function create($user, array $input)
    {
        // dd($input);
        $validatedData = Validator::make($this->filteredArray($input), [
            'title' => 'required',
            'platforms' => 'required|array',
            'platforms.*' => 'required|url',
            'categories' => 'required|array',
            'tags' => 'required|array',
            'areas' => 'required',
        ])->validate();
        // dd($validatedData);
        $article = $user
            ->articles()
            ->create(
                [
                    'title' => $validatedData['title'],
                    'platform1' => $validatedData['platforms'][1] ?? null,
                    'platform2' => $validatedData['platforms'][2] ?? null,
                    'platform3' => $validatedData['platforms'][3] ?? null,
                    'remarks' => $input['remarks'] ?? null,
                ]
            );

        if (array_key_exists('categories', $input) && $categories = $this->filteredArray($input['categories'])) {
            $article->categories()->sync($categories);
        }
        if (array_key_exists('tags', $input) && $tags = $this->filteredArray($input['tags'])) {
            $article->tags()->sync($tags);
        }
        if (array_key_exists('areas', $input) && $areas = $this->filteredArray([$input['areas']])) {
            $article->areas()->sync($areas);
        }
        return $article;
    }

    protected function filteredArray($request)
    {
        return array_filter($request);
    }
}
