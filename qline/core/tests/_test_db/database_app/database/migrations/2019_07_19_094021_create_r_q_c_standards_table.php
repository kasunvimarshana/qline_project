<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateRQCStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_q_c_standards', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            //$table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->string('id')->index()->unique()->comment('comment');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->boolean('is_active')->index()->default(false)->nullable()->comment('comment');
            $table->string('colour_id')->index()->nullable()->comment('comment');
            //$table->string('slug')->index()->unique()->nullable()->comment('comment');
            $table->string('code')->index()->unique()->comment('comment');
            $table->string('name')->index()->nullable()->comment('comment');
            $table->string('display_name')->index()->nullable()->comment('comment');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier'); 
            $table->string('r_q_c_standard_id_parent')->index()->nullable()->comment('comment');
            $table->string('a_q_l_standard_id')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            //$table->dropPrimary('id');
            //$table->primary('name');
        });
        
        Schema::table('r_q_c_standards', function($table) {
            $table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('a_q_l_standard_id', ('pk'.time().Str::uuid()->toString()))->references('id')->on('a_q_l_standards')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_q_c_standards');
    }
}
