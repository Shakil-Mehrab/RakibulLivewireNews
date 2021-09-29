<?php

namespace App\Http\Livewire\Article;

use App\Actions\Future\Contracts\Article\CreateNewArticles;
use App\Models\Tag;
use App\Models\Area;
use App\Models\Task;
use App\Models\Team;
use App\Models\Type;
use Livewire\Component;
use App\Models\Category;
use App\Platform\Platform;
use App\Actions\Future\Contracts\Tag\CreateNewTags;
use App\Actions\Future\Contracts\Task\CreateNewTasks;

// use App\Models\Platform;

class ArticleCreateForm extends Component
{


    public $state = [];
    public $newTag;
    public $tags;
    public $types;
    public $query = '';
    public $selectedRegion = [];
    public $teams = [];
    public $areas = [];



    public function mount()
    {
        $this->tags = $this->getTags();
        $this->types = Category::latest()->get();
        $this->areas = Area::latest()->with('parent')->get();
    }
    public function getTags()
    {
        return Tag::latest()->get();
    }
    // public function getAreas()
    // {
    //     $builder = new Area;
    //     if ($region = $this->query) {
    //         $builder = $builder->where('eng_name', 'LIKE', "%$this->query%");
    //         return Area::where('eng_name', 'LIKE', "%$this->query%")->get();
    //     }
    //     return $builder->get();
    // }

    public function createTask(CreateNewArticles $creator)
    {
        // dd($this->state);
        $this->resetErrorBag();

        $task = $creator->create(auth()->user(), $this->state);
        $this->state = [];
        $this->emit('refreshTasks');
        $this->emit('saved');
    }
    public function CreateNewTag(CreateNewTags $creator)
    {
        // $tag = Tag::create([
        //     'name' => $this->newTag
        // ]);
        // array_push($this->selectedTag, $tag->id);
        // $this->tags->fresh();
    }
    public function render()
    {
        return view('livewire.article.article-create-form');
    }
}
