<?php

namespace App\Repositories\User\Contract;

use App\Dto\RegisterDto;

interface UserRepositoryContract
{
    public function createUser(RegisterDto $registerDto);

}
