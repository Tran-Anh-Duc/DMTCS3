<?php

namespace App\Repositories;


use App\Models\Role;
use App\Repositories\ipl\RoleRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    protected $role;
    public function __construct(Role $role)
    {
        parent::__construct($role);
    }

}
