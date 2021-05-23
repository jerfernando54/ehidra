<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;


class Usersehidra extends LivewireDatatable
{
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';

    public $model = User::class;
    function columns()
    {
    	return [
    		NumberColumn::name('id')->label('ID'),
    		Column::name('name')->label('Name')->filterable(),
    		Column::name('email')->label('Email'),
    		DateColumn::name('created_at')->label('Creation Date')
    	];
    }
    
}

/*class Usersehidra extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

   
    public function render()
    {
        $datos['users'] = User::paginate(4);
        return view('livewire.usersehidra',$datos);
    }
}*/


