<?php

namespace App\Http\Controllers;

use App\Models\nhansu;
use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = team::orderBy('id','DESC')->get();
        return view('teams.index')->with(compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request ->validate([
            'name' =>'required|unique:team|max:255',
        ],
        [
            'name.required' => 'Nhập tiêu đề',
            'name.unique' => 'Tiêu đề này đã tồn tại,nhập tiêu đề khác!'
        ]
        );
        $cate = new team();
        $cate->name = $data['name'];
        $cate->save();

        return redirect()->route('teams.index')->with('status','Thêm danh mục thành công!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the team member by ID
        $team = team::find($id);
        return view('team.show',['team' => $team,'team'=>$team->team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = team::find($id);
        $teams = team::all(); // Assuming you have a Team model
        return view('teams.edit',compact('cate','teams'));
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
        $data = $request->validate(
            [
                'name' =>'required:team|max:255',
            ],
            [
                'name.required'=> 'Nhập tiêu đề',
            ]
            );
            $cate =team::find($id);
            $cate->name = $data['name'];
            $cate->save();

            return redirect()->route('teams.index')->with('status','Cập nhập danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        team::find($id)->delete();
        return redirect()->route('teams.index')->with('status','Xoá thành công danh mục');
    }
}
