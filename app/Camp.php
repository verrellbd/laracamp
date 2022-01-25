<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Camp extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['title', 'price'];

    public function getIsRegisteredAttribute(){
        if(!Auth::check()){
            return false;
        }

        return checkout::whereCampId($this->id)->whereUserId(Auth::id())->exists();
    }
}
