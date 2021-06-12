<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

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
    public function index()
    {
        return view('v_home');
    }

    public function marketplace()
    {
        return view('marketplace');
    }

    public function productdetail()
    {
        return view('productdetail');
    }

    public function addproduct()
    {
        return view('market_addproduct');
    }

    public function profile()
    {
        return view('profile');
    }

    public function showprofilepict($filename)

{

    $path = storage_public('img/' . auth()->user()->profilepict);

    if (!File::exists($path)) {

        abort(404);

    }
    $file = File::get($path);

    $type = File::mimeType($path);

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

    return $response;

}

    public function forums()
    {
        return view('forum');
    }

    public function createforum()
    {
        return view('createforum');
    }

    public function forumfull()
    {
        return view('forumfull');
    }

    public function tambahdataforum(Request $request, Users $users)
    {
        users::where('id', auth()->user()->id)
                ->update([
                    'ftopic'=> $request->ftopic,
                    'ftitle'=> $request->ftitle,
                    'fquestion'=> $request->fquestion,
                ]);
            return redirect('/forums');
    }

}
