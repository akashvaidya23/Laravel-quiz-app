<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                "sector" => 3,
                'name' => 'How many bits make a byte?'
            ],
            [
                "sector" => 3,
                'name' => 'The first search engine on the internet is'
            ],
            [
                "sector" => 3,
                'name' => 'The number of bits used by IPv6 address is'
            ],
            [
                "sector" => 3,
                'name' => 'The first web browser invented in 1990 was'
            ],
            [
                "sector" => 3,
                'name' => 'Which technology is used to record cryptocurrency transactions?'
            ],
            [
                "sector" => 3,
                'name' => 'One of the advantages of information technology is'
            ],
            [
                "sector" => 3,
                'name' => 'The first computer virus was known as'
            ],
            [
                "sector" => 3,
                'name' => 'What technology is used to make telephone calls over the Internet possible?'
            ],
            [
                "sector" => 3,
                'name' => 'What is the full form of (CPU)?'
            ],
            [
                "sector" => 3,
                'name' => 'The process of starting or restarting a computer is called: '
            ],
            [
                "sector" => 3,
                'name' => 'The other name for a Hard disk is: '
            ],
            [
                "sector" => 3,
                'name' => "Which component is often referred to as the 'brain' of the motherboard?"
            ],
            [
                "sector" => 3,
                'name' => 'Which of the items is an input device?'
            ],
            [
                "sector" => 3,
                'name' => 'The System unit is referred to as the:'
            ],
            [
                "sector" => 3,
                'name' => 'The largest key on the Keyboard is'
            ],

            [
                "sector"=>2,
                'name'=>'The initial stage of the supply chain process is the _____________.'
            ],
            [
                "sector"=>2,
                'name'=>'The term supply chain management was first coined by ______.'
            ],
            [
                "sector"=>2,
                'name'=>'In supply chain management, after planning, the next step involves ______________.'
            ],
            [
                "sector"=>2,
                'name'=>'In Supply Chain Management, ATP stands for _________.'
            ],
            [
                "sector"=>2,
                'name'=>'The purpose of supply chain management is to_______.'
            ],
            [
                "sector"=>2,
                'name'=>'________is the primary activity of supply chain management.'
            ],
            [
                "sector"=>2,
                'name'=>'Another important purpose of supply chain management is to ___________.'
            ],
            [
                "sector"=>2,
                'name'=>'________is mainly deals with all activities associated with the flow and transformation and information of goods from the stage of raw material to the end user i.e. consumption.'
            ],
            [
                "sector"=>2,
                'name'=>'In supply chain management, Inspection, scrap and repair are examples of ________.'
            ],
            [
                "sector"=>2,
                'name'=>'____________ is a Japanese term meaning continuous improvement.'
            ],
            [
                "sector"=>2,
                'name'=>'EOQ stands for ____'
            ],
            [
                "sector"=>2,
                'name'=>'Organisations or companies manage their supply chains through _______.'
            ],
            [
                "sector"=>2,
                'name'=>'The concept and philosophy of supply chain management evolved or emerged in _______'
            ],
            [
                "sector"=>2,
                'name'=>'Full form of MRP in operations and SCM is ___________'
            ],
            [
                "sector"=>2,
                'name'=>'The concept of supply chain management originated in ________________ discipline.'
            ],
            
            [
                "sector"=>1,
                'name'=>'Which of the following public sector banks has the largest number of branches in foreign countries?'
            ],
            [
                "sector"=>1,
                'name'=>'When the Reserve Bank says that the Rupee is over-valued, it means?'
            ],
            [
                "sector"=>1,
                'name'=>'Which of the following agencies/ organizations has proposed to impose Global Taxes on all the banks?'
            ],
            [
                "sector"=>1,
                'name'=>'Which of the following schemes of the Govt. of India is associated with the health sector?'
            ],
            [
                "sector"=>1,
                'name'=>'What is the contribution of the agriculture and allied activities in the total GDP of the country?'
            ],
            [
                "sector"=>1,
                'name'=>'Which of the following is not a nationalised bank?'
            ],
            [
                "sector"=>1,
                'name'=>'Which brand/company uses the ad-line ‘We Know India Better’?'
            ],
            [
                "sector"=>1,
                'name'=>'Which of the following is not a financial regulator?'
            ],
            [
                "sector"=>1,
                'name'=>'Which among the following are the banks with the largest ATM network in the country?'
            ],
            [
                "sector"=>1,
                'name'=>'Mobile banking is set to get a boost from IMPS, which stands for'
            ],
            [
                "sector"=>1,
                'name'=>'Which of the following is not correctly matched?'
            ],
            [
                "sector"=>1,
                'name'=>'Which of the India’s public sector bank has acquired two third stake in JSC Dena Bank Kazakhstan?'
            ],
            [
                "sector"=>1,
                'name'=>'Which among the following are oldest financial institutions in India?'
            ],
            [
                "sector"=>1,
                'name'=>'In which year SIDBI was established?'
            ],
            [
                "sector"=>1,
                'name'=>'Which among the following is the first Development Financial Institution in the country to cater to the long-term finance needs of the industrial sector?'
            ],

            [
                "sector"=>4,
                "name"=>"What does hotel management primarily focus on?"
            ],
            [
                "sector"=>4,
                "name"=>"Which department is responsible for welcoming guests, handling check-ins, and check-outs?"
            ],
            [
                "sector"=>4,
                "name"=>"What is the term for the process of setting competitive room rates to maximize revenue?"
            ],
            [
                "sector"=>4,
                "name"=>"Which of the following is NOT a responsibility of hotel management?"
            ],
            [
                "sector"=>4,
                "name"=>"What is the main goal of hotel marketing?"
            ],
            [
                "sector"=>4,
                "name"=>"Which department is responsible for preparing and serving food and beverages?"
            ],
            [
                "sector"=>4,
                "name"=>"What is the term for the practice of analyzing guest data to identify trends and preferences?"
            ],
            [
                "sector"=>4,
                "name"=>"What does ADR stand for in hotel management?"
            ],
            [
                "sector"=>4,
                "name"=>"Which of the following is an essential skill for hotel managers?"
            ],
            [
                "sector"=>4,
                "name"=>"What does RevPAR stand for in hotel management?"
            ],
            [
                "sector"=>4,
                "name"=>"What type of hotel offers basic accommodation and limited services at a budget-friendly price?"
            ],
            [
                "sector"=>4,
                "name"=>"Which department is responsible for cleaning and maintaining guest rooms?"
            ],
            [
                "sector"=>4,
                "name"=>"What is the term for the practice of offering personalized services to VIP guests?"
            ],
            [
                "sector"=>4,
                "name"=>"What is the primary role of a hotel’s General Manager (GM)?"
            ],
            [
                "sector"=>4,
                "name"=>"What does OTA stand for in the hotel industry?"
            ],
        ];

        foreach($questions as $question){
            Question::create([
                'sectors_id'=>$question['sector'],
                'name'=>$question['name']
            ]);
        }
    }
}