<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email');
            $table->string('battlenet');
            $table->string('info');
            $table->string('character_name');
            $table->string('realm');
            $table->string('armoury_url');
            $table->string('warcraftlogs_url');
            $table->string('why_us');
            $table->string('ui');
            $table->string('alt');
            $table->string('class_info');
            $table->boolean('attendance');
            $table->boolean('spec');
            $table->boolean('sat');
            $table->string('raid_info');
            $table->string('raid_experience');
            $table->integer('status')->default(0);

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
        Schema::drop('applications');
    }
}
