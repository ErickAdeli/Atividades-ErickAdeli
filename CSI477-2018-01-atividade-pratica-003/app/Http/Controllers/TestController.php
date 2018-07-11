<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Procedure;
use App\Test;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        //$user = user::get();
        //$test = Test::where('user_id', '=', Auth::user()->id)->orderBy('date', 'DESC')->get();
        //$procedure = Procedure::orderBy('name')->get();
        //$totalexame = Test::where('user_id', '=', Auth::user()->id)->count();
        //$valortotal = Test::join('procedures', 'tests.procedure_id', '=', 'procedures.id')->where('tests.user_id', '=', Auth::user()->id)->sum('procedures.price');
        //return view('test.index')->with('test', $test)->with('procedure', $procedure)->with('totalexame', $totalexame)->with('valortotal', $valortotal)->with('user', $user);

        $user = User::get();
    
        $test = Test::where('user_id', '=', Auth::user()->id)->orderBy('date','desc')->get();
        $totalexame = Test::where('user_id', '=', Auth::user()->id)->count();
        $valortotal = Test::join('procedures', 'tests.procedure_id', '=', 'procedures.id')
        ->where('tests.user_id', '=', Auth::user()->id)->sum('procedures.price');
        return view('test.index')
        ->with('test', $test)
        ->with('total', $totalexame)
        ->with('user', $user)
   
        ->with('valortotal', $valortotal);
    }

    public function create()
    {
        $user = User::orderBy('name')->get();
        $procedure = Procedure::orderBy('name')->get();
        return view('test.create')->with('procedure', $procedure)->with('user', $user);
    }

    public function store(Request $request)
    {

            Test::create($request->all());
            session()->flash('mensagem', 'Exame inserido com sucesso!');
            return redirect()->route('test.index');        
    }

    public function show(Test $test)
    {
        return view('test.show')->with('test', $test);
    }

    
    public function edit(Test $test)
    {
        $procedure = Procedure::orderBy('name')->get();
        $user = User::orderBy('name')->get();
        return view('test.edit')->with('test',$test)->with('procedure', $procedure)->with('user', $user);
    }

    
    public function update(Request $request, Test $test)
    {
        $test->date = $request->date;
        $test->procedure_id = $request->procedure_id;
        $test->user_id = $request->user_id;
        $test->save();
        $request->session()->flash('mensagem', 'Exame atualizado com sucesso!');
        return redirect()->route('test.index');
    }

    
    public function destroy(Test $test)
    {
        $test->delete();
        session()->flash('mensagem', 'Exame excluído com sucesso!');
        return redirect()->route('test.index');
    }
    
}
