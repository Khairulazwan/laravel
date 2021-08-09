<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('eveId'); 
            $table->string('name');
            $table->string('email');
            $table->string('eveName');
            $table->string('eveLocation');
            $table->string('eveType');
            $table->string('eveDate');
            $table->string('eveStartAt');
            $table->string('eveEndAt');
            $table->string('eveOrganizer');
            $table->string('eveStatus');
            $table->string('accessStatus')->nullable();
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
        Schema::dropIfExists('event_requests');
    }
}
