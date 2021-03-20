<?php

namespace App\Containers\Girls\UI\API\Controllers;

use App\Containers\Girls\UI\API\Requests\CreateGirlsRequest;
use App\Containers\Girls\UI\API\Requests\DeleteGirlsRequest;
use App\Containers\Girls\UI\API\Requests\GetAllGirlsRequest;
use App\Containers\Girls\UI\API\Requests\FindGirlsByIdRequest;
use App\Containers\Girls\UI\API\Requests\UpdateGirlsRequest;
use App\Containers\Girls\UI\API\Transformers\GirlsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Girls\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateGirlsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createGirls(CreateGirlsRequest $request)
    {
        $girls = Apiato::call('Girls@CreateGirlsAction', [$request]);

        return $this->created($this->transform($girls, GirlsTransformer::class));
    }

    /**
     * @param FindGirlsByIdRequest $request
     * @return array
     */
    public function findGirlsById(FindGirlsByIdRequest $request)
    {
        $girls = Apiato::call('Girls@FindGirlsByIdAction', [$request]);

        return $this->transform($girls, GirlsTransformer::class);
    }

    /**
     * @param GetAllGirlsRequest $request
     * @return array
     */
    public function getAllGirls(GetAllGirlsRequest $request)
    {
        $girls = Apiato::call('Girls@GetAllGirlsAction', [$request]);

        return $this->transform($girls, GirlsTransformer::class);
    }

    /**
     * @param UpdateGirlsRequest $request
     * @return array
     */
    public function updateGirls(UpdateGirlsRequest $request)
    {
        $girls = Apiato::call('Girls@UpdateGirlsAction', [$request]);

        return $this->transform($girls, GirlsTransformer::class);
    }

    /**
     * @param DeleteGirlsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteGirls(DeleteGirlsRequest $request)
    {
        Apiato::call('Girls@DeleteGirlsAction', [$request]);

        return $this->noContent();
    }
}
