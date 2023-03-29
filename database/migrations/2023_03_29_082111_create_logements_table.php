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
        Schema::create('logements', function (Blueprint $table) {
            $table->id("id_logement");
            $table->String("num_logement");
            $table->double("prix_logement", 11.2);
            $table->foreignId("terrain_id")->constrained("terrains", "id_terrain");
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
        Schema::table("logements", function(Blueprint $table) {
            $table->dropForeign("terrain_id");
        });
        Schema::dropIfExists('logements');
    }
};
