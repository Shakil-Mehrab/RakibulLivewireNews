<?php

namespace App\Http\Livewire\Tag;

use Livewire\Component;
use App\Actions\Future\Contracts\Tag\CreateNewTags;

class TagCreateForm extends Component
{

    public $state = [];

    public function createTag(CreateNewTags $creator)
    {
        $this->resetErrorBag();
        $type = $creator->create($this->state);
        $this->state = [
            'name' => ''
        ];

        $this->emit('refreshTags');
        $this->emit('saved');
    }
    public function render()
    {
        return view('livewire.tag.tag-create-form');
    }
}
