<?php

use Illuminate\Support\Collection;

class TargetService implements TargetServiceInterface
{
    public function __construct(
        private TargetRepository $targetRepository,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function index(): Collection
    {
        $targets = $this->targetRepository->index();

        return $targets;
    }
}
