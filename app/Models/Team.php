<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static function rules(): array
    {
        return([
            'team_title'=>'required|string|min:3|max:100',
//            Rule::unique('categories','name')->ignore($id),


            'team_img'=>
                'image','max:1024500','dimensions:min_width=100,min_height=100',
//            'status'=>'required|in:active,archived',
        ]);

    }
}
