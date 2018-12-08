<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 12/8/18
 * Time: 3:13 PM
 */
namespace App;

use Jsdecena\Baserepo\BaseRepositoryInterface;

use Illuminate\Support\Collection;

interface StudentRepositoryInterface extends BaseRepositoryInterface
{
    public function listStudents(string $order = 'id', string $sort = 'desc', $except = []) : Collection;

    public function createStudent(array $params) : Student;

    public function updateStudent(array $params) : Student;

    public function findStudentById(int $id) : Student;

    public function deleteStudent() : bool;

}
