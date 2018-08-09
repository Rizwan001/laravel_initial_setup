<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Disscusion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('discuss');
    }
    public function landingPage()
    {

//        $discussion = Disscusion::orderBy('created_at', 'des')->with('category')->groupBy('category_id')->get();
//        SELECT *, COUNT(disscusions.category_id) FROM `disscusions` INNER JOIN categories ON disscusions.category_id = categories.id GROUP BY disscusions.category_id
//        $discussion=DB::table('disscusions')
//                    ->select(DB::raw("(SELECT created_at FROM disscusions ORDER BY ID DESC LIMIT 1) AS upd_date"))
//                    ->select('categories.*',DB::raw("COUNT('disscusions.category_id') as post_count"))
//                    ->join('categories','categories.id','=','disscusions.category_id' )
//                    ->groupBy('category_id')
//                    ->get();

          $discussion = DB::select(DB::raw("
                            SELECT c.*, (SELECT COUNT(*) FROM disscusions WHERE category_id=c.id) AS discussion_count, 
                           (SELECT count(*) FROM replies WHERE category_id=c.id) AS reply_count
                            FROM categories c
                                  "));


//        $activities = \App\Models\UserActivity::whereUserId(\Illuminate\Support\Facades\Auth::id())->with('user')->with('discussion')->orderBy('created_at','DESC')->paginate(10);
        return view('landingPage', compact('discussion'));

    }
}
