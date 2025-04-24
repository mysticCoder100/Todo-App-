<?php

namespace App\Dto;

use App\Dto\Contract\DtoContract;

final class LoginDto implements DtoContract
{
    public function __construct(
        public string $email,
        public string $password
    )
    {

    }

    public function toArray(): array{
        return [
          'email' => $this->email,
          'password' => $this->password
        ];
    }
}
