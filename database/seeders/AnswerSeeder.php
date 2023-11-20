<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                "question_id"=>1,
                "option"=>"16 Bytes",
                "correct"=>0
            ],
            [
                "question_id"=>1,
                "option"=>"8 Bytes",
                "correct"=>1
            ],
            [
                "question_id"=>1,
                "option"=>"24 Bytes",
                "correct"=>0
            ],
            [
                "question_id"=>1,
                "option"=>"12 Bytes",
                "correct"=>0
            ],

            [
                "question_id"=>2,
                "option"=>"Archie",
                "correct"=>1
            ],
            [
                "question_id"=>2,
                "option"=>"Google",
                "correct"=>0
            ],
            [
                "question_id"=>2,
                "option"=>"Bing",
                "correct"=>0
            ],
            [
                "question_id"=>2,
                "option"=>"Yahoo",
                "correct"=>0
            ],

            [
                "question_id"=>3,
                "option"=>"16",
                "correct"=>0
            ],
            [
                "question_id"=>3,
                "option"=>"32",
                "correct"=>0
            ],
            [
                "question_id"=>3,
                "option"=>"64",
                "correct"=>0
            ],
            [
                "question_id"=>3,
                "option"=>"128",
                "correct"=>1
            ],

            [
                "question_id"=>4,
                "option"=>"WorldWideWeb",
                "correct"=>1
            ],
            [
                "question_id"=>4,
                "option"=>"Mosaic",
                "correct"=>0
            ],
            [
                "question_id"=>4,
                "option"=>"Nexus",
                "correct"=>0
            ],
            [
                "question_id"=>4,
                "option"=>"Nexus",
                "correct"=>0
            ],

            [
                "question_id"=>5,
                "option"=>"Mining",
                "correct"=>0
            ],
            [
                "question_id"=>5,
                "option"=>"Digital Wallet",
                "correct"=>0
            ],
            [
                "question_id"=>5,
                "option"=>"Block Chain",
                "correct"=>0
            ],
            [
                "question_id"=>5,
                "option"=>"Token",
                "correct"=>1
            ],

            [
                "question_id"=>6,
                "option"=>"StreamLine Communication",
                "correct"=>1
            ],
            [
                "question_id"=>6,
                "option"=>"Easy to handle",
                "correct"=>0
            ],
            [
                "question_id"=>6,
                "option"=>"Both a and b",
                "correct"=>0
            ],
            [
                "question_id"=>6,
                "option"=>"None",
                "correct"=>0
            ],

            [
                "question_id"=>7,
                "option"=>"Rabbit",
                "correct"=>0
            ],
            [
                "question_id"=>7,
                "option"=>"Elk Cloner",
                "correct"=>0
            ],
            [
                "question_id"=>7,
                "option"=>"SCA Virus",
                "correct"=>0
            ],
            [
                "question_id"=>7,
                "option"=>"Creeper Program",
                "correct"=>1
            ],

            [
                "question_id"=>8,
                "option"=>"VoIP",
                "correct"=>1
            ],
            [
                "question_id"=>8,
                "option"=>"Blutooth",
                "correct"=>0
            ],
            [
                "question_id"=>8,
                "option"=>"Ethernet",
                "correct"=>0
            ],
            [
                "question_id"=>8,
                "option"=>"All of the above",
                "correct"=>0
            ],

            [
                "question_id"=>9,
                "option"=>"Central Processing Unit",
                "correct"=>1
            ],
            [
                "question_id"=>9,
                "option"=>"Critical Processing Unit",
                "correct"=>0
            ],
            [
                "question_id"=>9,
                "option"=>"Crucial Processing Unit",
                "correct"=>0
            ],
            [
                "question_id"=>9,
                "option"=>"Central Printing Unit",
                "correct"=>0
            ],

            [
                "question_id"=>10,
                "option"=>"Start Up Point",
                "correct"=>0
            ],
            [
                "question_id"=>10,
                "option"=>"Booting",
                "correct"=>1
            ],
            [
                "question_id"=>10,
                "option"=>"Connecting",
                "correct"=>0
            ],
            [
                "question_id"=>10,
                "option"=>"Resetting",
                "correct"=>0
            ],

            [
                "question_id"=>11,
                "option"=>"Compact Disc",
                "correct"=>0
            ],
            [
                "question_id"=>11,
                "option"=>"Fixed Disk",
                "correct"=>0
            ],
            [
                "question_id"=>11,
                "option"=>"Hard Drive Disk",
                "correct"=>1
            ],
            [
                "question_id"=>11,
                "option"=>"Floppy Disk",
                "correct"=>0
            ],

            [
                "question_id"=>12,
                "option"=>"Processor",
                "correct"=>1
            ],
            [
                "question_id"=>12,
                "option"=>"Bios",
                "correct"=>0
            ],
            [
                "question_id"=>12,
                "option"=>"Computer Chip",
                "correct"=>0
            ],
            [
                "question_id"=>12,
                "option"=>"Transistor",
                "correct"=>0
            ],

            [
                "question_id"=>13,
                "option"=>"Computer Monitor",
                "correct"=>0
            ],
            [
                "question_id"=>13,
                "option"=>"Keyboard",
                "correct"=>1
            ],
            [
                "question_id"=>13,
                "option"=>"Display Board",
                "correct"=>0
            ],
            [
                "question_id"=>13,
                "option"=>"Overhead Projector",
                "correct"=>0
            ],

            [
                "question_id"=>14,
                "option"=>"CPU",
                "correct"=>0
            ],
            [
                "question_id"=>14,
                "option"=>"The Heart of the computer",
                "correct"=>1
            ],
            [
                "question_id"=>14,
                "option"=>"The Hard Drive",
                "correct"=>0
            ],
            [
                "question_id"=>14,
                "option"=>"System Software",
                "correct"=>0
            ],

            [
                "question_id"=>15,
                "option"=>"Shift",
                "correct"=>0
            ],
            [
                "question_id"=>15,
                "option"=>"Space Bar",
                "correct"=>1
            ],
            [
                "question_id"=>15,
                "option"=>"Escape",
                "correct"=>0
            ],
            [
                "question_id"=>15,
                "option"=>"Tab",
                "correct"=>0
            ],
        ];

        foreach($options as $option){
            Option::create([
                "question_id"=>$option['question_id'],
                "option"=>$option['option'],
                "correct"=>$option['correct']
            ]);
        }
    }
}
