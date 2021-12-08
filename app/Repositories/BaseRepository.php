<?php
namespace App\Repositories;

use App\Repositories\ipl\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $models;

    public function __construct(Model $models)
    {
        $this->models = $models;
    }

    public function getAll()
    {
        $models = $this->models->all();
        return $models;
    }
    public function getById($id)
    {
        $models = $this->models->query()->findOrFail($id);
        return $models;
    }
    public function delete($id)
    {
        $models = $this->models->query()->findOrFail($id);
        $models->delete();
    }
}
