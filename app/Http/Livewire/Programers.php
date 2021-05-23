<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Programdor;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Programers extends LivewireDatatable
{
    
    public $model = Programdor::class;
    function columns()
    {
    	return [
    		NumberColumn::name('id')->label('ID')->sortBy('id'),
    		Column::name('nombre')->label('Name')->filterable(),
            Column::name('ciudad')->label('City'),
            Column::name('pais')->label('Country'),
            Column::name('email')->label('Email')
    	];
    }
    
}

/*class Programers extends Component
{
    public function render()
    {
        return view('livewire.programers');
    }
}*/
