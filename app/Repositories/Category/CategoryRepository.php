<?php

namespace App\Repositories\Category;

use App\Dto\AddTaskDto;
use App\Dto\CreateCategoryDto;
use App\Exceptions\CategoryException;
use App\Models\TasksCategory;
use App\Repositories\Category\Contract\CategoryRepositoryContract;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class CategoryRepository implements CategoryRepositoryContract
{

    public function __construct(
        protected TasksCategory $model
    )
    {

    }
    /**
     * @throws CategoryException
     */
    public function create(CreateCategoryDto $createCategoryDto): bool
    {
        try {
            $this->model->create($createCategoryDto->toArray());
            return true;
        } catch(ModelNotFoundException | QueryException | Exception  $e) {
            Log::error($e->getMessage());
            throw new CategoryException("Category not created");
        }
    }

    /**
     * @throws CategoryException
     */
    public function getCategoryById(int $categoryId): TasksCategory
    {
        try {
            return $this->model->findOrFail($categoryId);
        } catch(ModelNotFoundException | QueryException | Exception  $e) {
            Log::error($e->getMessage());
            throw new CategoryException("Category not found");
        }
    }

    /**
     * @throws CategoryException
     */
    public function attachTask(AddTaskDto $dto): bool
    {
        try {
            $dto->category->tasks()->create($dto->toArray());
            return true;
        } catch(ModelNotFoundException | QueryException | Exception  $e) {
            Log::error($e->getMessage());
            throw new CategoryException("Unable to add task");
        }
    }
}
