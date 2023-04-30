<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 * @method static create(array $data)
 */
class Services extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'id',
            'services_name',
            'services_description',
            'services_image',
            'services_owner_name',
            'services_owner_image',
            'price',
            'created_at'
        ];
    protected static function rules(): array
    {
        return([
            'services_name'=>'required|string|min:3|max:100',
//            Rule::unique('categories','name')->ignore($id),

            'services_image'=>
                'image','max:1024500','dimensions:min_width=100,min_height=100',
//            'status'=>'required|in:active,archived',
        ]);

    }
}
