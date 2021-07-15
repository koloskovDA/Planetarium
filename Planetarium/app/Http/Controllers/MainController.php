<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\Text;
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

    function texts()
    {
        return view('texts')->with([
            'texts' => Text::orderBy('id', 'asc')->get(),
        ]);
    }

    function editText($text)
    {
        $findText = Text::find($text);
        return view('editText')->with([
            'text' => $findText,
        ]);
    }

    function saveEditedText(Request $request)
    {
        $text = Text::find($request['id']);
        $text->title_ru = $request['title_ru'];
        $text->title_en = $request['title_en'];
        $text->text_ru = $request['text_ru'];
        $text->text_en = $request['text_en'];
        $text->save();
        return redirect()->route('texts');
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
            'stage_number' => 'required',
            'ends_at' => 'required|gte:starts_at',
        ], [
            'starts_at.required' => 'Укажите дату начала серии наблюдений',
            'ends_at.required' => 'Укажите дату окончания серии наблюдений',
            'ends_at.gte' => 'Окончание должно быть позже, чем начало',
            'stage_number.required' => 'Серия наблюдений не должна быть пустой',
        ]);
        $stage = new Stage();
        $stage->stage_number = $request['stage_number'];
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
