<?php

namespace App\Services\Category\Contract;

use App\Dto\AddTaskDto;
use App\Dto\CreateCategoryDto;
use App\Models\Task;

interface CategoryServiceContract
{
    public function createCategory(CreateCategoryDto $createCategoryDto): bool;

    public function addTask(AddTaskDto $dto): bool;
}
