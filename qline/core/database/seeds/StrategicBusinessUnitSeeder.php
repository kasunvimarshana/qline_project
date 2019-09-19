<?php

use Illuminate\Database\Seeder;

use App\StrategicBusinessUnit;

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
        $newStrategicBusinessUnit = StrategicBusinesUnit::firstOrCreate([
            'id' => 'bli',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'bli',
            'name' => 'bli',
            'display_name' => 'bli'
        ]);
        
        $newCompany = $newStrategicBusinessUnit->company()->firstOrCreate([
            'id' => 'brandix',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'brandix',
            'name' => 'brandix',
            'display_name' => 'brandix'
        ]);
        
        $newStrategicBusinessUnit->company()->associate($newCompany)->save();
        
        $newDepartment = $newStrategicBusinessUnit->departments()->firstOrCreate([
            'id' => 'quality',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'quality',
            'name' => 'quality',
            'display_name' => 'quality',
        ]);
        
        $newDepartment->company()->associate($newCompany);
        $newDepartment->strategicBusinessUnit()->associate($newStrategicBusinessUnit);
        
        $newFactory = $newStrategicBusinessUnit->factories()->firstOrCreate([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);
    }
}
