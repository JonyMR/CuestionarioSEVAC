<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Product;
  
class Wizard extends Component
{
    public $currentStep = 1;

    public $email, $nombre, $pre5, $cargo, $area, $ente, $nameSys, $cadp, $docsSys, $startSys, $updSys, $infSys, $noSys,
    $pre6, $perioRes, $lastRes, $pre7, $noRes, $pre8, $pre9, $RegCont9, $RegPre9, $RegAdm9, $RegTra9, $RegCP9,
    $InstC10, $RegCont10, $RepCont10, $ClasP10, $RegPre11, $RepPre11, $PrePro11, $ContBie12, $RecFed12, $ContCont13, $ContPre13, 
    $ContProg13, $TVAn14, $TVTri14, $OtrAn14, $OtrTri14, $ResGenCon15, $TomoPE15, $TomoPL15, $TomoPJ15, $TomoOA15, $InfFin15, $TomoSP15,   
    $ResGenCon16, $InfFinMun16, $TomoSP16, $InfFin16, $pre17, $pre18, $pre19, $pre20, $platVideo, $convPDF, $sopRem,
    $otrasHerramientas, $Cantidad22, $Temas22, $Impartido22, $Area22, $pre23, $area23, $pre24, $pre25, $pre26, $porque26, 
    $pre27, $porque27, $pre28;

    public $successMessage = '';
  
