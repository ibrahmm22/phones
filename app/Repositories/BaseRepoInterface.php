<?php

namespace App\Repositories;

interface BaseRepoInterface
{
    public function findBy(string $findBy): array;
}
