<?php

namespace App\Containers\Girls\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllGirlsAction extends Action
{
    public function run(Request $request)
    {
        $girls = Apiato::call('Girls@GetAllGirlsTask', [], ['addRequestCriteria']);

        return $girls;
    }
}
