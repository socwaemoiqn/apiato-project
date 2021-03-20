<?php

namespace App\Containers\Girls\Tasks;

use App\Containers\Girls\Data\Repositories\GirlsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllGirlsTask extends Task
{

    protected $repository;

    public function __construct(GirlsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
