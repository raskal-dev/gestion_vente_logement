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
        Schema::create('achats', function (Blueprint $table) {
            $table->id("id_achat");
            $table->String("nom_cli");
            $table->String("prenom_cli");
            $table->String("cin");
            $table->String("tel_cli");
            $table->String("email_cli");
            $table->foreignId("typevente_id")->constrained("typeventes", "id_typevente");
            $table->foreignId("logement_id")->constrained("logements", "id_logement");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("achats", function(Blueprint $table) {
            $table->dropForeign("typevente_id");
            $table->dropForeign("logement_id");
        });
        Schema::dropIfExists('achats');
    }
};
