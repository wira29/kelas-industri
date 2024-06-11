<?php

namespace App\Services;

use App\Repositories\QuestionBankRepository;

class QuestionBankService
{
    private QuestionBankRepository $repository;

    public function __construct(QuestionBankRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * handle delete task
     *
     * @param string $id
     * @return bool
     */
    public function handleDelete(string $id): bool
    {
        return $this->repository->destroy($id);
    }
}
