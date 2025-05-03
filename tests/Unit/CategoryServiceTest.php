<?php

namespace Tests\Unit;

use App\Dto\AddTaskDto;
use App\Dto\CreateCategoryDto;
use App\Models\TasksCategory;
use App\Models\User;
use App\Repositories\Category\CategoryRepository;
use App\Services\Category\CategoryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Mockery as MockeryAlias;
use Tests\TestCase;

class CategoryServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_category(): void
    {
        $user = User::factory()->create();
        $categoryName = Str::random(10);

        $createCategoryDto = new CreateCategoryDto($categoryName, $user->id);

        $mockCategoryRepository = MockeryAlias::mock(CategoryRepository::class);

        $mockCategoryRepository
            ->shouldReceive('create')
            ->once()
            ->with($createCategoryDto)
            ->andReturn(true);

        $categoryService = new CategoryService($mockCategoryRepository);

        $result = $categoryService->createCategory($createCategoryDto);

        $this->assertTrue($result);
    }

    public function test_user_can_add_task_to_category(): void
    {
        $user = User::factory()->create();
        $category = TasksCategory::factory()->create([
            'user_id' => $user->id,
        ]);

        $taskName = Str::random(7);
        $description = Str::random(30);

        $addTaskDto = new AddTaskDto($category->id, $taskName, $description);

        $mockCategoryRepository = MockeryAlias::mock(CategoryRepository::class);
        $mockedCategory = MockeryAlias::mock(TasksCategory::class);

        $mockCategoryRepository
            ->shouldReceive('getCategoryById')
            ->once()
            ->with($category->id)
            ->andReturn($mockedCategory);

        $mockCategoryRepository
            ->shouldReceive('attachTask')
            ->once()
            ->with(MockeryAlias::type(AddTaskDto::class))
            ->andReturn(true);

        $categoryService = new CategoryService($mockCategoryRepository);

        $result = $categoryService->addTask($addTaskDto);
        $this->assertTrue($result);
    }
}
