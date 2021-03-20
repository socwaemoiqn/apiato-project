<?php

namespace App\Containers\Girls\UI\WEB\Controllers;

use App\Containers\Girls\UI\WEB\Requests\CreateGirlsRequest;
use App\Containers\Girls\UI\WEB\Requests\DeleteGirlsRequest;
use App\Containers\Girls\UI\WEB\Requests\GetAllGirlsRequest;
use App\Containers\Girls\UI\WEB\Requests\FindGirlsByIdRequest;
use App\Containers\Girls\UI\WEB\Requests\UpdateGirlsRequest;
use App\Containers\Girls\UI\WEB\Requests\StoreGirlsRequest;
use App\Containers\Girls\UI\WEB\Requests\EditGirlsRequest;
use App\Containers\Girls\UI\WEB\Requests\DetailsGirlsRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Girls\Models\Girls;
use Illuminate\Support\Facades\DB;

/**
 * Class Controller
 *
 * @package App\Containers\Girls\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllGirlsRequest $request
     */
    public function index(GetAllGirlsRequest $request)
    {
        // $girls = Apiato::call('Girls@GetAllGirlsAction', [$request]);
        $allgirl = DB::table('girls')->select('id', 'ten', 'Vong1', 'Vong2', 'Vong3')->get();


        $name = 'Create_girls';


        return view('girls::ShowRoom_Girls', compact('allgirl', 'name'));
        // ..
    }

    /**
     * Show one entity
     *
     * @param FindGirlsByIdRequest $request
     */
    public function show(FindGirlsByIdRequest $request)
    {
        $girls = Apiato::call('Girls@FindGirlsByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateGirlsRequest $request
     */
    public function create(CreateGirlsRequest $request)
    {
        // .
        return view('girls::Create_girls');
    }

    /**
     * Add a new entity
     *
     * @param StoreGirlsRequest $request
     */
    public function store(StoreGirlsRequest $request)
    {
        //
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        // $allRequest  = $request->all();
        $ten  = $request->ten;
        $Vong1 = $request->Vong1;
        $Vong2 = $request->Vong2;
        $Vong3 = $request->Vong3;
        // try {
        //     $girls = Apiato::call('Girls@CreateGirlsAction', [$request]);
        // } catch (Exception $e) {
        //     return redirect('girls/store')->with('status', $e->getMessage());
        // }
        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'ten'  => $ten,
            'Vong1' => $Vong1,
            'Vong2' => $Vong2,
            'Vong3' => $Vong3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        $insertData = DB::table('girls')->insert($dataInsertToDatabase);
        //kiểm tra và trả về thông báo
        if ($insertData) {
            return redirect('girls')->with('status', 'Create Successfull!');
        } else {
            return redirect('girls')->with('status', 'Create Faill!');


            //return redirect('login')->with('status','Create Successfull!');
            // ..
        }
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditGirlsRequest $request
     */
    public function edit(EditGirlsRequest $request)
    {
        // $girls = Apiato::call('Girls@GetGirlsByIdAction', [$request]);
        $girl = Girls::find($request->id);
        return view('girls::Create_girls')->with('girl', $girl);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateGirlsRequest $request
     */
    public function update(UpdateGirlsRequest $request)
    {
        // $girls = Apiato::call('Girls@UpdateGirlsAction', [$request]);
        $id=$request->id;
        $ten  = $request->ten;
        $Vong1 = $request->Vong1;
        $Vong2 = $request->Vong2;
        $Vong3 = $request->Vong3;
        // try {
        //     $girls = Apiato::call('Girls@CreateGirlsAction', [$request]);
        // } catch (Exception $e) {
        //     return redirect('girls/store')->with('status', $e->getMessage());
        // }
        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'ten'  => $ten,
            'Vong1' => $Vong1,
            'Vong2' => $Vong2,
            'Vong3' => $Vong3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        $updatetData = DB::table('girls')->where('id', '=', $id)->update($dataInsertToDatabase);
        //kiểm tra và trả về thông báo
        if ($updatetData) {
            return redirect('girls')->with('status', 'Update Successfull!');
        } else {
            return redirect('girls')->with('status', 'Update Faill!');


            //return redirect('login')->with('status','Create Successfull!');
            // ..
        }
        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteGirlsRequest $request
     */
    public function delete(DeleteGirlsRequest $request)
    {
        //  $result = Apiato::call('Girls@DeleteGirlsAction', [$request]);
        $Del = Girls::find($request->id);

        $Del->delete();
        return redirect('girls')->with('status', ' xóa thành công.');
        // ..
    }
    /**
     * Edit entity (show UI)
     *
     * @param DetailsGirlsRequest $request
     */
    public function details($id)
    {
        // $girls = Apiato::call('Girls@GetGirlsByIdAction', [$request]);
        $detailgirls = Girls::where('id', '=', $id)->select('id', 'ten', 'Vong1', 'Vong2', 'Vong3', 'votes')->first();
        //decode html
        $decode = html_entity_decode($detailgirls->description);

        return view('girls::Detail_girl', compact('detailgirls', 'decode'));

        // ..
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
