<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Info extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function validateLogoData()
    {
        return request()->validate([
            'logo' => 'file|required'
        ]);
    }

    public function hasLogo($value)
    {
        if ($value == null) {
            return null;
        } else {
            return $value;
        }
    }

    public function getLogoPath($value)
    {
        if ($value == null) {
            return null;
        } else {
            $path = Storage::putFile('school/logo/', $value);
            return $value->storeAs("public", $path);
        }
    }

    public function LogoData()
    {

        $data = $this->validateLogoData();
        $info = request()->except('_token', 'logo');

        if (\request()->logo == null) {
            return $data;
        } else {
            $result = $this->hasLogo($data['logo']);
            $value = $this->getLogoPath($result);
            $logo = $data['logo'] = $value;
            $info  = $info + ['logo' => $logo];
            return   $info;
        }
    }

    public function updatelogo($id, $path)
    {
        Info::whereId($id)->update(['logo' => $path]);
    }
}
