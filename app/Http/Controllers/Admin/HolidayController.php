<?php

namespace App\Http\Controllers\Admin;

use App\Models\Holiday;
use App\Models\HolidayCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\HolidayFormRequest;


class HolidayController extends Controller
{
    public function index()
 {
  
  $holidays= Holiday::all();
  return view('admin.holiday.index', compact('holidays',));
 }

 public function create()
 
 {
    $holidaycategory = HolidayCategory::where('status',0)->get();
   
return view('admin.holiday.create', compact('holidaycategory'));
 }

 public function store(HolidayFormRequest $request){

    $data = $request->validated();

    $holiday = new Holiday;

    $holiday->category_id = $data['category_id'];

    $holiday->name = $data['name'];
    $holiday->slug = $data['slug'];
    $holiday->description = $data['description'];
    $holiday->days= $data['days'];
    $holiday->itinerary = implode("\n", $data['itinerary']);

    if($request->hasfile('image')){
      $destination = 'uploads/holiday/'.$holiday->image;

      if(File::exists($destination)){

        File::delete($destination);
      }
      $file = $request->file('image');
      $filename = time().'.'. $file->getClientOriginalExtension();
      $file->move('uploads/holiday/', $filename);
      $holiday->image = $filename;
    }

    $holiday->meta_title = $data['meta_title'];
    $holiday->meta_description = $data['meta_description'];
    $holiday->meta_keyword = $data['meta_keyword'];

    
    $holiday->status = $request->status == true ? '1':'0';
    $holiday->created_by = Auth::user()->id;
    $holiday->save();

    return redirect('/admin/packages')->with('message', 'Holiday Package Added Successfully');

  }

  public function edit($holiday_id){

    $category = HolidayCategory::where('status','0')->get();
    
    $holiday = Holiday::find($holiday_id);
    $itineraryData = explode("\n", $holiday->itinerary);
    return view('admin.holiday.edit', compact('category','holiday', 'itineraryData'));

  }

  public function update(HolidayFormRequest $request, $holiday_id)
{
  
    $data = $request->validated();
    $holiday = Holiday::find($holiday_id);
    $holiday->category_id = $data['category_id'];
    $holiday->name = $data['name'];
    $holiday->slug = $data['slug'];
    $holiday->description = $data['description'];
    $holiday->days = $data['days'];
    $holiday->itinerary = implode("\n", $data['itinerary']);

    if ($request->hasFile('image')) {
        $destination = 'uploads/holiday/' . $holiday->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/holiday/', $filename);
        $holiday->image = $filename;
    }

    $holiday->meta_title = $data['meta_title'];
    $holiday->meta_description = $data['meta_description'];
    $holiday->meta_keyword = $data['meta_keyword'];

    $holiday->status = $request->status == true ? '1' : '0';
    $holiday->created_by = Auth::user()->id;

    $holiday->update();

    return redirect('/admin/packages')->with('message', 'Package Updated Successfully');
}


  public function destroy($holiday_id){

    $holiday = Holiday::find($holiday_id);
    $holiday->delete();

    return redirect('/admin/packages')->with('message', 'Package Deleted Successfully');
    



  }

}
