<?php

namespace Tests\Unit;

use App\Student;
use App\StudentRepository;
use Illuminate\Support\Collection;
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
        factory(\App\Student::class,5)->create();

        $studentRepo = new StudentRepository(new Student);
        $foundStudents = $studentRepo->listStudents();

        $this->assertInstanceOf(Collection::class, $foundStudents);
        $this->assertCount(5, $foundStudents->all());
    }
}
