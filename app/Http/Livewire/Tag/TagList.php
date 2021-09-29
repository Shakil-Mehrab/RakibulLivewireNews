<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag;
use Livewire\Component;

class TagList extends Component
{
    public $tags;
    public $query;
    protected $listeners = ['refreshTags' => '$refresh'];

    public function tags()
    {
        $builder = new Tag;

        if ($this->query) {
            $builder = $builder->search($this->query);
        }
        return $builder->get();
    }

    public function render()
    {
        return view('livewire.tag.tag-list');
    }
    public function deleteTag()
    {
        $this->task->delete();
        $this->showingTaskDeleteModal = null;
        $this->emit('refreshTags');
    }
}
