<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewingAuditStandardDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewing_audit_standard_data', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('is_visible')->index()->nullable()->default(false)->comment('comment');
            $table->double('sample_size')->index()->nullable()->default(0)->comment('comment');
            $table->double('batch_size_min')->index()->nullable()->default(0)->comment('comment');
            $table->double('batch_size_max')->index()->nullable()->default(0)->comment('comment');
            $table->double('count_accept')->index()->nullable()->default(0)->comment('comment');
            $table->double('count_reject')->index()->nullable()->default(0)->comment('comment');
            $table->string('sewing_audit_standard_id')->index()->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('sewing_audit_standard_id')->references('name')->on('sewing_audit_standards')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewing_audit_standard_data');
    }
}
