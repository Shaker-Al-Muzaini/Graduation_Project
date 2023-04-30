<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(string $id)
 */
class About extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected static function rules(): array
    {
        return([
            'about'=>'required|string',
//            Rule::unique('categories','name')->ignore($id),

        ]);

    }
}
