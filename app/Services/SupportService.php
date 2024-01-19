<?php

namespace  App\Services;

use App\DTO\CreateSupportDTO;
use stdClass;

class SupportService
{
    protected $repository;
    public function __construct() {}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function getOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
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
