<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category', 50);
            $table->text('summary')->nullable();
            $table->string('severity', 50)->nullable();
            $table->string('priority', 50)->default('normal');
            $table->string('status', 50)->default('assigned');
            $table->integer('create_user_id')->nullable();
            $table->integer('update_user_id')->nullable();
            $table->integer('delete_user_id')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
