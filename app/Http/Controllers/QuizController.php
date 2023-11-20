<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use App\Models\sector;
use App\Models\Question;
use App\Models\User_answer;
use App\Models\Quiz_attempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quiz $quiz)
    {
        //
    }

    public function select_sector()
    {
        $sectors = sector::select('id','name')
            ->get();
        return view('select_sector',compact('sectors'));
    }

    public function details_form($id)
    {
        Session::put("sector_id",$id);
        return view("details-form",compact("id"));
    }

    public function choose_game()
    {
        return view('choose-game');
    }

    public function start_quiz($id)
    {
        $questions = Question::with(['options'=> function ($query) {
                // $query->select("id");
            }])
            ->select('questions.id','questions.name as question')
            ->where("sectors_id",$id)
            ->get();

        return view("quiz",compact("questions"));
    }

    public function endQuiz()
    {
        $sector_id = Session::get("sector_id");
        $user_name = Session::get("user_name");
        $user_id = Session::get("user_id");
        $questions_count = Question::where("sectors_id",$sector_id)
            ->count();
        $points = User_answer::where("user_id",$user_id)
            ->where("is_correct",1)
            ->count();
        
        $unique_string = $user_name . $user_id . $points;
        $voucher_id = Hash::make($unique_string);
        $quiz_attempt = Session::get("quiz_attempt");

        Quiz_attempt::find($quiz_attempt)->update([
            "voucher_code" => $voucher_id
        ]);

        if($points>0 && $points<6){
            $voucher_amount = 1000;
        } else if($points>5 && $points<11){
            $voucher_amount = 2500;
        } else{
            $voucher_amount = 5000;
        }

        return view("result",compact("points","questions_count","user_name","voucher_amount","voucher_id"));
    }

    public function addScore(Request $request)
    {
        // $unique_string = $user_name . $user_id . $points;
        // $voucher_id = Hash::make($unique_string);
        $quiz_attempt = Session::get("quiz_attempt");
        User_answer::create([
            "user_id" => $request->user_id,
            "quiz_attempt_id" => $quiz_attempt,
            "question_id" => $request->question_id,
            "answer_id" => $request->answer_id,
            "is_correct" => $request->is_correct,
            "score" => $request->question_score,
        ]);
    }
}
