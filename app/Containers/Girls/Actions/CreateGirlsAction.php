<?php

namespace App\Containers\Girls\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Container\Girls\Model\Girls;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateGirlsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            
            


        ]);

        $girls = Apiato::call('Girls@CreateGirlsTask', [$data]);

        return $girls;
    }
}
