<?php

namespace App\Containers\Girls\Tasks;

use App\Containers\Girls\Data\Repositories\GirlsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindGirlsByIdTask extends Task
{

    protected $repository;

    public function __construct(GirlsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
