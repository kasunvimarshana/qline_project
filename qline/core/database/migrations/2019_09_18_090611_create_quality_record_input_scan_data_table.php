<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateQualityRecordInputScanDataTable extends Migration
{
    protected $table_name_1 = "quality_record_input_scan_data";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name_1, function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            //$table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            //$table->dateTime('date_time')->default('CURRENT_TIMESTAMP')->nullable()->change();
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('pk')->default(0)->nullable()->comment('comment');
            $table->boolean('is_visible')->default(false)->nullable()->comment('comment');//->index()
            $table->boolean('is_active')->default(false)->nullable()->comment('comment');//->index()
            $table->timestamp('time_create')->nullable()->comment('comment');//->index()
            $table->string('code')->nullable()->comment('comment');//->index()
            $table->double('count_data')->nullable()->default(0)->comment('comment');//->index()
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
            //$table->text('description')->default(null)->nullable()->comment('comment'); 
            //$table->morphs('scannable');
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            $table->foreign('company_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('companies')->onUpdate('cascade');
            $table->foreign('strategic_business_unit_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('strategic_business_units')->onUpdate('cascade');
            $table->foreign('factory_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('factories')->onUpdate('cascade');
            $table->foreign('line_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('lines')->onUpdate('cascade');
            $table->foreign('customer_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('customers')->onUpdate('cascade');
            $table->foreign('style_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('styles')->onUpdate('cascade');
            $table->foreign('colour_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('colours')->onUpdate('cascade');
            //$table->foreign('export_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('exports')->onUpdate('cascade');
            $table->foreign('user_id_create', ('fk'.time().Str::uuid()->toString()))->references('id')->on('users')->onUpdate('cascade');
            $table->index(array('is_visible'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('is_active'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('time_create'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('code'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('count_data'), ('index'.time().Str::uuid()->toString()));
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
        
        Schema::table($this->table_name_1, function($table) {
            //if (Schema::hasTable('table_name')){}
            if ((Schema::hasColumn($this->table_name_1, 'id')) && (Schema::hasColumn($this->table_name_1, 'pk'))){
                //DB::statement("ALTER TABLE {$this->table_name_1} MODIFY COLUMN pk INTEGER NOT NULL UNIQUE AUTO_INCREMENT;");
                //DB::statement("UPDATE {$this->table_name} SET id = pk");
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table_name_1);
    }
}
