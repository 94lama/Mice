<?php

namespace App\Livewire;

use App\Models\Mouse as Mouser;
use Livewire\Component;
use App\Http\Controllers\MouseController;

class Mouse extends Component
{
    public $id;
    public $mouse;

    public function add(Mouser $mouse){
        /* $this->number = $mouse->number+1; */
        $mouse->update(['number'=>$mouse->number+1]);
        if($mouse->number==5){
            Mouser::create();
            $mouse->update(['number'=>1]);
            return to_route('home');
        }
        $this->mouse = $mouse;
        $this->render();
    }

    public function reduce(Mouser $mouse){
        $mouse->update(['number'=>$mouse->number-1]);
        
        if($mouse->number==0){
            $mouse->delete();
            return to_route('home');
        }
        $this->mouse = $mouse;
        $this->render();
    }

    public function render()
    {
        $mouse = $this->mouse;
        return view('livewire.mouse', compact('mouse'));
    }
}
