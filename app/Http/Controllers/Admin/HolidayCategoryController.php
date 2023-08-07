<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\HolidayCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\HolidayCategoryFormRequest;

class HolidayCategoryController extends Controller
{
    public function index()
  {
    $holidaycategory = HolidayCategory::all();
    return view('admin.holidaycategory.index', compact('holidaycategory'));
  }
 
  public function create()
  
  {
    return view('admin.holidaycategory.create');
  }

  public function store(HolidayCategoryFormRequest $request){

    $data = $request->validated();

    $holidaycategory = new HolidayCategory;

    $holidaycategory->name = $data['name'];
    $holidaycategory->slug = $data['slug'];
    $holidaycategory->description = $data['description'];

    if($request->hasfile('image')){
      $file = $request->file('image');
      $filename = time().'.'. $file->getClientOriginalExtension();
      $file->move('uploads/holidaycategory/', $filename);
      $holidaycategory->image = $filename;
    }

    $holidaycategory->meta_title = $data['meta_title'];
    $holidaycategory->meta_description = $data['meta_description'];
    $holidaycategory->meta_keyword = $data['meta_keyword'];

    $holidaycategory->navbar_status = $request->navbar_status == true ? '1':'0';
    $holidaycategory->status = $request->status == true ? '1':'0';
    $holidaycategory->created_by = Auth::user()->id;
    $holidaycategory->save();

    return redirect('/admin/holidaycategory')->with('message', 'HolidayCategory Added Successfully');

  }

  public function edit($holidaycategory_id){

    $holidaycategory = HolidayCategory::find($holidaycategory_id);

    return view('admin.holidaycategory.edit', compact("holidaycategory"));
    
  }

  public function update(HolidayCategoryFormRequest $request, $holidaycategory_id){

    $data = $request->validated();

    $holidaycategory = HolidayCategory::find($holidaycategory_id);

    $holidaycategory->name = $data['name'];
    $holidaycategory->slug = $data['slug'];
    $holidaycategory->description = $data['description'];

    if($request->hasfile('image')){

      $destination = 'uploads/holidaycategory/'.$holidaycategory->image;

      if(File::exists($destination)){

        File::delete($destination);
      }
      $file = $request->file('image');
      $filename = time().'.'. $file->getClientOriginalExtension();
      $file->move('uploads/holidaycategory/', $filename);
      $holidaycategory->image = $filename;
    }

    $holidaycategory->meta_title = $data['meta_title'];
    $holidaycategory->meta_description = $data['meta_description'];
    $holidaycategory->meta_keyword = $data['meta_keyword'];

    $holidaycategory->navbar_status = $request->navbar_status == true ? '1':'0';
    $holidaycategory->status = $request->status == true ? '1':'0';
    $holidaycategory->created_by = Auth::user()->id;
    $holidaycategory->update();

    return redirect('/admin/holidaycategory')->with('message', 'HolidayCategory Updated Successfully');


  }



public function destroy($category_id)

 {

      $holidaycategory = HolidayCategory::find($category_id);

      if($holidaycategory)
  
        {
          $destination = 'uploads/holidaycategory/'.$holidaycategory->image;
          if(File::exists($destination)){

            File::delete($destination);
          }


    $holidaycategory->delete();
    return redirect('admin/holidaycategory')->with('message', 'HolidayCategory Deleted Sucessfully');
        }

       else
        {
  return redirect('admin/holidaycategory')->with('message','No HolidayCategory ID is found');
        }

  
  
  }
    
}
