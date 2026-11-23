<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LookupSeeder extends Seeder
{
    public function run(): void
    {
        if (DB::table('class_levels')->exists()) { return; }

        $class = [];
        foreach (range(1, 12) as $n) {
            $class[$n] = DB::table('class_levels')->insertGetId(['name' => "Class $n", 'slug' => "class-$n",
                'group' => 'school', 'has_streams' => $n >= 11, 'sort' => $n]);
        }
        $college = DB::table('class_levels')->insertGetId(['name' => 'College', 'slug' => 'college', 'group' => 'college', 'has_streams' => false, 'sort' => 13]);
        $stream = [];
        foreach (['Science', 'Commerce', 'Arts'] as $s) { $stream[$s] = DB::table('streams')->insertGetId(['name' => $s]); }
        foreach (['CBSE', 'ICSE', 'State Board'] as $b) { DB::table('boards')->insert(['name' => $b]); }

        $ids = [];
        $link = function (string $name, int $classId, ?int $streamId = null, string $group = 'school') use (&$ids) {
            if (! isset($ids[$name])) {
                $ids[$name] = DB::table('subjects')->insertGetId(['name' => $name, 'slug' => Str::slug($name), 'group' => $group, 'sort' => count($ids) + 1]);
            }
            DB::table('subject_class')->insert(['subject_id' => $ids[$name], 'class_level_id' => $classId, 'stream_id' => $streamId]);
        };

        foreach (range(1, 5) as $n) { foreach (['English', 'Maths', 'EVS', 'Hindi', 'Marathi'] as $s) { $link($s, $class[$n]); } }
        foreach (range(6, 10) as $n) { foreach (['English', 'Maths', 'Science', 'Social Science', 'Hindi', 'Marathi'] as $s) { $link($s, $class[$n]); } }
        $senior = ['Science' => ['Physics', 'Chemistry', 'Maths', 'Biology', 'English', 'Computer Science'],
            'Commerce' => ['Accountancy', 'Business Studies', 'Economics', 'Maths', 'English'],
            'Arts' => ['History', 'Political Science', 'Geography', 'Economics', 'English']];
        foreach ([11, 12] as $n) { foreach ($senior as $st => $subjects) { foreach ($subjects as $s) { $link($s, $class[$n], $stream[$st]); } } }
        foreach (['Engineering Mathematics', 'Data Structures and Algorithms', 'DBMS', 'Programming', 'Physics', 'Accounting', 'Economics', 'English Communication'] as $s) {
            $link($s, $college, null, 'college');
        }

        foreach (['Vashi', 'Nerul', 'Belapur CBD', 'Kharghar', 'Airoli', 'Panvel', 'Seawoods', 'Kopar Khairane', 'Ghansoli', 'Turbhe', 'Sanpada', 'Ulwe'] as $l) {
            DB::table('localities')->insert(['name' => $l, 'slug' => Str::slug($l)]);
        }
    }
}
