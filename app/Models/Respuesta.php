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
        'email', 'nombre', 'cargo', 'area', 'ente', 
        'pre5', 
        'nameSys', 'cadp', 'docsSys', 'startSys', 'updSys', 'infSys', 
        'noSys',
        'pre6', 
        'perioRes', 'lastRes', 
        'NoResSys', 
        'pre7', 
        'usb', 'ddext', 'cddvd', 'nube', 'otroequipo',
        'noRes', 
        'pre8', 
        'pre9', 'RegCont9','RegPre9', 'RegAdm9', 'RegTra9', 'RegCP9',
        'SInstC10','InstC10', 'SRegCont10', 'RegCont10', 'SRepCont10', 'RepCont10', 
        'SClasP11', 'ClasP11', 'SRegPre11', 'RegPre11', 'SRepPre11', 'RepPre11', 'SPrePro11', 'PrePro11', 
        'SContBie12', 'ContBie12', 'SRecFed12', 'RecFed12',
       'ContSP113','ContEP113','ContSP213','ContEP213', 'PresSP113', 'PresEP113','PresSP213', 'PresEP213','ProgSP113','ProgEP113','ProgSP213','ProgEP213',
       'TVASP114', 'TVACP114', 'TVASP214', 'TVACP214', 'TVTSP114', 'TVTCP114', 'TVTSP214', 'TVTCP214', 'OASP114', 'OACP114', 'OASP214', 'OACP214', 'OTSP114', 'OTCP114','OTSP214', 'OTCP214', 
        'SResGenCon15', 'ResGenCon15', 'TomoPE15', 'STomoPE15', 'STomoPL15', 'TomoPL15', 'STomoPJ15', 'TomoPJ15', 'STomoOA15', 'TomoOA15', 'SInfFin15', 'InfFin15','STomoSP15', 'TomoSP15', 
        'SResGenCon16', 'ResGenCon16', 'SInfFinMun16', 'InfFinMun16', 'STomoSP16', 'TomoSP16', 'SInfFin16', 'InfFin16',
        'pre17', 
        'pre18', 
        'pre19', 
        'pre20', 
        'zoom', 'meet', 'skype', 'teams', 'nitropdf', 'adobe', 'anydesk', 'teamviwer','otrasHerramientas', 
        'pre22', 
        'link', 'linklgcg', 
        'motivo', 
        'Cantidad22', 'Temas22', 'Impartido22', 'Area22', 
        'pre23', 'area23', 
        'pre24', 
        'pre251', 'pre252', 'pre253', 'pre254', 'pre255', 'pre256','pre257', 'pre258', 'pre259', 'pre2510', 'pre2511', 
        'pre26', 'porque26', 
        'pre27', 'porque27', 
        'pre28', 
        
    ];

    public static function opt18(){
        $array = ['0', '1', '2-5'];
        return $array;
    }

}