<?php

namespace  App\Services;

use stdClass;

class SupportService
{
    protected $repository;
    public function __construct(protected SupportService $service)
    {
    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function getOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(string $subject, string $status, string $body): stdClass
    {
        return $this->repository->new($subject, $status, $body);
    }

    public function update(string $subject, string $status, string $body): stdClass|null
    {
        return $this->repository->update($subject, $status, $body);
    }

    public function delete(): void
    {
        $this->repository->delete();
    }
}
