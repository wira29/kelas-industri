<?php

namespace App\Services;

use App\Http\Requests\EventRequest;
use App\Repositories\EventRepository;

class EventService
{
    private EventRepository $repository;

    public function __construct(EventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handleCreate(EventRequest $request): mixed {
        $data = $request->validated();

        $data['photo'] = $request->file('photo')->store('event', 'public');
        return $this->repository->store($data);
    }
    public function handleUpdate($id, EventRequest $request): mixed {
        $data = $request->validated();
        return $this->repository->update($id, $data);
    }
    public function handleDelete(int $id): mixed {
        return $this->repository->destroy($id);
    }
    public function handleGetPaginate(): mixed {
        return $this->repository->get_paginate(6);
    }
}
