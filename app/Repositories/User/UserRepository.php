<?php

namespace App\Repositories\User;

use App\Dto\RegisterDto;
use App\Exceptions\UserCreationFailedException;
use App\Models\User;
use App\Repositories\User\Contract\UserRepositoryContract;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class UserRepository implements UserRepositoryContract
{
    public function __construct(
        protected User $model
    )
    {

    }

    /**
     * @throws Exception
     */
    public function createUser(RegisterDto $registerDto): bool
    {
        try {

            $this->model->create($registerDto->toArray());

            return true;
        } catch (QueryException $e) {
            Log::error('UserRepository: Database error creating user: ' . $e->getMessage());
            throw new UserCreationFailedException("Unable to register user");
        } catch (Exception $e) {
            Log::error('UserRepository: Error creating user: ' . $e->getMessage());
            throw new UserCreationFailedException("Failed to create user");
        }
    }

}
