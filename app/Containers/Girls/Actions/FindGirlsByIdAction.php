<?php

namespace App\Containers\Girls\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindGirlsByIdAction extends Action
{
    public function run(Request $request)
    {
        $girls = Apiato::call('Girls@FindGirlsByIdTask', [$request->id]);

        return $girls;
    }
}
