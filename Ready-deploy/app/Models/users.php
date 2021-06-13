<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class users extends Model
{
	
	protected $fillable = [
	    'name',
	    'email',
	    'password',
	    'tag',
	    'desc',
	];
	
	public function alldata()
	{
		return DB::table('users')->get();
	}

	public function detailData($id)
	{
		return DB::table('users')->where('id', $id)->first();
	}
}

