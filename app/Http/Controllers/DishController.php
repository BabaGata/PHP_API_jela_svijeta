<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DishResource;

class DishController extends Controller
{
    /**
     * Display a listing of the resource
     * 
     *  @param \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */

    public function index(Request $request) 
    {
        $per_page = $request->per_page ?? 10;
        return DishResource::collection(Dish::paginate($per_page));
    }


     /**
     * Display by id
     * 
     * @param int  $lang  // en was sent as id before
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($lang, $id)
    {
        //dd($id);
        return new DishResource(Dish::find($id));
    }


     /**
     * Search for a title
     * 
     * @param \Illuminate\Http\Request  $request
     * @param str  $title
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request, $lang, $title)
    {
        $per_page = $request->per_page ?? 10;
        return DishResource::collection(Dish::where('title', 'like', '%'.$title.'%')->paginate($per_page));
    }


    /**
     * Update: load old data, update with new
     * 
     * @param \Illuminate\Http\Request  $request
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $lang, $id)
    {
        $dish = Dish::find($id);
        $temp = Dish::find($id);
        $locale = app()->getLocale();

        $dish->update($request->all());
        
        if($dish!=$temp){
            $dish->update(['status' => 'MODIFIED']);
        }
        return $dish;
    }

    /**
     * Store a newly create resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        return Dish::create($request->all());
    }


     /**
     * Return archive
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function archive(Request $request)
    {
        //dd($request);
        $diff_time = $request->diff_time;
        $per_page = $request->per_page ?? 10;

        $query = Dish::withTrashed()
                    ->where('deleted_at', '>=', date('Y-m-d').' '.$diff_time)
                    ->orWhere('updated_at', '>=', date('Y-m-d').' '.$diff_time)
                    ->orWhere('created_at', '>=', date('Y-m-d').' '.$diff_time);

        return DishResource::collection($query->paginate($per_page));
    }

     /**
     * Restore
     * 
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function restore($lang, $id)
    {
        $dish = Dish::onlyTrashed()->findOrFail($id);
        $dish['status'] = 'CREATED';
        $dish->restore();
        
        return $dish;
    }


     /**
     * Soft delete by id
     * 
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($lang, $id)
    {
        $dish = Dish::find($id);
        $dish->update(['status' => 'DELETED']);

        
        $dish->delete();

        return $dish;
    }

     /**
     * Force delete by id
     * 
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function forceDelete($lang, $id)
    {
        $dish = Dish::onlyTrashed()->findOrFail($id);
        $dish->forceDelete();

        return $dish;
    }
}
