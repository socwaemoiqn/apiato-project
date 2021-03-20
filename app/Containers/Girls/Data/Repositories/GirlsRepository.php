<?php

namespace App\Containers\Girls\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class GirlsRepository
 */
class GirlsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
