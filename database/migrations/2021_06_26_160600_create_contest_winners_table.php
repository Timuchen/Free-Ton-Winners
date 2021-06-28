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
            $table->float('ranking');
            $table->text('description')->nullable();
            $table->float('total_points')->nullable();
            $table->float('avg_points')->nullable();
            $table->float('jurors_voted')->nullable();
            $table->text('jury_comment')->nullable();
            $table->float('accepted')->nullable();
            $table->float('abstained')->nullable();
            $table->float('rejected')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->string('link')->nullable();
            $table->string('winner_name')->nullable();
            $table->string('source')->nullable();
            $table->unsignedBigInteger('author_id');

            $table->unsignedBigInteger('contest_id');
            
            $table->foreign('contest_id')
            ->references('id')->on('contests')
            ->onDelete('cascade');

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
