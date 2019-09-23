<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\StrategicBusinessUnit;
use App\Company;

class StrategicBusinessUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$model->hasManyModel()->save($model);
        //$model->belongsToModel()->associate($model)->save();
        
        $newStrategicBusinessUnit = StrategicBusinessUnit::firstOrCreate([
            'id' => 'bli',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'bli',
            'name' => 'bli',
            'display_name' => 'bli'
        ]);
        
        $newCompany = $newStrategicBusinessUnit->company()->firstOrCreate([
            'id' => 'default',
            'is_visible' => false,
            'is_active' => false,
            'code' => 'default',
            'name' => 'default',
            'display_name' => 'default'
        ]);
        
        $newStrategicBusinessUnit->company()->associate($newCompany)->save();
    }
}
