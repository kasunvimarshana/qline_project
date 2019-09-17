<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewingCheckStandardDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewing_check_standard_data', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->nullable()->default(false)->comment('comment');
            $table->double('sample_count')->index()->nullable()->default(0)->comment('comment');
            $table->double('batch_count_min')->index()->nullable()->default(0)->comment('comment');
            $table->double('batch_count_max')->index()->nullable()->default(0)->comment('comment');
            $table->double('count_accept')->index()->nullable()->default(0)->comment('comment');
            $table->double('count_reject')->index()->nullable()->default(0)->comment('comment');
            $table->string('reject_level')->index()->nullable()->default(null)->comment('comment');
            $table->string('reject_mode')->index()->nullable()->default(null)->comment('comment');
            $table->string('accept_level')->index()->nullable()->default(null)->comment('comment');
            $table->string('accept_mode')->index()->nullable()->default(null)->comment('comment');
            //$table->double('audit_frequency')->index()->nullable()->default(0)->comment('comment');
            $table->double('audit_frequency_count')->index()->nullable()->default(0)->comment('comment');
            $table->double('audit_frequency_time')->index()->nullable()->default(0)->comment('comment');
            $table->string('sewing_check_standard_id')->index()->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('sewing_check_standard_id')->references('name')->on('sewing_check_standards')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewing_check_standard_data');
    }
}
