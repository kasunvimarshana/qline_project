<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateQualityRecordDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_record_data', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id')->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->default(false)->nullable()->comment('comment');//->index()
            $table->boolean('is_active')->default(false)->nullable()->comment('comment');//->index()
            $table->timestamp('time_create')->nullable()->comment('comment');//->index()
            $table->unsignedBigInteger('quality_record_id')->unsigned()->nullable()->comment('comment');//->index()
            $table->unsignedBigInteger('status_id')->unsigned()->nullable()->comment('comment');//->index()
            $table->text('description')->default(null)->nullable()->comment('comment'); 
            $table->string('user_id_create')->nullable()->comment('comment');//->index()
            //$table->morphs('statusable');
        });
        
        Schema::table('quality_record_data', function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('quality_record_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('quality_records')->onUpdate('cascade');
            $table->index(array('is_visible'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('is_active'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('time_create'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('quality_record_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('status_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('user_id_create'), ('index'.time().Str::uuid()->toString()));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_record_data');
    }
}
