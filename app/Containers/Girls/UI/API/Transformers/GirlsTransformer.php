<?php

namespace App\Containers\Girls\UI\API\Transformers;

use App\Containers\Girls\Models\Girls;
use App\Ship\Parents\Transformers\Transformer;

class GirlsTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Girls $entity
     *
     * @return array
     */
    public function transform(Girls $entity)
    {
        $response = [
            'object' => 'Girls',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
