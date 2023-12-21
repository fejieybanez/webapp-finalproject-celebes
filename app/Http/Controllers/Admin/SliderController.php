<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request; 
use App\Models\Slider;
use App\Http\Requests\SliderFormRequest;

// Code for the CRUD announcement
class SliderController extends Controller
{
    // retrieves all of the sliders from the database and then displays them in announcement.slider view
    public function index ()
    {
        $sliders = Slider::all();
        return view('announcement.slider', compact('sliders'));
    }
//create new slider for announcement
    public function create ()
    {
        return view ('announcement.create');
        
    }
//stores a new slider in the database. moagi syag validation. if true then ma add syas folder nga uploads    
    public function store (SliderFormRequest $request)
    {
        $validatedData = $request -> validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time () .'.'. $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image'] ="uploads/slider/$filename";
        }
        $validatedData['status'] = $request->gc_status == true ? '1':'0';

        Slider::create([
            // 'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            // 'status' => $validatedData['status'],
        ]);
        
        return redirect('sliders')->with('message', 'Slider Added Successfully');
    }
//to update the data, if mag change ug description or image
    public function edit(Slider $slider)
    {
        return view('announcement.edit', compact('slider'));
        
    }
//to update the data, if mag change ug description or image
    public function update(SliderFormRequest $request, Slider $slider)
    {

        $validatedData = $request -> validated();

        if($request->hasFile('image')){

            $destination = $slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time () .'.'. $ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image'] ="uploads/slider/$filename";
            
        }

        $validatedData['status'] = $request->gc_status == true ? '1':'0';

        Slider::where('id', $slider->id)->update([
            
            'description' => $validatedData['description'],
        ]);
        
        return redirect('sliders')->with('message', 'Slider Added Successfully');
    }
//to delete the announcement
    public function destroy(slider $slider)
    {
        if($slider->count() > 0){
        $destination = $slider->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $slider->delete();
        return redirect('sliders')->with('message', 'Deleted Successfully');
    }
        return redirect('sliders')->with('message', 'Something went wrong');
    }
}
