<?php

namespace Tests\Feature;

use App\Student;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_can_list_students()
    {
        $student = factory(Student::class)->create();

        $this->get(route("students.index"))
            ->assertOk()
            ->assertSeeText("Students")
            ->assertSee(htmlentities($student->name, ENT_QUOTES));

    }
}
