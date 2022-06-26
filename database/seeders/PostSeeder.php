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
            'description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante. Urna molestie at elementum eu facilisis sed odio morbi quis. Velit scelerisque in dictum non consectetur a erat nam at. Interdum velit laoreet id donec ultrices. Vestibulum morbi blandit cursus risus at ultrices mi. Dictum varius duis at consectetur. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl suscipit adipiscing bibendum est ultricies integer quis. Penatibus et magnis dis parturient montes nascetur ridiculus. Sociis natoque penatibus et magnis dis parturient montes. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.

Dui id ornare arcu odio. Volutpat diam ut venenatis tellus in metus vulputate eu. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Tempor nec feugiat nisl pretium fusce id. Amet luctus venenatis lectus magna. Nunc scelerisque viverra mauris in aliquam. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Risus nullam eget felis eget nunc. Dolor magna eget est lorem ipsum dolor sit amet. Vulputate ut pharetra sit amet aliquam id diam maecenas. Urna nec tincidunt praesent semper feugiat nibh. Diam maecenas ultricies mi eget.

Orci dapibus ultrices in iaculis nunc sed augue. Viverra vitae congue eu consequat ac felis. Morbi tempus iaculis urna id volutpat lacus laoreet non. Massa sapien faucibus et molestie ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. In hac habitasse platea dictumst. Tristique nulla aliquet enim tortor at auctor urna nunc id. Fusce id velit ut tortor pretium viverra suspendisse potenti. Pellentesque massa placerat duis ultricies lacus sed turpis. Tincidunt lobortis feugiat vivamus at augue eget arcu. Ut enim blandit volutpat maecenas volutpat blandit. Risus commodo viverra maecenas accumsan lacus.',
            'featured'    => 0,
            'tags'        => "Laravel;PHP",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
        ]);
    }
}
