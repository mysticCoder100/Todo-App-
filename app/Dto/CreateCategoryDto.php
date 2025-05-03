<?php

namespace App\Dto;

use App\Dto\Contract\DtoContract;

final class CreateCategoryDto implements DtoContract
{
    public function __construct(
        public string $name,
        public ?int $userId,
    )
    {

    }

    public function toArray(): array
    {
        $array = [
            'name' => $this->name,
        ];

        if ($this->userId) {
            $array['user_id'] = $this->userId;
        }

        return $array;
    }

    public function injectUserId(int $userId): self
    {
        return new self(
            $this->name,
            $userId
        );
    }
}
