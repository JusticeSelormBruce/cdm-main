<?php

namespace App\Http\Controllers;

use App\Lecturar;
use App\Subjects;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LecturarController extends Controller
{
    public function assignSubjectIndex()
    {
        $users = User::get()->all();
        $subject = Subjects::all();

        if (Session::get('user_id') == null) {
            $data = null;
            $subjectRoles = null;
        } else {
            $data = $this->getSelectedSubjectLogic();
            if ($data == null) {
                $data = null;
            }
            $subjectRoles = $data[0];
        }
        $me = Session::get('id');
        return view('admin.lecturer.index', compact('subject', 'me', 'subjectRoles', 'data', 'users'));
    }
    public function getSelectedSubjectLogic()
    {
        $data = Session::get('user_id');
        $data = json_decode('[' . $data->subject_id . ']', true);
        return $data;
    }

    public function getUserSubjects(Request $request)
    {

        Session::put('id', $request->user_id);
        $result = Lecturar::where('user_id', $request->user_id)->first();
        Session::put('user_id', $result);
        return back();
    }

    public function AssignSubject(Request $request)
    {
        $user_id = Session::get('id');

        $user_subject_exist = Lecturar::where('user_id', $user_id)->get()->first();
        if ($user_subject_exist == null) {
            $data = implode(',', $request->subject_id);
            $value = "[" . "" . $data . "" . "]";
            Lecturar::create(['user_id' => $user_id, 'subject_id' => $value]);
        } else {

            Lecturar::whereId($user_subject_exist->id)->update(['classroom_ids' => $request->subject_id]);
        }

        return back()->with('msg', 'Subjects  Assigned  to Lecturer successfully');
    }


}
