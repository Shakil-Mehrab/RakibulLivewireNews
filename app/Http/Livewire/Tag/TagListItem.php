<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;
use App\Actions\Future\Contracts\Tag\UpdateTags;

class TagListItem extends Component
{
    public $tag;
    public $state = [];
    public $showingTagEditModal;
    public $showingTaskDeleteModal;

    public function mount(Tag $tag)
    {
        $this->tag = $tag;
        $this->state['name'] = $tag->name;
    }

    public function updateTag(UpdateTags $updater)
    {
        $this->resetErrorBag();
        $updater->update($this->tag, $this->state);
        $this->emit('refreshTags');
        $this->showingTagEditModal = null;
    }

    public function deleteTag()
    {
        $this->tag->delete();
        $this->showingTagDeleteModal = null;
        $this->emit('refreshTags');
    }

    public function render()
    {
        return view('livewire.tag.tag-list-item');
    }
}
