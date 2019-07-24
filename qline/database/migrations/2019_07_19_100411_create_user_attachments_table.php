<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class CreateUserAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attachments', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            $table->timestamps();
            
            $table->boolean('is_visible')->index()->default(1)->nullable()->comment('comment');
            //$table->unsignedBigInteger('user_id_attached_by')->index()->nullable()->comment('comment');
            $table->string('attached_by')->index()->nullable()->comment('comment');
            $table->string('file_original_name')->index()->nullable()->comment('comment');
            $table->morphs('attachable');
            $table->string('file_type')->index()->nullable()->comment('comment');
            $table->text('link_url')->comment('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_attachments');
    }
}
