<?php

namespace App\Containers\Car\UI\WEB\Controllers;

use App\Cars;
use App\Ship\Parents\Controllers\WebController;
use App\Containers\Car\UI\WEB\Requests\CreateCarRequest;
use App\Containers\Car\Models\Car;
use Illuminate\Support\Facades\DB;


/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  string
     */
    //create car
    public function create()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        return view('car::create');
    }
    public function store(CreateCarRequest $request)
    {
        $news = new Car();
        $news->name = $request->name; 
        $news->mota = $request->mota;
        $news->save();
        return redirect('car/index')->with('status','Thêm thành công');
    }
    // views car
    public function index()
    {
        // No actions to call. Since there's nothing to do but returning a response.

        $news = DB::table('cars')->select('*');
        $news = $news->get();
        return view('car::createcar',compact('news'));
    }
    //views detail car
    public function showcar($id)
    {
        $news = Car::where('id', '=', $id)->select('name','mota')->first();
    //    $des = html_entity_decode($news->mota);
        return view('car::view_car',compact('news'));
    }
    // edit car
    public function show($id)
    {
        // No actions to call. Since there's nothing to do but returning a response.

            $news = Car::findOrFail($id);
            return view('car::update',compact('news'));
    }
    public function update1(CreateCarRequest $request,$id)
    {
        $news = Car::find($id);
        $news->name = $request->name;
        $news->mota = $request->mota;
        $news->save();
        return redirect('/car/index')->with('status','Sửa Thành Công');
    }
    //delete car
    public function destroy($id)
    {
        $news = Car::find($id);

        $news->delete();
        return redirect('/car/index')->with('status','Dữ liệu xóa thành công.');
    }
    //search 
    public function search(CreateCarRequest $request)
    {
            // Get the search value from the request
            $search = $request->input('search');
        
            // Search in the title and body columns from the posts table
            $posts = Car::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('body', 'LIKE', "%{$search}%")
                ->get();
        
            // Return the search view with the resluts compacted
            return view('search', compact('posts'));
    }

}   

