<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_winners', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();
            $table->float('total_points')->nullable();
            $table->float('avg_points')->nullable();
            $table->integer('jurors_voted')->nullable();
            $table->text('jury_comment')->nullable();
            $table->integer('accepted')->nullable();
            $table->integer('abstained')->nullable();
            $table->integer('rejected')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('link')->nullable();
            $table->string('winner_name')->nullable();
            $table->string('source')->nullable();
            $table->foreign('contest_id')
            ->references('id')->on('contests')
            ->onDelete('cascade');

            $table->string('user_id');

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
        Schema::dropIfExists('contest_winners');
    }
}
