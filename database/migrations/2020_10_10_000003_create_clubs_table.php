<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->unique();
            $table->string('alias')->unique();

            $table->string('address')->nullable();
            $table->float('map_latitude', 16, 14)->default(0);
            $table->float('map_longitude', 17, 14)->default(0);

            $table->boolean('active')->default(true);
            $table->integer('sorting')->default(0);

            $table->timestamps();

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('club_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
