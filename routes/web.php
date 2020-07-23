<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// main controller
Route::get('dashboard', 'MainController@dashboard');
Route::get('admin/assign-privilege-index', 'MainController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'MainController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'MainController@AssignPrivilege');
Route::post('admin/get-user-roles', 'MainController@getUserRoles')->name('get.user.roles');
Route::get('admin/user-accounts-index', 'MainController@UserAccountsIndex');
Route::post('admin/register-user', 'MainController@RegisterUser');
Route::get('backup-index', 'MainController@Backupindex');
Route::get('backup', 'MainController@Backup');


//Reset User Password Route Start
Route::get('admin/reset-password', 'MainController@resetPasswordIndex');
Route::post('reset-password', 'MainController@resetPassword');

//Change User Password
Route::get('change-password-index', 'MainController@changePasswordIndex');
Route::post('change-password', 'MainController@changePassword');

// admin controller start

Route::get('/admin/campus-index', 'AdminController@campusIndex');
Route::post('/admin/campus/store', 'AdminController@campusStore');
Route::post('/admin/campus/edit', 'AdminController@campusEdit')->name('campus.edit');
Route::get('admin/delete-campus/{id}', 'AdminController@deleteCampus')->name('campus.delete');
Route::get('/admin/app-info-index', 'AdminController@appInfoIndex');
Route::post('/admin/info-store', 'AdminController@storeOrganizationsInfo');
Route::get('/admin/general-settings', 'AdminController@generalSettingsIndex');
Route::post('/admin/year/store', 'AdminController@storeAcademicYear');
Route::post('/admin/year/edit', 'AdminController@editAcademicYear');
Route::post('/admin/semester/store', 'AdminController@storeAcademicSemester');
Route::post('/admin/semester/edit', 'AdminController@editAcademicSemester');
Route::post('/admin/level/store', 'AdminController@storeAcademicLevel');
Route::post('/admin/level/edit', 'AdminController@editAcademicLevel');

Route::get('announcement-index', 'AdminController@AnnouncementIndex')->name('announcement');
Route::get('create-announcement', 'AdminController@CreateAnnouncement')->name('create_announcement');
Route::post('store-announcement', 'AdminController@StoreAnnouncement')->name('announcement.store');
Route::get('edit-announcement-index/{id}', 'AdminController@EditAnnouncementIndex')->name('announcement.edit');
Route::get('delete-announcement-index/{id}', 'AdminController@DeleteAnnouncementIndex')->name('announcement.delete');
Route::post('patch-announcement', 'AdminController@PatchAnnouncement')->name('announcement.patch');
Route::post('update-attachment', 'AdminController@UpdateAttachment')->name('attachment.update');
Route::get('delete-announcement/{id}', 'AdminController@DeleteAnnouncement')->name('announcement.delete');

Route::get('/admin/accounts-index', 'AdminController@AccountIndex');
Route::post('/admin/credit-account', 'AdminController@CreditAccount');

Route::get('/admin/college-settings', 'AdminController@CollegeSettingsIndex');
Route::post('/admin/colleges/department/store', 'AdminController@storeDepartmentDetails');
Route::post('/admin/colleges/department/edit', 'AdminController@editDepartmentDetails');
Route::get('/admin/colleges/department/delete/{id}', 'AdminController@deleteDepartment')->name('department.delete');
Route::post('/admin/colleges/programs/store', 'AdminController@storeProgramDetails');
Route::post('/admin/colleges/programs/edit', 'AdminController@editProgramDetails');
Route::get('/admin/colleges/programs/delete/{id}', 'AdminController@deleteProgram')->name('program.delete');
Route::post('/admin/colleges/subject/store', 'AdminController@storeSubjectDetails');
Route::post('/admin/colleges/subject/edit', 'AdminController@editSubjectDetails');
Route::get('/admin/colleges/subject/delete/{id}', 'AdminController@deleteSubject')->name('subject.delete');
Route::post('user-avatar','AdminController@updateAvatar')->name('avatar');
Route::get('user-avatar-index','AdminController@updateAvatarIndex')->name('avatar.index');
Route::get('/admin/score-sheet','AdminController@scoreSheet');

Route::get('/admin/assign-subject-index','LecturarController@assignSubjectIndex');
Route::post('/admin/get-user-subjects','LecturarController@getUserSubjects');
Route::post('/admin/assign-subjects','LecturarController@AssignSubject');
Route::get('/admin/applicant-register','AdminController@applicantIndex');
Route::post('saveApplicantBio', 'AdminController@saveApplicantBio');
Route::get('admin/applicant/list','AdminController@StudentList');
Route::get('/admin/applicant/more-details/{id}','AdminController@applicantMoreDetails')->name('applicant.view');
//admin controller endProgram
