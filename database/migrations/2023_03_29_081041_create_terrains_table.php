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
        Schema::create('terrains', function (Blueprint $table) {
            $table->id("id_terrain");
            $table->string("nom_terrain");
            $table->double("superficie_terrain", 10.2);
            $table->foreignId("cite_id")->constrained("cites", "id_cite");
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
        Schema::table("terrains", function(Blueprint $table) {
            $table->dropForeign("cite_id");
        });
        Schema::dropIfExists('terrains');
    }
};
