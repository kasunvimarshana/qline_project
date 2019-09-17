<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputScanDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_scan_data', function (Blueprint $table) {
             /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->timestamp('time_create')->index()->nullable()->comment('comment');
            $table->string('code')->index()->nullable()->comment('comment');
            $table->double('data_count')->index()->nullable()->default(0)->comment('comment');
            $table->string('company_id')->index()->nullable()->comment('comment');
            $table->string('factory_id')->index()->nullable()->comment('comment');
            $table->string('line_id')->index()->nullable()->comment('comment');
            $table->string('customer_id')->index()->nullable()->comment('comment');
            $table->string('style_id')->index()->nullable()->comment('comment');
            $table->string('colour_id')->index()->nullable()->comment('comment');
            $table->string('export_id')->index()->nullable()->comment('comment');
            $table->string('user_id_create')->index()->nullable()->comment('comment');
            
            $table->foreign('company_id')->references('name')->on('companies')->onUpdate('cascade');
            $table->foreign('factory_id')->references('name')->on('factories')->onUpdate('cascade');
            $table->foreign('line_id')->references('name')->on('lines')->onUpdate('cascade');
            $table->foreign('customer_id')->references('id')->on('user_a_p_i_tokens')->onUpdate('cascade');
            $table->foreign('style_id')->references('id')->on('user_a_p_i_tokens')->onUpdate('cascade');
            $table->foreign('colour_id')->references('id')->on('user_a_p_i_tokens')->onUpdate('cascade');
            $table->foreign('export_id')->references('id')->on('user_a_p_i_tokens')->onUpdate('cascade');
            $table->foreign('user_id_create')->references('id')->on('user_a_p_i_tokens')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_scan_data');
    }
}
