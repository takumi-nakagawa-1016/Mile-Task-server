<?php

use App\Models\Target;
use Illuminate\Support\Collection;

interface TargetRepositoryInterface
{
    /**
     * @return Collection<Target>
     */
    public function index(): Collection;

    public function store(): Target;

    public function show(string $id): Target;
}
