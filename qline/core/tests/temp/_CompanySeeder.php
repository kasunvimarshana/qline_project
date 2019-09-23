<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\Company;

class CompanySeeder extends Seeder
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
        
        $newCompany = Company::firstOrCreate([
            'id' => 'brandix',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'brandix',
            'name' => 'brandix',
            'display_name' => 'brandix'
        ]);
        
        $newStrategicBusinessUnit = $newCompany->strategicBusinessUnits()->firstOrCreate([
            'id' => 'default',
            'is_visible' => false,
            'is_active' => false,
            'code' => 'default',
            'name' => 'default',
            'display_name' => 'default'
        ]);
        
        $newCompany->strategicBusinessUnits()->save($newStrategicBusinessUnit);
    }
}
