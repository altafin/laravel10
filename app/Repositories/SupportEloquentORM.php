<?php

class SupportEloquentORM implements \App\Repositories\SupportRepositoryInterface
{

    public function getAll(string $filter = null): array
    {
        // TODO: Implement getAll() method.
    }

    public function findOne(string $id): stdClass|null
    {
        // TODO: Implement findOne() method.
    }

    public function delete(string $id): void
    {
        // TODO: Implement delete() method.
    }

    public function new(\App\DTO\CreateSupportDTO $dto): stdClass
    {
        // TODO: Implement new() method.
    }

    public function update(\App\DTO\UpdateSupportDTO $dto): stdClass|null
    {
        // TODO: Implement update() method.
    }
}
