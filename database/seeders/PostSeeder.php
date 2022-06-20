<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
          [
            'title'       =>  'First Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  'Second Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  'Third Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '4th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '5th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '6th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '7th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '8th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '9th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '10th Post',
            'description' =>  'Maxime quasi similique voluptas nam nulla quia. At non blanditiis dolores rerum sit. Iusto quod eum itaque. Maxime voluptas blanditiis nobis itaque nihil.… ',
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
        ]);
    }
}
