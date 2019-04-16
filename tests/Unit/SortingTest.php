<?php

namespace Tests\Unit;

use App\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SortingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {
        $Question= Question::all()->sortByDesc('updated_at');
        $totalCount = count($Question);
        $this->assertGreaterThan(0, $totalCount);
    }
}
