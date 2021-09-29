<?php

namespace App\Actions\Future\Http\Task;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Actions\Future\Contracts\Task\UpdateTasks;

class UpdateTask implements UpdateTasks
{
    public function update($task, array $input)
    {
        // dd($input);
        $validatedData = Validator::make($this->filteredArray($input), [
            'title' => 'required',
            'platform1' => [Rule::requiredIf(!$input['platform2'] && !$input['platform3']), 'url'],
            'platform2' => Rule::requiredIf(!$input['platform1'] && !$input['platform3']), 'url',
            'platform3' => Rule::requiredIf(!$input['platform1'] && !$input['platform2']), 'url',
            'types' => 'required|array',
            'tags' => 'required|array',
            'area' => 'required',
        ], [
            'platform1.required' => 'Atleast one of these thre URL required',
            'platform2.required' => 'Atleast one of these thre URL required',
            'platform3.required' => 'Atleast one of these thre URL required'
        ])->validate();
        // dd($validatedData);
        $task->update([
            'title' => $validatedData['title'],
            'platform1' => $validatedData['platform1'] ?? null,
            'platform2' => $validatedData['platform2'] ?? null,
            'platform3' => $validatedData['platform3'] ?? null,
            'remarks' => $input['remarks'] ?? null,

        ]);


        if (array_key_exists('types', $input) && $types = $this->filteredArray($input['types'])) {
            $task->types()->sync($types);
        }
        if (array_key_exists('tags', $input) && $tags = $this->filteredArray($input['tags'])) {
            $task->tags()->sync($tags);
        }
        if (array_key_exists('areas', $input) && $areas = $this->filteredArray([$input['areas']])) {
            $task->areas()->sync($areas);
        }
        // else {
        //     $task->tags()->detach();
        // }
        return $task;
    }

    protected function filteredArray($input)
    {
        return array_filter($input);
    }
}
