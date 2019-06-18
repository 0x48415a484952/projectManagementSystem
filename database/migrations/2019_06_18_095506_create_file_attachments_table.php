<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('attachable');
            $table->string('title');
            $table->string('path');
            $table->enum('file_type', ['image', 'zip', 'pdf']);
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
        Schema::dropIfExists('file_attachments');
    }
}
