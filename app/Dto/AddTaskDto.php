<?php

namespace App\Dto;

use App\Dto\Contract\DtoContract;
use App\Enums\TaskPriorities;
use App\Models\TasksCategory;

final class AddTaskDto implements DtoContract
{

    public function __construct(
        public int $category_id,
        public string $name,
        public ?string $description = null,
        public ?TaskPriorities $priority = TaskPriorities::Medium,
        public ?string $due_date = null,
        public ?TasksCategory $category = null,
    ){}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
        ];
    }

    public function injectTaskCategory(TasksCategory $category): self
    {
        return new self(
            $this->category_id,
            $this->name,
            $this->description,
            $this->priority,
            $this->due_date,
            $category
        );
    }
}
