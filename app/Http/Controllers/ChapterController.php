<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChapterRequest;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function store($chapterId ,ChapterRequest $request){
        $params = $request->validated();
        $params['trainingId'] = $chapterId;
        Chapter::create($params);
        return back();
    }
}