    /**
     * Vista
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
  
    //****************************AQUI EMPIEZAN LOS STEPS******************************************************

    /**********************************************************************************************************
     * Step 1
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([

            'email'  => 'required|unique:responses',            //Pregunta 1 de forms
            'nombre' => 'required',                             //Pregunta 2 de forms
            'cargo' => 'required',                              //Pregunta 2 de forms
            'area' => 'required',                               //Pregunta 3 de forms
            'ente' => 'required',                               //Pregunta 4 de forms
        ]);
 
        $this->currentStep = 2;
    }
  
    /**********************************************************************************************************
     * Step 2 Pregunta 5 de forms
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'pre5' => 'required',                               
        ]);
        if ('pre5') {
            $this->currentStep = 3;
        }else {
            $this->currentStep = 4;
        }
        
    }

  
     /**********************************************************************************************************
     * Step 3 Si en la pregunta 5 responden que si, se les pregunta todo esto
     *
     * @return response()
     */
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'nameSys' => 'required',
            'cadp' => 'required',
            'docsSys' => 'required',
            'startSys' => 'required',
            'updSys' => 'required',                            
        ]);

        if ($cadp == 'Comprado') {
            $this->currentStep = 5;
        }else if($cadp == 'Arrendado'){
            $this->currentStep = 6;
        }else{
            $this->currentStep = 7;
        }
        
    }


     /**********************************************************************************************************
     * Step 4 Si en la pregunta 5 responden que no se les pregunta el por que
     *
     * @return response()
     */
    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([
            'noSys' => 'required',                               
        ]);

        $this->currentStep = 8;
    }


     /**********************************************************************************************************
     * Step 5 si el software es comprado
     *
     * @return response()
     */
    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'infSys' => 'required',                               
        ]);

        $this->currentStep = 8;
    }



     /**********************************************************************************************************
     * Step 6 si el software es arrendado
     *
     * @return response()
     */
    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'infSys' => 'required',                                
        ]);

        $this->currentStep = 8;
    }



     /**********************************************************************************************************
     * Step 7 si el software es propio
     *
     * @return response()
     */
    public function seventhStepSubmit()
    {
        $validatedData = $this->validate([
            'infSys' => 'required',                                
        ]);

        $this->currentStep = 8;
    }

    /**********************************************************************************************************
     * Step 8 pregunta 6
     *
     * @return response()
     */
    public function eigthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre6' => 'required',                               
        ]);

        if ($pre6) {
            $this->currentStep = 9;
        }else {
            $this->currentStep = 10;
        }
        
    }

    /**********************************************************************************************************
     * Step 9 si en la pregunta 6 responden que si
     *
     * @return response()
     */
    public function ninethStepSubmit()
    {
        $validatedData = $this->validate([
            'perioRes' => 'required',
            'lastRes' => 'required',                               
        ]);

        $this->currentStep = 10;
    }

    /**********************************************************************************************************
     * Step 10 pregunta 7
     *
     * @return response()
     */
    public function tenthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre7' => 'required',                              
        ]);

        if ($pre7) {
            $this->currentStep = 12;
        }else {
            $this->currentStep = 11;
        }
    }

    /**********************************************************************************************************
     * Step 11 si en la pregunta 11 dice que no
     *
     * @return response()
     */
    public function eleventhStepSubmit()
    {
        $validatedData = $this->validate([
            'noRes' => 'required',                              
        ]);

            $this->currentStep = 12;
    }

     /**********************************************************************************************************
     * Step 12 pregunta 8
     *
     * @return response()
     */
    public function twelfthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre8' => 'required',                               
        ]);

        $this->currentStep = 13;
    }

     /**********************************************************************************************************
     * Step 13 Pregunta 9
     *
     * @return response()
     */
    public function thirteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre9' => 'required',                               
        ]);

        if ($pre9) {
            $this->currentStep = 14;
        }else {
            $this->currentStep = 15;
        }
    }


     /**********************************************************************************************************
     * Step 14 Si responde que si a la pregunta 9
     *
     * @return response()
     */
    public function fourteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'RegCont9' => 'required|numeric',
            'RegPre9' => 'required|numeric',
            'RegAdm9' => 'required|numeric',
            'RegTra9' => 'required|numeric',
            'RegCP9' => 'required|numeric'
        ]);

        $this->currentStep = 15;
    }


     /**********************************************************************************************************
     * Step 15 Pregunta 10
     *
     * @return response()
     */
    public function fifteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'InstC10' => 'required|numeric',
            'RegCont10' => 'required|numeric',
            'RepCont10' => 'required|numeric',                                 
        ]);

        $this->currentStep = 16;
    }


     /**********************************************************************************************************
     * Step 16 Pregunta 11
     *
     * @return response()
     */
    public function sixteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'ClasP11' => 'required|numeric',
            'RegPre11' => 'required|numeric',
            'RepPre11' => 'required|numeric',                                 
            'PrePro11' => 'required|numeric',
        ]);

        $this->currentStep = 17;
    }

     /********************************************************************************************************
     * Step 17 Pregunta 12
     *
     * @return response()
     */
    public function seventeenthStepSubmit()
    {
        $validatedData = $this->validate([
            'ContBie12' => 'required|numeric',
            'RecFed12' => 'required|numeric',
        ]);

        $this->currentStep = 18;
    }    

     /********************************************************************************************************
     * Step 18 Pregunta 13
     *
     * @return response()
     */
    public function eigteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'ContCont13' => 'required|numeric',
            'ContPre13' => 'required|numeric',
            'ContProg13' => 'required|numeric',
        ]);

        $this->currentStep = 19;
    }  

     /********************************************************************************************************
     * Step 19 Pregunta 14
     *
     * @return response()
     */
    public function nineteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'TVAn14' => 'required|numeric',
            'TVTri14' => 'required|numeric',
            'OtrAn14' => 'required|numeric',
            'OtrTri14' => 'required|numeric',
        ]);

        $this->currentStep = 20;
    }  

     /********************************************************************************************************
     * Step 20 Pregunta 15
     *
     * @return response()
     */
    public function twentiethStepSubmit()
    {
        $validatedData = $this->validate([
            'ResGenCon15' => 'required|numeric',
            'TomoPE15' => 'required|numeric',
            'TomoPL15' => 'required|numeric',
            'TomoPJ15' => 'required|numeric',
            'TomoOA15' => 'required|numeric',
            'InfFin15' => 'required|numeric',
            'TomoSP15' => 'required|numeric',
        ]);

        $this->currentStep = 21;
    }  

     /********************************************************************************************************
     * Step 21 Pregunta 16
     *
     * @return response()
     */
    public function twentyfirstStepSubmit()
    {
        $validatedData = $this->validate([
            'ResGenCon16' => 'required|numeric',
            'InfFinMun16' => 'required|numeric',
            'TomoSP16' => 'required|numeric',
            'InfFin16' => 'required|numeric',
        ]);

        $this->currentStep = 22;
    } 


     /********************************************************************************************************
     * Step 22 Pregunta 17
     *
     * @return response()
     */
    public function twentysecondStepSubmit()
    {
        $validatedData = $this->validate([
            'pre17' => 'required',
        ]);

        $this->currentStep = 23;
    } 

     /********************************************************************************************************
     * Step 23 Pregunta 18
     *
     * @return response()
     */
    public function twentythirdStepSubmit()
    {
        $validatedData = $this->validate([
            'pre18' => 'required',
        ]);

        $this->currentStep = 24;
    } 


     /********************************************************************************************************
     * Step 24 Pregunta 19
     *
     * @return response()
     */
    public function twentyfourthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre19' => 'required|numeric',
        ]);

        $this->currentStep = 25;
    } 


     /********************************************************************************************************
     * Step 25 Pregunta 20
     *
     * @return response()
     */
    public function twentyfifthStepSubmit()
    {
        $validatedData = $this->validate([
            'pre20' => 'required',
        ]);

        $this->currentStep = 26;
    } 


     /********************************************************************************************************
     * Step 26 Pregunta 21
     *
     * @return response()
     */
    public function twentysixthStepSubmit()
    {
        $validatedData = $this->validate([
            'platVideo' => 'required',
            'convPDF' => 'required',
            'sopRem' => 'required',
            'otrasHerramientas' => 'required',
        ]);

        $this->currentStep = 27;
    } 

     /********************************************************************************************************
     * Step 27 Pregunta 22
     *
     * @return response()
     */
    public function twentyseventhStepSubmit()
    {
        $validatedData = $this->validate([
            'Cantidad22' => 'required|numeric',
            'Temas22' => 'required',
            'Impartidos22' => 'required',
            'Area22' => 'required',
        ]);

        $this->currentStep = 28;
    }

     /********************************************************************************************************
     * Step 28 Pregunta 23
     *
     * @return response()
     */
    public function twentyeightStepSubmit()
    {
        $validatedData = $this->validate([
            'pre23' => 'required',
            'area23' => 'required',
        ]);

        $this->currentStep = 29;
    }

     /********************************************************************************************************
     * Step 29 Pregunta 24
     *
     * @return response()
     */
    public function twentyninethStepSubmit()
    {
        $validatedData = $this->validate([
            'pre24' => 'required',
        ]);

        $this->currentStep = 30;
    }

     /********************************************************************************************************
     * Step 30 Pregunta 25
     *
     * @return response()
     */
    public function thirtiethStepSubmit()
    {
        $validatedData = $this->validate([
            'pre25' => 'required',
        ]);

        $this->currentStep = 31;
    }

     /********************************************************************************************************
     * Step 31 Pregunta 26
     *
     * @return response()
     */
    public function thirtyfirstStepSubmit()
    {
        $validatedData = $this->validate([
            'pre26' => 'required',
            'porque26' => 'required',
        ]);

        $this->currentStep = 32;
    }

     /********************************************************************************************************
     * Step 32 Pregunta 27
     *
     * @return response()
     */
    public function thirtysecondStepSubmit()
    {
        $validatedData = $this->validate([
            'pre27' => 'required',
            'porque27' => 'required',
        ]);

        $this->currentStep = 33;
    }

     /********************************************************************************************************
     * Step 33 Pregunta 28
     *
     * @return response()
     */
    public function thirtythirdStepSubmit()
    {
        $validatedData = $this->validate([
            'pre28' => 'required',
        ]);

        $this->currentStep = 34;
    }

    //******************AQUI TERMINAN LOS STEPS****************************************************************


    /**
     * Metodo submit del formulario
     *
     * @return response()
     */
    public function submitForm()
    {
        Response::create([
            'email' => $this->email,
            'nombre' =>$this->nombre,
            'cargo' => $this->cargo,
            'area' => $this->area,
            'ente' => $this->ente,
            'pre5' => $this->pre5,
            'nameSys' => $this->nameSys,
            'cadp' => $this->cadp,
            'docsSys' => $this->docsSys,
            'startSys' => $this->startSys,
            'updSys' => $this->updSys,
            'infSys' => $this->infSys,
            'noSys' => $this->noSys,
            'pre6' => $this->pre6,
            'perioRes' => $this->perioRes,
            'lastRes' => $this->lastRes,
            'pre7' => $this->pre7,
            'noRes' => $this->noRes,
            'pre8' => $this->pre8,
            'pre9' => $this->pre9,
            'RegCont9' => $this->RegCont9,
            'RegPre9' => $this->RegPre9,
            'RegAdm9' => $this->RegAdm9,
            'RegTra9' => $this->RegTra9,
            'RegCP9' => $this->RegCP9,
            'InstC10' => $this->InstC10,
            'RegCont10' => $this->RegCont10,
            'RepCont10' => $this->RepCont10,
            'ClasP11' => $this->ClasP11,
            'RegPre11' => $this->RegPre11,
            'RepPre11' => $this->RepPre11,
            'PrePro11' => $this->PrePro11,
            'ContBie12' => $this->ContBie12,
            'RecFed12' => $this->RecFed12,
            'ContCont13' => $this->ContCont13,
            'ContPre13' => $this->ContPre13,
            'ContProg13' => $this->ContProg13,
            'TVAn14' => $this->TVAn14,
            'TVTri14' => $this->TVTri14,
            'OtrAn14' => $this->OtrAn14,
            'OtrTri14' => $this->OtrTri14,
            'ResGenCon15' => $this->ResGenCon15,
            'TomoPE15' => $this->TomoPE15,
            'TomoPL15' => $this->TomoPL15,
            'TomoPJ15' => $this->TomoPJ15,
            'TomoOA15' => $this->TomoOA15,
            'IntFin15' => $this->IntFin15,
            'TomoSP15' => $this->TomoSP15,
            'ResGenCon16' => $this->ResGenCon16,
            'InfFinMun16' => $this->InfFinMun16,
            'TomoSP16' => $this->TomoSP16,
            'InfFin16' => $this->InfFin16,
            'pre17' => $this->pre17,
            'pre18' => $this->pre18,
            'pre19' => $this->pre19,
            'pre20' => $this->pre20,
            'platVideo' => $this->platVideo,
            'convPDF' => $this->convPDF,
            'sopRem' => $this->sopRem,
            'otrasHerramientas' => $this->otrasHerramientas,
            'Cantidad22' => $this->Cantidad22,
            'Temas22' => $this->Temas22,
            'Impartido22' => $this->Impartido22,
            'Area22' => $this->Area22,
            'pre23' => $this->pre23,
            'area23' => $this->area23,
            'pre24' => $this->pre24,
            'pre25' => $this->pre25,
            'pre26' => $this->pre26,
            'porque26' => $this->porque26,
            'pre27' => $this->pre27,
            'porque27' => $this->porque27,
            'pre28' => $this->pre28,
            'status' => $this->status,
        ]);
  
        $this->successMessage = 'Respuesta enviada correctamente.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Navegación de steps
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Limpiar Formulario
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->email = '';
        $this->nombre = '';
        $this->cargo = '';
        $this->area = '';
        $this->ente = '';
        $this->pre5 = '';
        $this->nameSys = '';
        $this->cadp = '';
        $this->docsSys = '';
        $this->startSys = '';
        $this->updSys = '';
        $this->infSys = '';
        $this->noSys = '';
        $this->pre6 = '';
        $this->perioRes = '';
        $this->lastRes = '';
        $this->pre7 = '';
        $this->noRes = '';
        $this->pre8 = '';
        $this->pre9 = '';
        $this->RegCont9 = '';
        $this->RegPre9 = '';
        $this->RegAdm9 = '';
        $this->RegTra9 = '';
        $this->RegCP9 = '';
        $this->InstC10 = '';
        $this->RegCont10 = '';
        $this->RepCont10 = '';
        $this->ClasP11 = '';
        $this->RegPre11 = '';
        $this->RepPre11 = '';
        $this->PrePro11 = '';
        $this->ContBie12 = '';
        $this->RecFed12 = '';
        $this->ContCont13 = '';
        $this->ContPre13 = '';
        $this->ContProg13 = '';
        $this->TVAn14 = '';
        $this->TVTri14 = '';
        $this->OtrAn14 = '';
        $this->OtrTri14 = '';
        $this->ResGenCon15 = '';
        $this->TomoPE15 = '';
        $this->TomoPL15 = '';
        $this->TomoPJ15 = '';
        $this->TomoOA15 = '';
        $this->IntFin15 = '';
        $this->TomoSP15 = '';
        $this->ResGenCon16 = '';
        $this->InfFinMun16 = '';
        $this->TomoSP16 = '';
        $this->InfFin16 = '';
        $this->pre17 = '';
        $this->pre18 = '';
        $this->pre19 = '';
        $this->pre20 = '';
        $this->platVideo = '';
        $this->convPDF = '';
        $this->sopRem = '';
        $this->otrasHerramientas = '';
        $this->Cantidad22 = '';
        $this->Temas22 = '';
        $this->Impartido22 = '';
        $this->Area22 = '';
        $this->pre23 = '';
        $this->area23 = '';
        $this->pre24 = '';
        $this->pre25 = '';
        $this->pre26 = '';
        $this->porque26 = '';
        $this->pre27 = '';
        $this->porque27 = '';
        $this->pre28 = '';
        $this->status = '';
    }
}