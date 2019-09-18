<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateQualityRecordInputScanDataStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_record_input_scan_data_statuses', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id')->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->timestamp('time_create')->index()->nullable()->comment('comment');
            $table->unsignedBigInteger('quality_record_input_scan_data_id')->unsigned()->nullable()->comment('comment');//->index()
            $table->unsignedBigInteger('status_id')->unsigned()->index()->nullable()->comment('comment');
            $table->text('description')->default(null)->nullable()->comment('comment'); 
            $table->string('user_id_create')->index()->nullable()->comment('comment');
            //$table->morphs('statusable');
        });
        
        Schema::table('quality_record_input_scan_data_statuses', function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            $table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('quality_record_input_scan_data_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('quality_record_input_scan_data')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id_create')->references('id', ('fk'.time().Str::uuid()->toString()))->on('users')->onUpdate('cascade');
            $table->index(array('quality_record_input_scan_data_id'), ('index'.time().Str::uuid()->toString()));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_record_input_scan_data_statuses');
    }
}
