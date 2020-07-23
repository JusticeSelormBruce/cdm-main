<?php

namespace App\Http\Controllers;

use App\Academicyear;
use App\Avatar;
use App\Campus;
use App\classes\DeleteFile;
use App\Department;
use App\Info;
use App\Level;
use App\MainAccount;
use App\Post;
use App\Program;
use App\Semester;
use App\Student;
use App\Subjects;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    private $model, $avatar, $applicant;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new Info();
        $this->avatar = new Avatar();
        $this->applicant = new Student();
    }

    public function appInfoIndex()
    {
        return view('admin.info.index');
    }

    public function campusStore(Request $request)
    {
        $data = $request->except('_token');
        Campus::create($data);
        return back()->with('msg', 'Campus added  successfully');
    }

    public function campusEdit(Request $request)
    {
        $data = $request->except('_token', 'id');
        Campus::whereId($request->id)->update($data);
        return back()->with('msg', 'Campus edited  successfully');
    }

    public function deleteCampus($id)
    {
        Campus::whereId($id)->delete();
        return back()->with('msg', 'Campus deleted successfully');
    }

    public function campusIndex()
    {
        $campuses = Campus::all();
        return view('admin.campus.index', compact('campuses'));
    }

    public function storeOrganizationsInfo()
    {
        $data = $this->model->LogoData();
        Info::create($data);
        return back()->with('msg', 'Organizational Information Updated  successfully');
    }

    public function generalSettingsIndex()
    {
        $year = Academicyear::all();
        $semester = Semester::all();
        $level = Level::all();
        return view('admin.settings.index', compact('year', 'semester', 'level'));
    }

    public function storeAcademicYear(Request $request)
    {
        Academicyear::create(['year' => $request->year]);
        return back()->with('msg', 'Academic Year saved successfully');
    }

    public function editAcademicYear(Request $request)
    {
        Academicyear::whereId($request->id)->update(['year' => $request->year]);
        return back()->with('msg', 'Academic Year Edited successfully');
    }

    public function storeAcademicSemester(Request $request)
    {
        Semester::create(['semester' => $request->semester]);
        return back()->with('msg', 'Academic Semester saved successfully');
    }

    public function editAcademicSemester(Request $request)
    {
        Semester::whereId($request->id)->update(['semester' => $request->semester]);
        return back()->with('msg', 'Academic Semestr Edited successfully');
    }

    public function storeAcademicLevel(Request $request)
    {
        Level::create(['level' => $request->level]);
        return back()->with('msg', 'Academic Level saved successfully');
    }

    public function editAcademicLevel(Request $request)
    {
        Level::whereId($request->id)->update(['level' => $request->level]);
        return back()->with('msg', 'Academic Level  Edited successfully');
    }

    public function AnnouncementIndex()
    {
        $announcements = Post::where('user_id', Auth::id())->orderByDesc('id')->get();
        return view('admin.announcement.index', compact('announcements'));
    }

    public function CreateAnnouncement()
    {
        return view('admin.announcement.create');
    }

    public function StoreAnnouncement()
    {
        $model = new Post();
        Post::create($model->announcementData());
        return redirect('announcement-index')->with('msg', 'Announcement Created Successfully');
    }

    public function EditAnnouncementIndex($id)
    {
        $data = Post::whereId($id)->first();
        return view('admin.announcement.edit', compact('data'));
    }

    public function PatchAnnouncement(Request $request)
    {
        $model = new Post();
        $model->updateAnnouncement($request->id);
        return back()->with('msg', 'Post Updated Successfully');
    }

    public function UpdateAttachment(Request $request)
    {
        $model = new Post();
        $path = $model->getAttachmentPath($request->attachment);
        $model->updateAttachment($request->id, $path);
        return back()->with('msg', 'Post Updated Successfully');
    }

    public function DeleteAnnouncement($id)
    {
        Post::whereId($id)->delete();
        $delFile = new DeleteFile();
        $delFile->removeFile('Post', $id, 'attachment');
        return back()->with('msg', 'Post Deleted Successfully');
    }

    public function AccountIndex()
    {
        $academic_year = Academicyear::all();
        $semester = Semester::all();
        $accounts = MainAccount::all();
        $user = User::where('user_type', 'student')->get()->all();
        return view('admin.accounts.index', compact('accounts', 'academic_year', 'semester', 'user'));
    }

    public function CreditAccount(Request $request)
    {
        $data = $request->except('_token');
        MainAccount::create($data);
        return back()->with('msg', 'Account Credited Successfully');
    }

    public function CollegeSettingsIndex()
    {
        $departments = Department::all();
        $programmes = Program::all();
        $subjects = Subjects::all();
        return view('admin.college.index', compact('departments', 'programmes', 'subjects'));
    }

    public function storeDepartmentDetails(Request $request)
    {
        $details = $request->except('_token');
        Department::create($details);
        return back()->with('msg', 'Department Added Successfully');
    }

    public function editDepartmentDetails(Request $request)
    {
        $details = $request->except('_token', 'id');
        Department::whereId($request->id)->update($details);
        return back()->with('msg', 'Department Updated Successfully');
    }

    public function deleteDepartment($id)
    {

        Department::whereId($id)->delete();
        return back()->with('msg', 'Department Deleted Successfully');
    }

    public function storeProgramDetails(Request $request)
    {
        $details = $request->except('_token');
        Program::create($details);
        return back()->with('msg', 'Program Added Successfully');
    }

    public function editProgramDetails(Request $request)
    {
        $details = $request->except('_token', 'department_id');
        Program::whereId($request->id)->update($details);
        return back()->with('msg', 'Program Updated Successfully');
    }

    public function deleteProgram($id)
    {

        Program::whereId($id)->delete();
        return back()->with('msg', 'Program Deleted Successfully');
    }

    public function storeSubjectDetails(Request $request)
    {

        $details = $request->except('_token');
        Subjects::create($details);
        return back()->with('msg', 'Subject Added Successfully');
    }

    public function editSubjectDetails(Request $request)
    {
        $details = $request->except('_token', 'department_id');
        Subjects::whereId($request->id)->update($details);
        return back()->with('msg', 'Subject Updated Successfully');
    }

    public function deleteSubject($id)
    {
        Subjects::whereId($id)->delete();
        return back()->with('msg', 'Subject Deleted Successfully');
    }

    public function updateAvatar()
    {
        $data = $this->avatar->AvatarData();
        DB::table('avatars')->updateOrInsert($data);
        return back()->with('msg', 'Avatar Updated Successfully');
    }

    public function updateAvatarIndex()
    {
        return view('avatar.index');
    }

    public function scoreSheet()
    {
        return view('admin.scores.index');
    }

    public function applicantIndex()
    {
        $user = User::where('user_type', 'student')->get()->all();
        return view('admin.student.bioIndex', compact('user'));
    }

    public function saveApplicantBio()
    {
        $applicantBioDetails = $this->applicant->data();
        Student::create($applicantBioDetails);
        return back()->with('msg', 'Applicant registered Successfully');
    }

    public function StudentList()
    {
        $user = User::where('user_type', 'student')->get()->all();
        return view('admin.student.list', compact('user'));
    }

    public function applicantMoreDetails($id)
    {
        $avatar = Avatar::OrderByDesc('id')->where('user_id', $id)->get()->first();
        $applicant = Student::where('user_id', $id)->first();
        return view('admin.student.view', compact('applicant', 'avatar'));
    }
}
