<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entes;

class Searchbox extends Component
{
     public $showdiv = false;
     public $search = "";
     public $records;
     public $empDetails;

     // Fetch records
     public function searchResult(){

         if(!empty($this->search)){

             $this->records = Entes::select('*')
                       ->where('ente','like','%'.$this->search.'%')
                       ->limit(5)
                       ->get();

             $this->showdiv = true;
         }else{
             $this->showdiv = false;
         }
     }

     // Fetch record by ID
     public function fetchEmployeeDetail($id = 0){

         $record = Entes::select('*')
                     ->where('id',$id)
                     ->first();

         $this->search = $record->ente;
         $this->empDetails = $record;
         $this->showdiv = false;
     }

     public function render(){ 
         return view('livewire.searchbox');
     }
}