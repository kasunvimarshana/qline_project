<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualityRecordSewingAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_record_sewing_audits', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->bigIncrements('id');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->default(false)->nullable()->comment('comment');//->index()
            $table->boolean('is_active')->default(false)->nullable()->comment('comment');//->index()
            $table->timestamp('time_create')->nullable()->comment('comment');//->index()
            //$table->string('code')->nullable()->comment('comment');//->index()
            //$table->double('count_data')->nullable()->default(0)->comment('comment');//->index()
            //$table->double('count_attempt')->nullable()->default(0)->comment('comment');//->index()
            $table->double('count_sample')->nullable()->default(0)->comment('comment');//->index()
            $table->string('inspection_stage_id')->nullable()->comment('comment');//->index()
            $table->string('standard_a_q_l_id')->nullable()->comment('comment');//->index()
            $table->string('company_id')->nullable()->comment('comment');//->index()
            $table->string('strategic_business_unit_id')->nullable()->comment('comment');//->index()
            $table->string('factory_id')->nullable()->comment('comment');//->index()
            $table->string('line_id')->nullable()->comment('comment');//->index()
            $table->string('customer_id')->nullable()->comment('comment');//->index()
            $table->string('style_id')->nullable()->comment('comment');//->index()
            $table->string('colour_id')->nullable()->comment('comment');//->index()
            $table->string('export_id')->nullable()->comment('comment');//->index()
            $table->string('user_id_create')->nullable()->comment('comment');//->index()
            $table->string('ip_address')->nullable()->comment('comment');//->index()
            $table->unsignedBigInteger('status_id')->unsigned()->nullable()->comment('comment');//->index()
            $table->text('description')->default(null)->nullable()->comment('comment'); 
            //$table->morphs('recordable');
        });
        
        Schema::table('quality_record_sewing_audits', function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            $table->index(array('is_visible'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('is_active'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('time_create'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('inspection_stage_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('standard_a_q_l_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('company_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('strategic_business_unit_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('factory_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('line_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('customer_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('style_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('colour_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('export_id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('user_id_create'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('ip_address'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('status_id'), ('index'.time().Str::uuid()->toString()));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_record_sewing_audits');
    }
}
