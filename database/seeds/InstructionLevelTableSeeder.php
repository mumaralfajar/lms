<?php

use Illuminate\Database\Seeder;
use App\Models\InstructionLevel;

class InstructionLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $is_exist = InstructionLevel::all();

        if (!$is_exist->count()) {
            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '1';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '2';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '3';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '4';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '5';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '6';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '7';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '8';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '9';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '10';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '11';
            $instruction_levels->save();

            $instruction_levels = new InstructionLevel();
            $instruction_levels->level = '12';
            $instruction_levels->save();
        }
    }
}
