<?php

namespace App\Services;

use App\Http\Requests\StudentRequest;
use App\Models\User;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;

class StudentService
{
    private StudentRepository $repository;
    private UserRepository $userRepository;

    public function __construct(StudentRepository $repository, UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
    }

    /**
     * handle get by classroom
     *
     * @param string $classroomId
     * @return mixed
     */
    public function handleGetByClassroom(string $classroomId): mixed
    {
        return $this->repository->get_by_classroom($classroomId);
    }

    /**
     * store school year
     *
     * @param StudentRequest $request
     * @return void
     */
    public function handleCreate(StudentRequest $request): void
    {
        $data = $request->validated();
        $data['password'] = bcrypt('password');

        $user = $this->userRepository->store($data);
        $user->assignRole('student');

        $data = [
            'student_id' => $user->id,
            'classroom_id' => $request->classroom_id
        ];

        $this->repository->store($data);
    }

    /**
     * update school year
     *
     * @param StudentRequest $request
     * @param User $student
     * @return void
     */
    public function handleUpdate(StudentRequest $request, User $student): void
    {
        $data = $request->validated();

        $this->userRepository->update($student->id, $data);
    }

    /**
     * handle delete school year
     *
     * @param User $student
     * @return bool
     */
    public function handleDelete(User $student): bool
    {
        return $this->userRepository->destroy($student->id);
    }
}