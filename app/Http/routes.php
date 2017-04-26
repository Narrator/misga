<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/access-denied', function () {
    return view('access-denied');
});


Route::get('/edit-user/{user}', 'UserController@goToEditUser');

Route::patch('/handle-edit-user/{user}', 'UserController@editUser');

Route::get('/user-profile/{user}', 'UserController@viewUser');

Route::get('/new-user', ['uses' => 'UserController@newUser', 'middleware' => ['auth', 'admin']]);

Route::post('/add-user', ['uses' => 'UserController@addUser', 'middleware' => ['auth', 'admin']]);


Route::get('/edit-news/{post}', 'PostController@goToEditPost');

Route::patch('/handle-edit-news/{post}', 'PostController@editPost');

Route::get('/news-single/{post}', 'PostController@viewPost');

Route::get('/new-news', 'PostController@newPost')->middleware('auth');

Route::post('/add-news', 'PostController@addPost')->middleware('auth');

Route::get('/news', 'PostController@allPosts');


Route::get('/edit-event/{event}', 'EventController@goToEditEvent');

Route::patch('/handle-edit-event/{event}', 'EventController@editEvent');

Route::get('/new-event', 'EventController@newEvent')->middleware('auth');

Route::post('/add-event', 'EventController@addEvent')->middleware('auth');

Route::get('/events', 'EventController@allEvents');


Route::get('/edit-job/{job}', 'JobController@goToEditJob');

Route::patch('/handle-edit-job/{job}', 'JobController@editJob');

Route::get('/job-single/{job}', 'JobController@viewJob');

Route::get('/new-job', 'JobController@newJob')->middleware('auth');

Route::post('/add-job', 'JobController@addJob')->middleware('auth');

Route::get('/jobs', 'JobController@allJobs');


Route::get('/edit-course/{course}', 'CourseController@goToEditCourse');

Route::patch('/handle-edit-course/{course}', 'CourseController@editCourse');

Route::get('/course-single/{course}', 'CourseController@viewCourse');

Route::get('/new-course', 'CourseController@newCourse')->middleware('auth');

Route::post('/add-course', 'CourseController@addCourse')->middleware('auth');

Route::get('/courses', 'CourseController@allCourses');


Route::get('/alumni', 'UserController@getAlumni')->middleware('auth');

Route::get('/faculty', 'UserController@getFaculty');

Route::get('/students', 'UserController@getStudents');

