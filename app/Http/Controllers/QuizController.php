<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use App\Models\sector;
use App\Models\Question;
use App\Models\User_answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function endQuiz($points)
    {
        $sector_id = Session::get("sector_id");
        $user_name = Session::get("user_name");
        $questions_count = Question::where("sectors_id",$sector_id)->count();
        return view("result",compact("points","questions_count","user_name"));
    }

    public function addScore(Request $request)
    {
        User_answer::create([
            "user_id" => $request->user_id,
            "question_id" => $request->question_id,
            "answer_id" => $request->answer_id,
            "is_correct" => $request->is_correct,
            "score" => $request->question_score,
        ]);
    }
}
