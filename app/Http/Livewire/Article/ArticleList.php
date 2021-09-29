<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleList extends Component
{
    use WithPagination;
    public $paginate;
    public $query;
    protected $listeners = ['refreshTasks' => '$refresh'];
    public $selectAll = false;
    public $selectedTasks = [];

    public function mount($paginate = 10)
    {
        $this->paginate = $paginate;
    }

    public function tasks()
    {
        $builder = new Article();

        if ($this->query) {
            $builder = $builder->search($this->query);
        }
        return $builder->orderBy('created_at', 'desc')->with('user')->paginate($this->paginate);
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedTasks = Article::pluck('id');
        } else {
            $this->selectedTasks = [];
        }
    }

    public function render()
    {
        return view('livewire.article.article-list');
    }
}
