<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $table = "task";

   protected $fillable = [
     'template_id','user_id','title','description','due_date','status','note'
   ];

   public function parent() 
   {
       return $this->belongsTo(Template::class, 'template_id');
   }

}
