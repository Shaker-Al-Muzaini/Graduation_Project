<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Footer extends Model
{
    use HasFactory;
    protected $guarded=[];


    protected static function rules(): array
    {
        return([
            'facebook_url'=>'required|string',
//            Rule::unique('categories','name')->ignore($id),

        ]);

    }
}
