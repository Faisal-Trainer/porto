<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class BlogIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $activeCategory = 'all';
    public $isJournal = false;

    protected $queryString = [
        'search' => ['except' => ''],
        'activeCategory' => ['except' => 'all', 'as' => 'category'],
        'isJournal' => ['except' => false, 'as' => 'journal'],
    ];

    public function paginationView()
    {
        return 'vendor.pagination.tailwind';
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingActiveCategory()
    {
        $this->resetPage();
    }

    public function updatingIsJournal()
    {
        $this->resetPage();
    }

    public function setCategory($category)
    {
        $this->activeCategory = $category;
        $this->isJournal = false;
        $this->resetPage();
    }

    public function toggleJournal()
    {
        $this->isJournal = !$this->isJournal;
        if ($this->isJournal) {
            $this->activeCategory = 'all';
        }
        $this->resetPage();
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->resetPage();
    }

    public function render()
    {
        $query = Post::with('category', 'author')
            ->where('is_published', true)
            ->whereNotNull('published_at');

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', "%{$this->search}%")
                  ->orWhere('content', 'like', "%{$this->search}%")
                  ->orWhere('excerpt', 'like', "%{$this->search}%");
            });
        }

        if ($this->activeCategory !== 'all') {
            $query->whereHas('category', function ($q) {
                $q->where('name', $this->activeCategory);
            });
        }

        if ($this->isJournal) {
            $query->where('is_journal', true);
        }

        $posts = $query->latest('published_at')->paginate(12);

        $categories = Category::whereHas('posts', function($q) {
            $q->where('is_published', true);
        })->pluck('name');

        return view('livewire.blog-index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
