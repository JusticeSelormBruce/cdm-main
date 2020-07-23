<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Avatar extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function validateAvatarData()
    {
        return request()->validate([
            'path' => 'file|required',
            'user_id'=>'required|numeric'
        ]);
    }

    public function hasAvatar($value)
    {
        if ($value == null) {
            return null;
        } else {
            return $value;
        }
    }

    public function getAvatarPath($value)
    {
        if ($value == null) {
            return null;
        } else {
            $path = Storage::putFile('profile/', $value);
            return $value->storeAs("public", $path);
        }
    }

    public function AvatarData()
    {

        $data = $this->validateAvatarData();
        if (\request()->path == null) {
            return $data + ['user_id' => $data['user_id']];
        } else {
            $result = $this->hasAvatar($data['path']);
            $value = $this->getAvatarPath($result);
            return   array('path' => $value, 'user_id' =>$data['user_id']);
        }


    }

    public function updateAvatar($id, $path)
    {
        Images::whereId($id)->update(['path' => $path]);
    }

}
