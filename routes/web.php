<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CvController;


//Route::get('/', function () {
////    return view('welcome');
////});

//front end route
Route::get('/',[HomeController::class,'home'])->name('pro.home');
Route::get('/blog_view',[HomeController::class,'blogView'])->name('blog.view');
Route::get('/project_view/{id}',[HomeController::class,'projectView'])->name('project.view');



//Admin user route
Route::get('/user',[UserController::class,'adminUser'])->name('admin.user');
Route::post('/user_save',[UserController::class,'user_save'])->name('admin.userSave');
Route::get('/manage',[UserController::class,'userManage'])->name('admin.manage');
Route::get('/admin_edit/{id}',[UserController::class,'userEdit'])->name('admin.edit');
Route::post('/admin_update',[UserController::class,'userUpdate'])->name('user.update');
Route::post('/user_delete',[UserController::class,'userDelete'])->name('user.delete');

//slider content route
Route::get('/home',[SliderController::class,'sliderHome'])->name('slider.home');
Route::get('/slider_create',[SliderController::class,'sliderCreate'])->name('slider.create');
Route::post('/slider_save',[SliderController::class,'sliderSave'])->name('slider.save');
Route::get('/slider_edit/{id}',[SliderController::class,'sliderEdit'])->name('slider.edit');
Route::post('/slider_update',[SliderController::class,'sliderUpdate'])->name('slider.update');
Route::post('/slider_delete',[SliderController::class,'sliderDelete'])->name('slider.delete');

//about me route
Route::get('/about',[AboutController::class,'aboutHome'])->name('about.me');
Route::get('/about_create',[AboutController::class,'aboutCreate'])->name('about.create');
Route::post('/about_save',[AboutController::class,'aboutSave'])->name('about.save');
Route::get('/about_edit/{id}',[AboutController::class,'aboutEdit'])->name('about.edit');
Route::post('/about_update',[AboutController::class,'aboutUpdate'])->name('about.update');
Route::post('/about_delete',[AboutController::class,'aboutDelete'])->name('about.delete');

//resume route
Route::get('/resume',[ResumeController::class,'resumeHome'])->name('resume.home');
Route::get('/resume_create',[ResumeController::class,'resumeCreate'])->name('resume.create');
Route::post('/resume_save',[ResumeController::class,'resumeSave'])->name('resume.save');
Route::get('/resume_edit/{id}',[ResumeController::class,'resumeEdit'])->name('resume.edit');
Route::post('/resume_update',[ResumeController::class,'resumeUpdate'])->name('resume.update');
Route::post('/resume_delete',[ResumeController::class,'resumeDelete'])->name('resume.delete');

//service
Route::get('/service',[ServiceController::class,'serviceHome'])->name('service.home');
Route::get('/service_create',[ServiceController::class,'serviceCreate'])->name('service.create');
Route::post('/service_save',[ServiceController::class,'serviceSave'])->name('service.save');
Route::get('/service_edit/{id}',[ServiceController::class,'serviceEdit'])->name('service.edit');
Route::post('/service_update',[ServiceController::class,'serviceUpdate'])->name('service.update');
Route::post('/service_delete',[ServiceController::class,'serviceDelete'])->name('service.delete');

//skill
Route::get('/skill',[SkillController::class,'skillHome'])->name('skill.home');
Route::get('/skill_create',[SkillController::class,'skillCreate'])->name('skill.create');
Route::post('/skill_save',[SkillController::class,'skillSave'])->name('skill.save');
Route::get('/skill_edit/{id}',[SkillController::class,'skillEdit'])->name('skill.edit');
Route::post('/skill_update',[SkillController::class,'skillUpdate'])->name('skill.update');
Route::post('/skill_delete',[SkillController::class,'skillDelete'])->name('skill.delete');Route::get('/skill',[SkillController::class,'skillHome'])->name('skill.home');

//project
Route::get('/project',[ProjectController::class,'projectHome'])->name('project.home');
Route::get('/project_create',[ProjectController::class,'projectCreate'])->name('project.create');
Route::post('/project_save',[ProjectController::class,'projectSave'])->name('project.save');
Route::get('/project_edit/{id}',[ProjectController::class,'projectEdit'])->name('project.edit');
Route::post('/project_update',[ProjectController::class,'projectUpdate'])->name('project.update');
Route::post('/project_delete',[ProjectController::class,'projectDelete'])->name('project.delete');

//blog
Route::get('/blog',[BlogController::class,'blogHome'])->name('blog.home');
Route::get('/blog_create',[BlogController::class,'blogCreate'])->name('blog.create');
Route::post('/blog_save',[BlogController::class,'blogSave'])->name('blog.save');
Route::get('/blog_edit/{id}',[BlogController::class,'blogEdit'])->name('blog.Edit');
Route::post('/blog_update',[BlogController::class,'blogUpdate'])->name('blog.update');
Route::post('/blog_delete',[BlogController::class,'blogDelete'])->name('blog.delete');
//blog view

Route::get('/message/index',[MessageController::class,'messageIndex'])->name('message.index');
Route::post('/message',[MessageController::class,'messageStore'])->name('message.store');
Route::post('/message/delete',[MessageController::class,'messageDelete'])->name('message.delete');




//Register rotue
Route::post('/user_reg',[AuthController::class,'newUser'])->name('user_register');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function (){
//dashboard route
Route::get('/dashboard',[HomeController::class,'admin_dashboard'])->name('dashboard');

Route::get('/cv',[CvController::class,'cvIndex'])->name('cv.index');
Route::post('/upload_cv',[CvController::class,'cvUpload'])->name('cv.upload');
Route::post('/cv_download/{cv}',[CvController::class,'cvDownload'])->name('cv.download');
Route::post('/cv_delete',[CvController::class,'cvDelete'])->name('cv.delete');
});



