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
            'title'       =>  'Livewire Bootstrap Tag Array',
            'description' =>  '<div>Voor een aan te maken post wou ik graag tags (categoriën) toe kunnen voegen.</div><div>&nbsp;</div><div>Een of meerdere tags moeten worden doorgegeven als array naar het hoofd component en vanuit daar in werkbare data worden getransformeerd. De vraag is: <em>hoe slaan we dit op?</em><br>&nbsp;</div><ul><li>Een nieuwe table maken en die key-&gt;value opstellen en dit te koppelen met posts table (via foreign -&gt; primary key koppeling)</li><li>Een andere oplossing bedenken om values te storen in dezelfde table&nbsp;</li></ul><div>&nbsp;</div><div>Ik wou het project kleinschalig houden dus ik koos voor het laatste.<br>&nbsp;</div><div>Ik ben de functies explode/implode tegengekomen, deze kon ik wellicht gebruiken voor een lange string met alle tags in te storen</div><div>&nbsp;</div><div>In de Post/Create component submit een $stringArray aangemaakt om de array van tags te storen. Tag array word geconverteerd naar string met ‘’;’’ dividers via de <strong>implode</strong> method. Deze value word opgeslagen in het model / de database.<br><br></div><div>Deze string word weer ontleed in de showall en show via een <strong>explode</strong> method.<br><br></div><div>Voor de tags wou ik graag een mooie UI display, via NPM heb ik een package gevonden genaamd bootstrap5-tags.<br><br></div><div>Package <a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">bootstrap5-tags</a> toegevoegd aan het project en toegevoegd als select option element</div>',
            'featured'    => 1,
            'tags'        => "Laravel;PHP;Bootstrap;Array;implode;explode",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],

          [
            'title'       =>  'Livewire Event Listeners',
            'description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante. Urna molestie at elementum eu facilisis sed odio morbi quis. Velit scelerisque in dictum non consectetur a erat nam at. Interdum velit laoreet id donec ultrices. Vestibulum morbi blandit cursus risus at ultrices mi. Dictum varius duis at consectetur. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl suscipit adipiscing bibendum est ultricies integer quis. Penatibus et magnis dis parturient montes nascetur ridiculus. Sociis natoque penatibus et magnis dis parturient montes. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.

Dui id ornare arcu odio. Volutpat diam ut venenatis tellus in metus vulputate eu. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Tempor nec feugiat nisl pretium fusce id. Amet luctus venenatis lectus magna. Nunc scelerisque viverra mauris in aliquam. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Risus nullam eget felis eget nunc. Dolor magna eget est lorem ipsum dolor sit amet. Vulputate ut pharetra sit amet aliquam id diam maecenas. Urna nec tincidunt praesent semper feugiat nibh. Diam maecenas ultricies mi eget.

Orci dapibus ultrices in iaculis nunc sed augue. Viverra vitae congue eu consequat ac felis. Morbi tempus iaculis urna id volutpat lacus laoreet non. Massa sapien faucibus et molestie ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. In hac habitasse platea dictumst. Tristique nulla aliquet enim tortor at auctor urna nunc id. Fusce id velit ut tortor pretium viverra suspendisse potenti. Pellentesque massa placerat duis ultricies lacus sed turpis. Tincidunt lobortis feugiat vivamus at augue eget arcu. Ut enim blandit volutpat maecenas volutpat blandit. Risus commodo viverra maecenas accumsan lacus.',
            'featured'    => 0,
            'tags'        => "Lorem ipsum",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  'Third Post',
            'description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante. Urna molestie at elementum eu facilisis sed odio morbi quis. Velit scelerisque in dictum non consectetur a erat nam at. Interdum velit laoreet id donec ultrices. Vestibulum morbi blandit cursus risus at ultrices mi. Dictum varius duis at consectetur. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl suscipit adipiscing bibendum est ultricies integer quis. Penatibus et magnis dis parturient montes nascetur ridiculus. Sociis natoque penatibus et magnis dis parturient montes. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.

Dui id ornare arcu odio. Volutpat diam ut venenatis tellus in metus vulputate eu. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Tempor nec feugiat nisl pretium fusce id. Amet luctus venenatis lectus magna. Nunc scelerisque viverra mauris in aliquam. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Risus nullam eget felis eget nunc. Dolor magna eget est lorem ipsum dolor sit amet. Vulputate ut pharetra sit amet aliquam id diam maecenas. Urna nec tincidunt praesent semper feugiat nibh. Diam maecenas ultricies mi eget.

Orci dapibus ultrices in iaculis nunc sed augue. Viverra vitae congue eu consequat ac felis. Morbi tempus iaculis urna id volutpat lacus laoreet non. Massa sapien faucibus et molestie ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. In hac habitasse platea dictumst. Tristique nulla aliquet enim tortor at auctor urna nunc id. Fusce id velit ut tortor pretium viverra suspendisse potenti. Pellentesque massa placerat duis ultricies lacus sed turpis. Tincidunt lobortis feugiat vivamus at augue eget arcu. Ut enim blandit volutpat maecenas volutpat blandit. Risus commodo viverra maecenas accumsan lacus.',
            'featured'    => 0,
            'tags'        => "Lorem ipsum",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '4th Post',
            'description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante. Urna molestie at elementum eu facilisis sed odio morbi quis. Velit scelerisque in dictum non consectetur a erat nam at. Interdum velit laoreet id donec ultrices. Vestibulum morbi blandit cursus risus at ultrices mi. Dictum varius duis at consectetur. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl suscipit adipiscing bibendum est ultricies integer quis. Penatibus et magnis dis parturient montes nascetur ridiculus. Sociis natoque penatibus et magnis dis parturient montes. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.

Dui id ornare arcu odio. Volutpat diam ut venenatis tellus in metus vulputate eu. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Tempor nec feugiat nisl pretium fusce id. Amet luctus venenatis lectus magna. Nunc scelerisque viverra mauris in aliquam. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Risus nullam eget felis eget nunc. Dolor magna eget est lorem ipsum dolor sit amet. Vulputate ut pharetra sit amet aliquam id diam maecenas. Urna nec tincidunt praesent semper feugiat nibh. Diam maecenas ultricies mi eget.

Orci dapibus ultrices in iaculis nunc sed augue. Viverra vitae congue eu consequat ac felis. Morbi tempus iaculis urna id volutpat lacus laoreet non. Massa sapien faucibus et molestie ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. In hac habitasse platea dictumst. Tristique nulla aliquet enim tortor at auctor urna nunc id. Fusce id velit ut tortor pretium viverra suspendisse potenti. Pellentesque massa placerat duis ultricies lacus sed turpis. Tincidunt lobortis feugiat vivamus at augue eget arcu. Ut enim blandit volutpat maecenas volutpat blandit. Risus commodo viverra maecenas accumsan lacus.',
            'featured'    => 0,
            'tags'        => "MySQL;PHP;Lorem ipsum",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '5th Post',
            'description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante. Urna molestie at elementum eu facilisis sed odio morbi quis. Velit scelerisque in dictum non consectetur a erat nam at. Interdum velit laoreet id donec ultrices. Vestibulum morbi blandit cursus risus at ultrices mi. Dictum varius duis at consectetur. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl suscipit adipiscing bibendum est ultricies integer quis. Penatibus et magnis dis parturient montes nascetur ridiculus. Sociis natoque penatibus et magnis dis parturient montes. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.

Dui id ornare arcu odio. Volutpat diam ut venenatis tellus in metus vulputate eu. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Tempor nec feugiat nisl pretium fusce id. Amet luctus venenatis lectus magna. Nunc scelerisque viverra mauris in aliquam. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Risus nullam eget felis eget nunc. Dolor magna eget est lorem ipsum dolor sit amet. Vulputate ut pharetra sit amet aliquam id diam maecenas. Urna nec tincidunt praesent semper feugiat nibh. Diam maecenas ultricies mi eget.

Orci dapibus ultrices in iaculis nunc sed augue. Viverra vitae congue eu consequat ac felis. Morbi tempus iaculis urna id volutpat lacus laoreet non. Massa sapien faucibus et molestie ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. In hac habitasse platea dictumst. Tristique nulla aliquet enim tortor at auctor urna nunc id. Fusce id velit ut tortor pretium viverra suspendisse potenti. Pellentesque massa placerat duis ultricies lacus sed turpis. Tincidunt lobortis feugiat vivamus at augue eget arcu. Ut enim blandit volutpat maecenas volutpat blandit. Risus commodo viverra maecenas accumsan lacus.',
            'featured'    => 0,
            'tags'        => "MySQL;PHP;Lorem ipsum",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
          [
            'title'       =>  '6th Post',
            'description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id aliquet risus feugiat in ante. Urna molestie at elementum eu facilisis sed odio morbi quis. Velit scelerisque in dictum non consectetur a erat nam at. Interdum velit laoreet id donec ultrices. Vestibulum morbi blandit cursus risus at ultrices mi. Dictum varius duis at consectetur. Viverra justo nec ultrices dui sapien eget mi proin sed. Nisl suscipit adipiscing bibendum est ultricies integer quis. Penatibus et magnis dis parturient montes nascetur ridiculus. Sociis natoque penatibus et magnis dis parturient montes. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.

Dui id ornare arcu odio. Volutpat diam ut venenatis tellus in metus vulputate eu. In fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Tempor nec feugiat nisl pretium fusce id. Amet luctus venenatis lectus magna. Nunc scelerisque viverra mauris in aliquam. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Risus nullam eget felis eget nunc. Dolor magna eget est lorem ipsum dolor sit amet. Vulputate ut pharetra sit amet aliquam id diam maecenas. Urna nec tincidunt praesent semper feugiat nibh. Diam maecenas ultricies mi eget.

Orci dapibus ultrices in iaculis nunc sed augue. Viverra vitae congue eu consequat ac felis. Morbi tempus iaculis urna id volutpat lacus laoreet non. Massa sapien faucibus et molestie ac. Mattis aliquam faucibus purus in massa tempor nec feugiat nisl. In hac habitasse platea dictumst. Tristique nulla aliquet enim tortor at auctor urna nunc id. Fusce id velit ut tortor pretium viverra suspendisse potenti. Pellentesque massa placerat duis ultricies lacus sed turpis. Tincidunt lobortis feugiat vivamus at augue eget arcu. Ut enim blandit volutpat maecenas volutpat blandit. Risus commodo viverra maecenas accumsan lacus.',
            'featured'    => 0,
            'tags'        => "MySQL;PHP;Lorem ipsum",
            'created_at'  =>  now(),
            'updated_at'  =>  now(),
          ],
        ]);
    }
}
