<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Book;
use Carbon\Carbon;

class LandingPage extends Component
{
    use WithPagination;

    public $search = '';
    public $filterAuthor = '';
    public $filterDate = '';
    public $filterRating = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'filterAuthor' => ['except' => ''],
        'filterDate' => ['except' => ''],
        'filterRating' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilterAuthor()
    {
        $this->resetPage();
    }

    public function updatingFilterDate()
    {
        $this->resetPage();
    }

    public function updatingFilterRating()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->filterAuthor = '';
        $this->filterDate = '';
        $this->filterRating = '';
        $this->resetPage();
    }

    public function getAuthorsProperty()
    {
        return Book::distinct()->pluck('author')->filter()->sort()->values();
    }

    public function getBooksProperty()
    {
        $query = Book::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'ILIKE', '%' . $this->search . '%')
                  ->orWhere('author', 'ILIKE', '%' . $this->search . '%');
            });
        }

        if ($this->filterAuthor) {
            $query->where('author', $this->filterAuthor);
        }

        if ($this->filterDate) {
            switch ($this->filterDate) {
                case 'today':
                    $query->whereDate('created_at', Carbon::today());
                    break;
                case 'week':
                    $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                    break;
                case 'month':
                    $query->whereMonth('created_at', Carbon::now()->month)
                          ->whereYear('created_at', Carbon::now()->year);
                    break;
                case 'year':
                    $query->whereYear('created_at', Carbon::now()->year);
                    break;
            }
        }

        if ($this->filterRating) {
            $query->where('rating', '=', $this->filterRating);
        }

        return $query->orderBy('created_at', 'desc')->paginate(20);
    }

    public function render()
    {
        return view('livewire.landing-page')->layout('layouts.guest');
    }
}
