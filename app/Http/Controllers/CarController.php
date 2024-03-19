<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;
use Illuminate\Support\Facades\File;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        // return response()->json($cars);
        return view('car-list', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'model' => 'required',
            'produced_on' => 'required|date',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $car = new Car();

        $car->model = $request->input('model');
        $car->produced_on = $request->input('produced_on');
        $car->description = $request->input('description');

        $image = $request->file('image');

        $imageName = time() . '_' . $image->getClientOriginalName();

        $image->move(public_path('images'), $imageName);
        $car->image = $imageName;

        $car->save();

        $function = 'Thêm mới sản phẩm thành công';

        return redirect()->route('cars.index')->with('message', $function);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        // dd($car);
        return view('car-detail', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Car::findOrFail($id);
        return view('car-edit', compact('car'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'model' => 'required',
            'produced_on' => 'required|date',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // If validation fails, return back with errors
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Find the car by its ID
        $car = Car::findOrFail($id);
    
        // Update the car's attributes with the new values from the request
        $car->model = $request->model;
        $car->produced_on = $request->produced_on;
        $car->description = $request->description;
    
        // Handle the new image if provided
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($car->image && file_exists(public_path('images/' . $car->image))) {
                File::delete(public_path('images/' . $car->image));
            }
            // Save the new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $car->image = $imageName;
        }
    
        // Save the updated car object
        $car->save();
    
        // Redirect back to the index page with success message
        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// ...

    public function destroy($id)
    {
        // Tìm xe bằng ID
        $car = Car::findOrFail($id);

        // Xóa ảnh của xe nếu tồn tại
        if ($car->image && File::exists('images/' . $car->image)) {
            File::delete('images/' . $car->image);
        }

        // Xóa xe khỏi cơ sở dữ liệu
        $car->delete();

        // Điều hướng trở lại trang danh sách xe với thông báo thành công
        return redirect()->route('cars.index')->with('success', 'Xóa xe thành công');
    }
}