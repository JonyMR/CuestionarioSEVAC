<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {

            $table -> string('email')->nullable();
            $table -> string('nombre')->nullable();
            $table -> string('cargo')->nullable();
            $table -> string('area')->nullable();
            $table -> string('ente')->nullable();
            
            $table -> boolean('pre5')->default(0);
            //preguntas si en la 5 responde que sí:
            $table -> string('nameSys')->nullable();
            $table -> string('cadp')->nullable();
            $table -> string('docsSys')->nullable();
            $table -> date('startSys')->nullable();
            $table -> date('updSys')->nullable();
            $table -> string('infSys')->nullable(); //En este campo se guardaría la empresa que vende o arrenda, o en su defecto los documentos con los que cuentan de desarrollo propio.
            //preguntas si en la 5 responde que no:
            $table -> longText('noSys')->nullable();
            
            $table -> boolean('pre6')->default(0);
            //Preguntas si en la 6 responde que si:
            $table -> string('perioRes')->nullable();
            $table -> date('lastRes')->nullable();

            $table -> boolean('pre7')->default(0);
            //Preguntas si en la 7 responde que no:
            $table -> longText('noRes')->nullable();

            $table -> boolean('pre8')->default(0);

            $table -> boolean('pre9')->default(0);
            //Campos a llenar si en la 9 responde que si:
            $table -> integer('RegCont9')->nullable();
            $table -> integer('RegPre9')->nullable();
            $table -> integer('RegAdm9')->nullable();
            $table -> integer('RegTra9')->nullable();
            $table -> integer('RegCP9')->nullable();

            $table -> integer('InstC10')->default(0);
            $table -> integer('RegCont10')->default(0);
            $table -> integer('RepCont10')->default(0);

            $table -> integer('ClasP11')->default(0);
            $table -> integer('RegPre11')->default(0);
            $table -> integer('RepPre11')->default(0);
            $table -> integer('PrePro11')->default(0);

            $table -> integer('ContBie12')->default(0);
            $table -> integer('RecFed12')->default(0);

            $table -> integer('ContCont13')->default(0);
            $table -> integer('ContPre13')->default(0);
            $table -> integer('ContProg13')->default(0);

            $table -> integer('TVAn14')->default(0);
            $table -> integer('TVTri14')->default(0);
            $table -> integer('OtrAn14')->default(0);
            $table -> integer('OtrTri14')->default(0);

            $table -> integer('ResGenCon15')->default(0);
            $table -> integer('TomoPE15')->default(0);
            $table -> integer('TomoPL15')->default(0);
            $table -> integer('TomoPJ15')->default(0);
            $table -> integer('TomoOA15')->default(0);
            $table -> integer('InfFin15')->default(0);
            $table -> integer('TomoSP15')->default(0);

            $table -> integer('ResGenCon16')->default(0);
            $table -> integer('InfFinMun16')->default(0);
            $table -> integer('TomoSP16')->default(0);
            $table -> integer('InfFin16')->default(0);

            $table -> string('pre17')->nullable();
            $table -> string('pre18')->nullable();
            $table -> integer('pre19')->default(0);
            $table -> longText('pre20')->nullable();
            //Pregunta 21
            $table -> boolean('zoom')->nullable();
            $table -> boolean('meet')->nullable();
            $table -> boolean('skype')->nullable();
            $table -> boolean('teams')->nullable();
            $table -> boolean('nitropdf')->nullable();
            $table -> boolean('adobe')->nullable();
            $table -> boolean('anydesk')->nullable();
            $table -> boolean('teamviwer')->nullable();
            $table -> string('otrasHerramientas')->nullable();



            $table -> boolean('pre22')->default(0);
            $table -> string('link')->nullable();
            $table -> string('linklgcg')->nullable();
            $table -> string('motivo')->nullable();



            $table -> integer('Cantidad22')->default(0);
            $table -> string('Temas22')->nullable();
            $table -> string('Impartido22')->nullable();
            $table -> string('Area22')->nullable();

            $table -> string('pre23')->nullable();
            $table -> string('area23')->nullable();

            $table -> boolean('pre24')->default(0);

            //opciones pregunta 25
            $table -> string('pre251')->nullable();
            $table -> string('pre252')->nullable();
            $table -> string('pre253')->nullable();
            $table -> string('pre254')->nullable();
            $table -> string('pre255')->nullable();
            $table -> string('pre256')->nullable();
            $table -> string('pre257')->nullable();
            $table -> string('pre258')->nullable();
            $table -> string('pre259')->nullable();
            $table -> string('pre2510')->nullable();
            $table -> string('pre2511')->nullable();

            $table -> boolean('pre26')->default(0);
            $table -> longText('porque26')->nullable();

            $table -> boolean('pre27')->default(0);
            $table -> longText('porque27')->nullable();

            $table -> longText('pre28')->nullable();

            $table -> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
};
