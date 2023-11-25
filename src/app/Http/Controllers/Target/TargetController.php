<?php

namespace App\Http\Controllers\Target;

use App\Http\Controllers\Controller;
use TargetService;

class TargetController extends Controller
{
    public function __construct(
        private TargetService $targetService,
    ) {
    }

    public function index()
    {
        $targets = $this->targetService->index();

        return $targets;
    }
}
