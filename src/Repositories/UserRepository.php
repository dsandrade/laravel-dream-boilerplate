<?php

namespace Dream\Boilerplate\Repositories;

use Dream\Boilerplate\Models\User;
use Dream\Boilerplate\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}
