<?php

namespace App\Repositories;

use App\Models\Status;
use App\Repositories\ipl\StatusRepositoryInterface;

class StatusRepository extends BaseRepository implements StatusRepositoryInterface
{
    protected $status;
    public function __construct(Status $status)
    {
        parent::__construct($status);
    }
}
