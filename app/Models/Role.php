<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name','guard_name'];

    //  public function check(int $id): bool
    // {
    //     $permission = Permission::where('')
    //         ->get();

    //     foreach ($group as $g){
    //         if($id == $g->groups_id){
    //             return true;
    //         }
    //     }

    //     return false;
    // }

}
