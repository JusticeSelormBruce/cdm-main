<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function validateApplicantDetails()
    {
        return
            request()->validate(
                [
                    "title" => "",
                    "lname" => "",
                    "fname" => "",
                    "mname" => "",
                    "sex" => "",
                    "dob" => "",
                    "email" => "",
                    "homephone" => "",
                    "cellphone" => "",
                    "fax" => "",
                    "homeadd" => "",
                    "post_address" => "",
                    "region" => "",
                    "city" => "",
                    "ssnit" => "",
                    "place_of_birth" => "",
                    "hometown" => "",
                    "disability" => "",
                    "religion" => "",
                    "denomination" => "",
                    "marital_status" => "",
                    "no_children" => "",
                    "country" => "",
                    "nationality" => "",
                    "langSpoken" => "",
                    "fullname" => "",
                    "relationship" => "",
                    "phone1" => "",
                    "phone2" => "",
                    "company" => " ",
                    "occupation" => "",
                    'user_id' => "required|numeric"

                ]

            );


    }


    public function data()
    {
        return $data = $this->validateApplicantDetails() + array('suffix' => 'null');
    }
}
