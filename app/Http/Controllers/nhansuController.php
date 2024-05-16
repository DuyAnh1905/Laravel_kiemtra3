<?php

namespace App\Http\Controllers;

use App\Models\nhansu;
use App\Models\team;
use Illuminate\Http\Request;

class nhansuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhansu = nhansu::orderBy('id', 'DESC')->get();
        return view('nhansu.index')->with(compact('nhansu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fetch all nhansu records
        $nhansu = nhansu::all();
        $teams = team::all();
        
        return view('nhansu.create', compact('nhansu','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'giothieu' => 'required|max:255',
            'bangcap' => 'required|max:255',
            'ttnggith' => 'required|max:255',
            'cakinang' => 'required|max:255',
            'kinhngiem' => 'required|max:255',
            'team_id' => 'required|exists:team,id', // Fixed team table name
        ]);
        
        $nhansu = new nhansu();
        $nhansu->name = $data['name'];
        $nhansu->giothieu = $data['giothieu'];
        $nhansu->bangcap = $data['bangcap'];
        $nhansu->ttnggith = $data['ttnggith'];
        $nhansu->cakinang = $data['cakinang'];
        $nhansu->kinhngiem = $data['kinhngiem'];
        $nhansu->image = $data['image'];
        $nhansu->team_id = $data['team_id'];
        $nhansu->save();

        return redirect()->route('nhansu.index')->with('status', 'Thêm bài viết thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhansu = nhansu::find($id);
        return view('nhansu.show', ['nhansu' => $nhansu, 'giothieu' => $nhansu->giothieu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Lấy dữ liệu của item cần chỉnh sửa từ database, sử dụng $id
        $nhansu = nhansu::find($id);

        // Kiểm tra xem item có tồn tại không
        $teams = team::all(); // Assuming you have a Team model
        
        return view('nhansu.edit', compact('nhansu', 'teams'));
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
        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'giothieu' => 'required|max:255',
            'bangcap' => 'required|max:255',
            'ttnggith' => 'required|max:255',
            'cakinang' => 'required|max:255',
            'kinhngiem' => 'required|max:255',
            'team_id' => 'required|exists:teams,id', // Fixed team table name
        ]);
        
        $nhansu = nhansu::find($id);
        $nhansu->name = $data['name'];
        $nhansu->giothieu = $data['giothieu'];
        $nhansu->bangcap = $data['bangcap'];
        $nhansu->ttnggith = $data['ttnggith'];
        $nhansu->cakinang = $data['cakinang'];
        $nhansu->kinhngiem = $data['kinhngiem'];
        $nhansu->image = $data['image'];
        $nhansu->team_id = $data['team_id'];
        $nhansu->save();

        return redirect()->route('nhansu.index')->with('status', 'Cập nhật bài viết thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        nhansu::find($id)->delete();
        return redirect()->route('nhansu.index')->with('status', 'Xoá bài viết thành công');
    }
}