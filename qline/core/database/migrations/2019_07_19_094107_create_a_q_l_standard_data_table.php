<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class CreateAQLStandardDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_q_l_standard_data', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->nullable()->default(false)->comment('comment');
            $table->boolean('is_active')->index()->nullable()->default(false)->comment('comment');
            $table->double('count_sample')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('batch_count_min')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('batch_count_max')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('count_accept')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('count_reject')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->string('reject_level')->index()->nullable()->default(null)->comment('comment [ full / single ]');
            $table->string('reject_mode')->index()->nullable()->default(null)->comment('comment [ =, <, > ]');
            $table->string('accept_level')->index()->nullable()->default(null)->comment('comment [ full / single ]');
            $table->string('accept_mode')->index()->nullable()->default(null)->comment('comment [ =, <, > ]');
            //$table->double('audit_frequency')->index()->nullable()->default(0)->comment('comment');
            $table->double('audit_frequency_count')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->double('audit_frequency_time')->index()->nullable()->default(0)->comment('comment [ 0 < ]');
            $table->string('a_q_l_standard_id')->index()->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('a_q_l_standard_id')->references('id')->on('a_q_l_standards')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_q_l_standard_data');
    }
}
