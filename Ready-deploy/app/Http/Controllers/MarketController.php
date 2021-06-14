<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\market;
use App\Models\mComment;
use App\Models\users;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class MarketController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function filter($tr)
    {
        if ($tr === 'popular') {
            $posts = market::orderBy('clicked','desc');
        }
        elseif ($tr === 'expensive') {
            $posts = market::orderBy('price','desc');
        }
        else { $posts = market::orderBy('price','asc'); }
        
        return view('marketplace.view',[
            'products' => $posts->paginate(7),
        ]);
    }
    
    public function search() 
    {
        $query = request('query');
        $tr = request('filter');
        //dd($tr);
        $products = market::where("slug", "like", "%$query%");
        if ($tr === 'popular') {
            $posts = $products->orderBy('clicked','desc');
        }
        elseif ($tr === 'expensive') {
            $posts = $products->orderBy('price','desc');
        }
        elseif ($tr === 'cheapest') { 
            $posts = $products->orderBy('price','asc'); 
        }
        else { 
            $posts = $products->latest(); 
            $tr = "All Type";
        }
        
        return view('marketplace.view',[
            'products' => $posts->paginate(5),
            'tr' => $tr,
        ]);
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
        $awal = $product->clicked;
        market::where('id',$product->id)
                ->update([
                    'clicked'=> $awal + 1,
                ]);
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
            'foto' => 'required|mimes:jpg,png,jpeg,gif,svg|dimensions:ratio=1/1'
        ]);
        //dd('error');
        $nama = $request->nama;
        $slug = Str::slug($nama);
        
        //$thumbnail = Image::make($request->foto)->fit(400,400);
        //$thumbnail->save('Images/market/'. $slug . '.' . $request->foto->extension());
        //$fotoUrl = 'Images/market/'. $slug . '.' . $request->foto->extension();
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
