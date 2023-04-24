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
        'pre6', 'perioRes', 'lastRes', 'pre7', 'noRes', 'pre8', 'pre9', 'RegCont9', 'RegPre9', 'RegAdm9', 'RegTra9', 'RegCP9',
        'InstC10', 'RegCont10', 'RepCont10', 'ClasP10', 'RegPre11', 'RepPre11', 'PrePro11', 'ContBie12', 'RecFed12', 'ContCont13', 'ContPre13', 
        'ContProg13', 'TVAn14', 'TVTri14', 'OtrAn14', 'OtrTri14', 'ResGenCon15', 'TomoPE15', 'TomoPL15', 'TomoPJ15', 'TomoOA15', 'InfFin15',
        'TomoSP15', 'ResGenCon16', 'InfFinMun16', 'TomoSP16', 'InfFin16', 'pre17', 'pre18', 'pre19', 'pre20', 'zoom', 'meet', 'skype', 'teams', 'nitropdf', 'adobe', 'anydesk', 'teamviwer',
        'otrasHerramientas', 'pre22', 'link', 'linklgcg', 'motivo', 'Cantidad22', 'Temas22', 'Impartido22', 'Area22', 'pre23', 'area23', 'pre24', 'pre251', 'pre252', 'pre253', 'pre254', 'pre255', 'pre256',
        'pre257', 'pre258', 'pre259', 'pre2510', 'pre2511', 'pre26', 'porque26', 
        'pre27', 'porque27', 'pre28'
    ];
}