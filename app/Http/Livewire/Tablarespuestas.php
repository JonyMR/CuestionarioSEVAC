<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tablarespuestas extends Component
{
    public function render()
    {
        $query = \DB::table('respuestas')->get();
        return view('livewire.tablarespuestas')->with('respuestas', $query);
    }

}




/*Sustituye todos los NULL de nameSys por un -
$query = \DB::table('respuestas')
->select(\DB::raw('IFNULL(nameSys, "-") as nameSys'), 'nombre', 'cargo', 'area', 'ente')
->get();
return view('livewire.tablarespuestas')->with('tablarespuestas', $query);*/