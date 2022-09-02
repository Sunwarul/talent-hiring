<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use App\Contracts\UserRepositoryInterface;

class UserRepository  extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
