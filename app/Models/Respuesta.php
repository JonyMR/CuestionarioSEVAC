<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'nombre', 'cargo', 'area', 'ente', 'pre5', 'nameSys', 'cadp', 'docsSys', 'startSys', 'updSys', 'infSys', 'noSys',
        'pre6', 'perioRes', 'lastRes', 'pre7', 'noRes', 'pre8', 'pre9', 'SRegCont9', 'RegCont9','SRegPre9', 'RegPre9', 'SRegAdm9', 'RegAdm9', 'SRegTra9', 'RegTra9', 'SRegCP9', 'RegCP9',
        'SInstC10','InstC10', 'SRegCont10', 'RegCont10', 'SRepCont10', 'RepCont10', 'SClasP11', 'ClasP11', 'SRegPre11', 'RegPre11', 'SRepPre11', 'RepPre11', 
        'SPrePro11', 'PrePro11', 'SContBie12', 'ContBie12', 'SRecFed12', 'RecFed12', 'SContCont13', 'ContCont13', 'SContPre13', 'ContPre13', 
        'SContProg13', 'ContProg13', 'STVAn14', 'TVAn14', 'STVTri14', 'TVTri14', 'SOtrAn14', 'OtrAn14', 'SOtrTri14', 'OtrTri14', 'SResGenCon15', 'ResGenCon15', 'TomoPE15', 'STomoPE15', 
        'STomoPL15', 'TomoPL15', 'STomoPJ15', 'TomoPJ15', 'STomoOA15', 'TomoOA15', 'SInfFin15', 'InfFin15',
        'STomoSP15', 'TomoSP15', 'SResGenCon16', 'ResGenCon16', 'SInfFinMun16', 'InfFinMun16', 'STomoSP16', 'TomoSP16', 'SInfFin16', 'InfFin16', 'pre17', 'pre18', 'pre19', 'pre20', 'zoom', 'meet', 'skype', 'teams', 'nitropdf', 'adobe', 'anydesk', 'teamviwer',
        'otrasHerramientas', 'pre22', 'link', 'linklgcg', 'motivo', 'Cantidad22', 'Temas22', 'Impartido22', 'Area22', 'pre23', 'area23', 'pre24', 'pre251', 'pre252', 'pre253', 'pre254', 'pre255', 'pre256',
        'pre257', 'pre258', 'pre259', 'pre2510', 'pre2511', 'pre26', 'porque26', 
        'pre27', 'porque27', 'pre28', 'usb', 'ddext', 'cddvd', 'nube', 'otroequipo'
    ];
}