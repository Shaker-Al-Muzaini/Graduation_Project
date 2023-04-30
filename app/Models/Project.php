<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static limit(int $int)
 */
class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'project_name',
        'project_description',
        'project_image_1',
        'project_image_2',
        'project_features',
        'project_url',
        'authors_photo',
        'report_file',
        'author_report',
    ];

    protected static function rules(): array
    {
        return([
            'project_name'=>'required|string|min:3|max:100',
//            Rule::unique('categories','name')->ignore($id),


            'project_image_1'=>
                'image','max:1024500','dimensions:min_width=100,min_height=100',
//            'status'=>'required|in:active,archived',
        ]);

    }
}
