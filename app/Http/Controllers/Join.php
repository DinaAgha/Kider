<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinModel;

class Join extends Controller
{
    public function join (){
        return view('layouts.join');
    }

    public function call (){
        return view('layouts.call');
    }  

    public function index()
    {
        $kids = JoinModel::get();
        return view('kids', compact('kids'));
    }

    public function create()
    {
        return view('layouts.join');
    }
    public function store(Request $request)
    {
        $messages = [
            'gname.required' => 'The gurdian name is missed, please insert',
            'gname.min' => 'length less than 5, please insert more chars',
            'email.required' => 'The email is missed, please insert',
            'email.email' => 'Invalid email format',
            'cname.required' => 'The student name is missed, please insert',
            'cname.min' => 'length less than 5, please insert more chars',
            'age.required' => 'The age is missed, please insert',
            'phone.required' => 'The phone number is missed, please insert',
            'phone.min' => 'length less than 11, please insert more digits',
            'class.required' => 'The classes is missed, please insert',
        ];
    
        $data = $request->validate([
            'gname'=> 'required|max:100|min:3',
            'email' => 'required|email:rfc',
            'cname' => 'required|max:100|min:3',
            'age'=> 'required',
            'phone' => 'required|min:11',
            'class'=>'required'
        ], $messages);
    
        JoinModel::create($data);
        return redirect('kids');
    
    }
    public function show(string $id)
    {
        $kid = JoinModel::findOrFail($id);
        return view('showKids', compact('kid'));
    }

    public function edit(string $id)
    {
        $kid = JoinModel::findOrFail($id);
        return view('editKids', compact('kid'));
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'gname.required' => 'The client name is missed, please insert',
            'gname.min' => 'length less than 5, please insert more chars',
            'email.required' => 'The email is missed, please insert',
            'email.email' => 'Invalid email format',
            'cname.required' => 'The client name is missed, please insert',
            'cname.min' => 'length less than 5, please insert more chars',
            'age.required' => 'The age is missed, please insert',
            'phone.required' => 'The phone number is missed, please insert',
            'phone.min' => 'length less than 11, please insert more digits',
            'class.required' => 'The classes is missed, please insert',
        ];

        $data = $request->validate([
            'gname'=> 'required|max:100|min:5',
            'email' => 'required|email:rfc',
            'cname' => 'required|max:100|min:5',
            'age'=> 'required',
            'phone' => 'required|min:11',
            'class'=>'required'
        ], $messages);

        JoinModel::where('id', $id)->update($data);
        return redirect('kids');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        JoinModel::where('id', $id)->delete();
        return redirect('kids');
    }

    public function forceDelete(Request $request)
    {
        $id = $request->id;
        JoinModel::where('id', $id)->forceDelete();
        return redirect('trashClient');
    }

    public function trash()
    {
        $trashed = JoinModel::onlyTrashed()->get();
        return view('trashClient', compact('trashed'));
    }

    public function restore(string $id)
    {
        JoinModel::where('id', $id)->restore();
        return redirect('kids');
    }
}