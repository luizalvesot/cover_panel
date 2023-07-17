<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cidade;

class Panel extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => [
            'except' => '',
        ],
    ];

    public $cidade;
    public $search = '';
    public $search_cidade = '';

    public function mount()
    {
        $this->cidade = new Cidade();
    }

    public function render()
    {
        return view('livewire.panel', [
            'cidades' => Cidade::where('ddd', 'like', "%$this->search%")
                                ->orWhere('name', 'like', "%$this->search%")
                                ->paginate('30'),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
