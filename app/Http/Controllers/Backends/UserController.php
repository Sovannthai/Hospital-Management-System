<?php

namespace App\Http\Controllers\Backends;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $imageName = Carbon::now()->toDateString() . "-" . uniqid() . "." . $extension;
        $image->move(public_path('uploads/all_photo'), $imageName);
        return $imageName;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('backends.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backends.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username'
        ]);
        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            if ($request->hasFile('photo')) {
                $user->photo = $this->uploadImage($request->file('photo'));
            }
            $user->save();
            $output = [
                'success' => 1,
                'msg' =>Lang::get('Create successfully')
            ];
        } catch (\Exception $e) {
            $output = [
                'error' => 0,
                'msg' =>trans('Something went wrong')
            ];
        }
        return redirect()->route('user.index')->with($output);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('backends.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => 'required|unique:users,email,' . $id,
            'username' => 'required|unique:users,username,' . $id
        ]);
        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            if ($request->hasFile('photo')) {
                $user->photo = $this->uploadImage($request->file('photo'));
            }
            $user->save();
            $output = [
                'success' => 1,
                'msg' =>Lang::get('Updated successfully')
            ];
        } catch (\Exception $e) {
            $output = [
                'error' => 0,
                'msg' =>trans('Something went wrong')
            ];
        }
        return redirect()->route('user.index')->with($output);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id);
            $user->delete();
            $photoPath = public_path('uploads/all_photo/' . $user->photo);
            if (!empty($user->photo) && file_exists($photoPath)) {
                unlink($photoPath);
            }
            DB::commit();
            $output = [
                'success' => 1,
                'msg' =>Lang::get('Deleted successfully')
            ];
        } catch (\Exception $e) {
            $output = [
                'error' => 0,
                'msg' =>trans('Something went wrong')
            ];
        }
        return redirect()->route('user.index')->with($output);
    }
}
