<?php

namespace App\Services\Category;

use App\Dto\AddTaskDto;
use App\Dto\CreateCategoryDto;
use App\Repositories\Category\Contract\CategoryRepositoryContract;
use App\Services\Category\Contract\CategoryServiceContract;

class CategoryService implements CategoryServiceContract
{
    public function __construct(
        protected CategoryRepositoryContract $categoryRepository
    )
    {

    }
    public function createCategory(CreateCategoryDto $createCategoryDto): bool
    {
        return $this->categoryRepository->create($createCategoryDto);
    }

    public function addTask(AddTaskDto $dto):bool
    {
        $category = $this->categoryRepository->getCategoryById($dto->category_id);
        $dto = $dto->injectTaskCategory($category);
        return $this->categoryRepository->attachTask($dto);
    }
}
