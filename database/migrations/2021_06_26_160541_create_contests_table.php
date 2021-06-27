<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();
            $table->date('submission_start');
            $table->date('submission_end');
            $table->date('judging_start');
            $table->date('judging_end');
            $table->float('balance')->nullable();
            $table->string('to_disquse')->nullable();
            $table->float('total_votes')->nullable();
            $table->float('avg_score')->nullable();
            $table-string('image')->nullable();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('contest_category_id')
            ->references('id')->on('contest_categories')
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
        Schema::dropIfExists('contests');
    }
}