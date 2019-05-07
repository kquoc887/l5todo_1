<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1, 'name' => 'Project1', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Project2', 'slug' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Project3', 'slug' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('projects')->insert($projects);
    }
}
