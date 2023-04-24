<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       
        $busqueda = $request->busqueda;

        $receptores = DB::table('receptores')
                    ->whereNull('deleted_at')
                    ->where('organismo', 'LIKE' , '%'.$busqueda.'%')
                    ->paginate(2);
        
        return view('receptores.index')
            ->with('receptores', $receptores);
    }
}
