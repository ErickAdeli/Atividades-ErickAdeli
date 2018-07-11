<?php

namespace App\Http\Controllers;

use App\User;
use App\Test;
use App\Procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcedureController extends Controller
{
 	public function index()
    {
        if ( Auth::check() ){
        	if (Auth::user()->type==1){ 
            	$procedure = Procedure::orderBy('name')->get();
            	return view('procedure.index')->with('procedure', $procedure);
           
            }
        	elseif (Auth::user()->type==2){ 
            	$procedure = Procedure::orderBy('name')->get();
              	return view('procedure.index3')->with('procedure', $procedure);
           
            }
      
        }
        else{     
       		$procedure = Procedure::orderBy('name')->get();
            return view('procedure.index2')->with('procedure', $procedure);
        }

    }

    public function create()
    {
        $user = User::orderBy('name')->get();
        return view('procedure.create')->with('user', $user);
    }

    public function store(Request $request)
    {
            Procedure::create($request->all());
            session()->flash('mensagem', 'Procedimento inserido com sucesso!');
            return redirect()->route('procedure.index');    
    }

    public function show(Procedure $procedure)
    {
        return view('procedure.show')->with('procedure', $procedure);
    }

    public function edit(Procedure $procedure)
    {

        if(Auth::user()->type == 1) {
            $user = User::orderBy('name')->get();
            return view('procedure.edit')->with('procedure', $procedure)->with('user', $user);
        } 
        else {
            $user = User::orderBy('name')->get();
            return view('procedure.edit2')->with('procedure', $procedure)->with('user', $user);
        
        }
        
    }

    public function update(Request $request, Procedure $procedure)
    {

    	$procedure->fill($request->all());
        $procedure->save();
        session()->flash('mensagem', 'Procedimento atualizado com sucesso!');

        return redirect()->route('procedure.show', $procedure->id);
        //$procedure->name = $request->name;
        //$procedure->price = $request->price;
        //$procedure->user_id = $request->user_id;
        //$procedure->save();
        //$request->session()->flash('mensagem', 'Procedimento atualizado com sucesso!');
        //return redirect()->route('procedure.index');
    }

    public function destroy(Procedure $procedure)
    {

        $procedure->delete();
        session()->flash('mensagem', 'Exame excluído com sucesso!');
        return redirect()->route('procedure.index');
    }


}
