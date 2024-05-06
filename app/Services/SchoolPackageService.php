<?php

namespace App\Services;

use App\Models\SchoolPackage;
use Illuminate\Http\Request;
use App\Repositories\SchoolPackageRepository;

class SchoolPackageService
{

    private SchoolPackageRepository $repository;

    public function __construct(SchoolPackageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handleGetAll()
    {
        return $this->repository->getAll();
    }
    public function handleCreate(Request $request)
    {
        $this->repository->create($request->all());
    }
    public function handleUpdate(Request $request, $id)
    {
        $this->repository->update($id, $request->all());
    }
    public function handleDelete(SchoolPackage $schoolPackage) : bool
    {
        return $this->repository->destroy($schoolPackage->id);
    }

    public function handleChangeStatus(Request $request, $id)
    {
        $this->repository->update($id, $request->all());
    }
}
