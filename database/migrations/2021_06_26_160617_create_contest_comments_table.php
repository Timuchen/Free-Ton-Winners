<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_comments', function (Blueprint $table) {
            $table->id();

            $table->text('text');

            $table->unsignedBigInteger('contest_id');
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('contest_comments');
    }
}
