<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 12/8/18
 * Time: 3:16 PM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Jsdecena\Baserepo\BaseRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface
{
    public function __construct(Student $student)
    {
        $this->model = $student;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $except
     * @return Collection
     */
    public function listStudents(string $order = 'id', string $sort = 'desc', $except = []): Collection
    {
        return $this->model->orderBy($order, $sort)->get()->except($except);
    }

    /**
     * @param array $data
     * @return Student
     * @throws CreateStudentErrorException
     */
    public function createStudent(array $data): Student
    {
        try {
            return $this->create($data);
        } catch (QueryException $e) {
            throw new CreateStudentErrorException($e);
        }
    }

    public function updateStudent(array $params): Student
    {
        // TODO: Implement updateStudent() method.
    }

    public function findStudentById(int $id): Student
    {
        // TODO: Implement findStudentById() method.
    }

    public function deleteStudent(): bool
    {
        // TODO: Implement deleteStudent() method.
    }
}
