<?php

namespace App\Containers\Girls\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class FansRepository
 */
class FansRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
