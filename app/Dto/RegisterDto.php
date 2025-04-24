<?php

namespace App\Dto;

use App\Dto\Contract\DtoContract;

final class RegisterDto implements DtoContract
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    )
    {

    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}
