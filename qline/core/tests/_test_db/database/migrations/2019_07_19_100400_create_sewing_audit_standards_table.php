<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewingAuditStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewing_audit_standards', function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            $table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(false)->nullable()->comment('comment');
            $table->string('colour')->index()->nullable()->comment('comment');
            //$table->string('slug')->index()->unique()->nullable()->comment('comment');
            $table->string('name')->index()->unique()->comment('comment');
            $table->string('display_name')->index()->nullable()->comment('comment');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier'); 
            $table->string('sewing_audit_standard_id_parent')->index()->nullable()->comment('comment');
            $table->string('a_q_l_standard_id')->index()->nullable()->comment('comment');
            //$table->softDeletes();
            
            //$table->dropPrimary('id');
            //$table->primary('name');
            $table->primary(array('name'));
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('a_q_l_standard_id')->references('name')->on('a_q_l_standards')->onUpdate('cascade');
        });
        
        DB::statement('ALTER TABLE sewing_audit_standards MODIFY COLUMN id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewing_audit_standards');
    }
}
