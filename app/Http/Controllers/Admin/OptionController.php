<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;

use App\Models\Option;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Option::where('parent', 0)->get();

        $children = Option::where('parent', '!=', 0)->get()->groupBy('parent');

        return view('admin.option.index', compact(
            'parents',
            'children'
        ));
    }

    public function save(Request $request)
    {
        // Nếu có ID thì update, không có thì tạo mới
        $option = Option::find($request->id) ?? new Option();

        // Upload hình
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/options'), $filename);
            $option->img = $filename;
        }

        // Lưu các field còn lại
        $option->name = $request->name;
        $option->color = $request->color;
        $option->color_1 = $request->color_1;
        $option->parent = $request->parent;

        $option->save();

        return response()->json([
            'status' => 'success',
            'id'     => $option->id,
            'message' => 'Saved successfully'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $option = Option::get();
        $category = Category::get();
        return view('admin.option.create', compact('option', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $option = new Option();
        $option->user_id = Auth::User()->id;
        $option->name = $data['name'];
        $option->parent = 0;
        $option->save();
        return redirect('admin/option')->with('success','updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Option::find($id);
        $option = Option::get();
        $category = Category::get();
        return view('admin.option.edit', compact('data', 'option', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $option = Option::find($id);
        $option->view = $data['view'];
        $option->parent = $data['parent'];
        $option->name = $data['name'];
        $option->sku = $data['sku'];
        $option->content = $data['content'];
        $option->title = $data['title'];
        $option->description = $data['description'];
        $option->slug = $data['slug'];

        // thêm ảnh
        // if ($request->hasFile('img')) {
        //     if(File::exists('data/option/'.$option->img)) { File::delete('data/option/'.$option->img);} // xóa ảnh cũ
        //     $file = $request->file('img');
        //     $filename = $file->getClientOriginalName();
        //     while(file_exists("data/option/".$filename)){$filename = rand(0,99)."_".$filename;}
        //     $file->move('data/option', $filename);
        //     $option->img = $filename;
        // }
        // thêm ảnh

        $option->save();

        // return redirect()->back();
        return redirect('admin/option')->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Option::find($id)->delete();
        return redirect()->back();
    }


    
}
