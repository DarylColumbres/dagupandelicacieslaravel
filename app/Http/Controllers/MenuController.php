<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return response()->json(['menu'=> $menu]);
        return view ('products',compact('menu'));
    }
    public function indexx(){
        $menu = Menu::all();
        return view ('products',compact('menu'));
    }
    
    public function recipe($id){
        $menu = Menu::find($id);
        return view ('recipe',compact('menu'));
    }
    
    public function tuts($id){
        $menu = Menu::find($id);
        return view ('tutorial',compact('menu'));
    }
    
    
    public function menu(){
        return view ('create');
    }
    public function about(){
        return view('about');
    }
    public function insertmenu(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'ingredients' => 'required|string',
            'howtocook' => 'required|string',
        ]);
        
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        
        
        Menu::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
            'price' => $request->price,
            'ingredients' => $request->ingredients,
            'howtocook' => $request->howtocook,
        ]);
        
        return redirect('dashboard')->with('success', 'Menu successfully Added');
    }
    public function show($id){
        $menu = Menu::find($id);
        return view('show',compact('menu'));
    }
    
    public function edit($id){
        $menu = Menu::find($id);
        return view('edit',compact('menu'));
    }
    
    public function update(Request $request, $id){
        
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'ingredients' => 'required|string',
            'howtocook' => 'required|string',
        ]);
        
        $menu = Menu::find($id);
        
        
        $menu->name = $request->name;
        
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $menu->image = $imageName;
        }
        
        $menu->description = $request->description;
        $menu->price = $request->price;
        $menu->ingredients = $request->ingredients;
        $menu->howtocook = $request->howtocook;
        $menu->save();
        
        return redirect('dashboard')->with('success', 'Menu successfully Updated');
    }
    public function destroy($id){
        Menu::find($id)->delete();
        return redirect('dashboard')->with('success','Menu successfully Deleted');
    }
    
    public function mainindex(){
        $menu = Menu::get();
        return view('index',compact('menu'));
    }
}
