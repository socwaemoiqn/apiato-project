<?php

namespace App\Containers\Girls\Tasks;

use App\Containers\Girls\Data\Repositories\GirlsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateGirlsTask extends Task
{

    protected $repository;

    public function __construct(GirlsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
