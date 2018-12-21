<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Repositories\AnswerRepositoryInterface;
use Illuminate\Http\Request;

class AnswerRepository implements AnswerRepositoryInterface
{

    public function findAllAnswersById(int $id)
    {
        $answers = Answer::select('ans_id','question_id', 'ans_content')->where('wip_id', $id)->get();
        return $answers;
    }

    public function createAnswer($answers)
    {
      
     return Answer::insert($answers);

    }
    public function editAnswer(Request $request)
    {
        $data = $request->all();
        $answer_data = json_decode($data)->answers;

        //array data
        $question_id = $answer_data->question_id;
        $wip_id = $answer_data->wip_id;
        $answer_content = $answer_data->ans_content;

        for ($i = 0; $i < 3; $i++) {
            $ans_contentDB = Answer::select('ans_content')->where('wip_id', $wip_id[i], 'question_id', $question_id[i]);
            if ($answer_content != $ans_contentDB) {
                $answer = Answer::where([
                    'question_id ' => $answer_data->questionId,
                    'wip_id' => json_decode($answer_data)->answers->wip_id,
                ])
                    ->update
                    (['ans_content' => $answer_data->ans_content,
                    'updated_at' => Carbon::now()->toDateTimeString()]);
            }
           // $answer->save();
        }

        return json(['message' => 'Update answer success']);
    }
}
