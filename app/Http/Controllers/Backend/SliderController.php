<?php

namespace App\Http\Controllers\Backend;

use App\Models\backend\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use Illuminate\Support\Facades\Storage;





class SliderController extends BaseBackendController
{





  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $sliders = slider::all();
    return view('backend.slider.index', compact('sliders'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.slider.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {



    if ($request->hasFile('image')) {
      $fileNameWithExt = $request->file('image')->getClientOriginalName();
      // get file name
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      // get extension
      $extension = $request->file('image')->getClientOriginalExtension();

      $fileNameToStore =  time() . '.' . $extension;
      // upload
      $path = $request->file('image')->move('uploads/sliders', $fileNameToStore);
    } else {
      $fileNameToStore = 'noimage.jpg';
    }
    // End of Upload Files

    $slider = new slider;

    $slider->image = $fileNameToStore;

    $slider->title_tr = $request->title_tr;
    $slider->text_tr = $request->text_tr;



    $slider->url = $request->url;
      $slider->order = $request->order;

    $slider->status = $request->status;


    $slider->save();



    return redirect(route('admin.slider.index'))->with('message', trans('backend.created_successfully'));
  }



  public function getUploadPath()
  {
    return $this->uploadPath;
  }

  public function setUploadPath($uploadPath)
  {
    $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
  }



  /**
   * Display the specified resource.
   *
   * @param  \App\Admin\Model\slider  $slider
   * @return \Illuminate\Http\Response
   */
  public function show(slider $slider)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Admin\Model\slider  $slider
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $slider = slider::find($id);

    return view('backend.slider.edit', compact('slider'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Admin\Model\slider  $slider
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {




    // Start of Upload Files
    // file upload
    if ($request->hasFile('image')) {
      $sliderar = slider::find($id);  // here to store image alone
      // Delete a style_logo_en photo
      if ($sliderar->image != "") {
        unlink('uploads/sliders/' . $sliderar->image);
      }

      $fileNameWithExt = $request->file('image')->getClientOriginalName();
      // get file name
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      // get extension
      $extension = $request->file('image')->getClientOriginalExtension();

      $fileNameToStore =  time() . '.' . $extension;
      // upload

      $path = $request->file('image')->move('uploads/sliders', $fileNameToStore);

      $sliderar->image = $fileNameToStore;
      $sliderar->save();
    }



    // End of Upload Files
    $slider = slider::where('id', $id)->update($request->except('_token', '_method', 'image'));
    // except image cus we handle it aboves


    return redirect(route('admin.slider.index'))->with('message', trans('backend.updated_successfully'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Admin\Model\slider  $slider
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $slider = slider::find($id);
    unlink('uploads/sliders/' . $slider->image);
    $slider->delete();
    return redirect()->back()->with('message', 'slider Deleted Sucsessfully');
  }
}
