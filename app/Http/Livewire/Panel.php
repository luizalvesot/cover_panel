<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cidade;

class Panel extends Component
{
    use WithPagination;

    public $cidade;
    public $search_ddd = '';
    public $search_cidade = '';
    public $search_estado = '';

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search_ddd'    => ['except' => ''],
        'search_cidade' => ['except' => ''],
        'search_estado' => ['except' => ''],
    ];

    public function mount()
    {
        $this->cidade = new Cidade();
    }

    public function render()
    {
        return view('livewire.panel', [
            'cidades' => Cidade::where('ddd', 'like', "%$this->search_ddd%")
                                ->Where('name', 'like', "%$this->search_cidade%")
                                ->Where('estado', 'like', "%$this->search_estado%")
                                ->paginate('18'),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
