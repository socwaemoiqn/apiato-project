<?php

namespace App\Containers\Girls\Tasks;

use App\Containers\Girls\Data\Repositories\GirlsRepository;
use App\Containers\Girls\Models\Girls;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateGirlsTask extends Task
{

    protected $repository;

    public function __construct(GirlsRepository $repository)
    {
        $this->repository = $repository;
    }
     /**
     
     * @param string           $ten
     * @param decimal|null     $Vong1
     * @param decimal|null     $Vong2
     * @param decimal|null     $Vong3
     * @throws  CreateResourceFailedException
     */
    public function run(
        string $ten,
        decimal $Vong1 =null,
        decimal $Vong2 = null,
        decimal $Vong3 = null
        
    ): Girls {
        try {
            $girls= $this->repository->create([
            'ten'       => $ten,
            'Vong1'     => $Vong1,
            'Vong2'     => $Vong2,
            'Vong3'     => $Vong3
            ]);
        }
        catch (Exception $exception) {
            throw (new CreateResourceFailedException())->debug($e);
        }
        return $girls;
    }
}
