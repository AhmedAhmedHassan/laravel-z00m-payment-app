<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('mtitle')->nullable();
            $table->string('mtopic')->default('Meeting Topic');
            $table->string('mstatus')->default('Not Started');
            $table->unsignedBigInteger('mnumber')->nullable();
            $table->unsignedBigInteger('muuid')->nullable();
            $table->text('password');
            $table->string('zoom_account')->nullable();
            $table->date('mstartdate')->nullable();
            $table->time('mstarttime')->nullable();
            $table->unsignedInteger('mduration')->default(30);
            $table->softDeletes();
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
        Schema::dropIfExists('meetings');
    }
}
