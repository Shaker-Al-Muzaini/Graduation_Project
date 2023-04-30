<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static function rules(): array
    {
        return([
            'courses_name'=>'required|string|min:3|max:100',
//            Rule::unique('categories','name')->ignore($id),

            'courses_image'=>
                'image','max:1024500','dimensions:min_width=100,min_height=100',
//            'status'=>'required|in:active,archived',
        ]);

    }

}
