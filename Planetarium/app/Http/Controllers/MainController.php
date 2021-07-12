<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/admin');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function admin()
    {
        $stages = Stage::all()->sortByDesc('starts_at');
        return view('admin')->with([
            'stages' => $stages,
        ]);
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function stage(Request $request)
    {
        $this->validate($request, [
            'starts_at' => 'required',
            'ends_at' => 'required|gte:starts_at',
        ], [
            'starts_at.required' => 'Укажите дату начала серии наблюдений',
            'ends_at.required' => 'Укажите дату окончания серии наблюдений',
            'ends_at.gte' => 'Окончание должно быть позже, чем начало'
        ]);
        $stage = new Stage();
        $stage->starts_at = $request['starts_at'];
        $stage->ends_at = $request['ends_at'];
        $stage->save();

        return back();
    }

    function delete($stage)
    {
        $current = Stage::find($stage);
        $current->delete();

        return back();
    }
}
