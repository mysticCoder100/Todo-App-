<?php

namespace App\Repositories\Category\Contract;

use App\Dto\AddTaskDto;
use App\Dto\CreateCategoryDto;
use App\Models\TasksCategory;

interface CategoryRepositoryContract
{
    public function create(CreateCategoryDto $createCategoryDto): bool;

    public function getCategoryById(int $categoryId): TasksCategory;

    public function attachTask(AddTaskDto $dto): bool;
}
