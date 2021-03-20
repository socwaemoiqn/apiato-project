<?php

namespace App\Containers\Girls\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteGirlsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Girls@DeleteGirlsTask', [$request->id]);
    }
}
