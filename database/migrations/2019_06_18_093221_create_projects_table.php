<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->unsignedBigInteger('customer_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_delivery');
            $table->timestamp('free_support_at');
            $table->text('description')->nullable();
            $table->enum('status', ['todo', 'doing', 'done']);
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
        Schema::dropIfExists('projects');
    }
}
