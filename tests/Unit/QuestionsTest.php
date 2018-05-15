<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Question;

class QuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestionsCount()
    {
        $question = Question::all();
        $this-> assertEquals(50,count($question));
    }
    public function testQuestionType()
    {
        $question = Question::inRandomOrder()->first();
       // dd($question->type);
        //$this-> assertContains("public",["public","private","protected"]);
        $this->assertContains($question->type,["Public","Private","Protected"]);
    }
}
