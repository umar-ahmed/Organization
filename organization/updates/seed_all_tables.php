<?php namespace UMAR\Organization\Updates;

use Schema;
use October\Rain\Database\Updates\Seeder;
use UMAR\Organization\Models\Employee;
use UMAR\Organization\Models\Role;
use UMAR\Organization\Models\Program;
use UMAR\Organization\Models\Testimonial;


class SeedAllTables extends Seeder {
    
    public function run() {
        
        Role::create(['name' => 'President']);
        Role::create(['name' => 'Vice President']);
        Role::create(['name' => 'Treasurer']);
        Role::create(['name' => 'Secretary']);
        
        Program::create(['name' => 'Kids Court',
                         'description' => 'Only for kids.']);
        Program::create(['name' => 'Adults',
                         'description' => 'Only for adults.']);
        
    }



}
