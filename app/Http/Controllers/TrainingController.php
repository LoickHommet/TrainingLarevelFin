<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TrainingResquest;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    public function index(){       
        $training = Training::all();
        $category = Category::all();
        $type = Type::all();
       return view('training.list', compact(['training', 'category','type']));
    }

    public function detail($id){
      $training = Training::find($id);
      $category = Category::all();
      return view('training.detail', compact(['training', 'category']));
  }

  public function add(){
    $category = Category::all();
    return view('training.add',compact('category'));
  }

  public function store(TrainingResquest $request){
   $params = $request->validated();
   $file= Storage::put('public', $params['image']);
   $params['image'] = substr($file,7);
   $params['user_id'] = Auth::user()->id;

   Training::create($params);
 
   return redirect()->route('traininglist');
  
  }

  public function update($id, TrainingResquest $request){
    $params = $request->validated();
    $training = Training::find($id);
    $params['user_id'] = auth()->user()->id;

    $training= $training->update($params);

    return redirect()->route('traininglist');
  }

  public function udpdateview($id){
    $training = Training::find($id);
    return view('training.modifier', compact('training'));
}

  public function removeTraining($id){

    $training = Training::find($id);

    if(Storage::exists("public/$training->image")){      
        Storage::delete("public/$training->image");
    }
   
    $training->category()->detach();
    $training->delete();

    return back();
}
 




}
