<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\market;
use App\Models\mComment;
use App\Models\users;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show()
    {
        $products = market::latest();
        return view('marketplace.view',[
            'products' => $products->paginate(7),
        ]);
    }
    
    public function detail($id)
    {
        $product = market::find($id);
        $komen = mComment::where('commentable_id', $id)->get();
        if (mComment::where('commentable_id', $id)->exists()) { 
            $last = mComment::where('commentable_id', $id)->latest('created_at')->first();
            $lastt = $last->created_at;
            }
        else { $lastt = NULL; }
        $id = $product->user_id;
        $userPost = users::find($id);
        
        return view('marketplace.Details',compact('product','userPost', 'komen', 'lastt'));
    }
    
    public function create()
    {
        return view('marketplace.create');
    }
    
    public function store(Request $request)
    {
        //dd($request);
        request()->validate([
            'nama' => 'required',
            'harga' => 'required',
            'desc' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg,gif,svg'
        ]);
        //dd('error');
        $nama = $request->nama;
        $slug = Str::slug($nama);
        
        $thumbnail = request()->file('foto');
        $fotoUrl = $thumbnail->storeAs("Images/market","{$slug}.{$thumbnail->extension()}");
        
        $sp = $request->sp;
        $tp = $request->tp;
        $bp = $request->bp;
        
        if ($sp || $tp || $bp) {
            $spUrl = $sp;
            $tpUrl = $tp;
            $bpUrl = $bp;
        }
        
        else { dd('payment method isi atuh bang'); }
        
        market::create([
            'nama' => $nama,
            'price' => $request->harga,
            'slug' => $slug,
            'user_id' => $request->user_id,
            'desc' => $request->desc,
            'sp' => $spUrl,
            'tp' => $tpUrl,
            'bp' => $bpUrl,
            'foto' => $fotoUrl,
        ]);
        
        return redirect('/market');
    }
}
