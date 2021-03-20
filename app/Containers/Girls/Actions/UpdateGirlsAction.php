<?php

namespace App\Containers\Girls\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateGirlsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $girls = Apiato::call('Girls@UpdateGirlsTask', [$request->id, $data]);

        return $girls;
    }
}
