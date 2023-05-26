<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskListComponent extends Component
{

    public $tareas;

    public function mount($tareas){
        $this->tareas = $tareas;
    }

    public function render(){
        return view('livewire.task-list-component');
    }
}
