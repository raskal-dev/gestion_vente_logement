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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id("id_adresse");
            $table->string("libelle_adresse");
            $table->foreignId("codepostal_id")->constrained("codepostals", "id_codepostal");
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
        Schema::table("adresses", function(Blueprint $table) {
            $table->dropConstrainedForeignId("codepostal_id");
        });
        Schema::dropIfExists('adresses');
    }
};
