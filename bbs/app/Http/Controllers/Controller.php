<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Bbs;
use View;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        // $bbs_group_by = Bbs::groupBy('thread_id')->get();
        $bbs_sort = Bbs::select(DB::raw('count(*) as num, thread_id'))->groupBy('thread_id')->orderBy('num', 'DESC')->take(5)->get();
        $bbs_ranking = $bbs_sort->map(function($bbs){
            return Bbs::find($bbs->thread_id);
        });
        // eval(\Psy\sh());        
        View::share('total_ranking', $bbs_ranking);
    }
}
