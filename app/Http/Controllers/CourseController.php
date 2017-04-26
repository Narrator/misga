<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Course;

use Illuminate\Support\Collection;

class CourseController extends Controller
{
    
    public function allCourses(Request $request)
    {
        $courses = Course::all();
        foreach  ($courses as $course) {
            $user = User::where('id', $course->user_id)->first();
            $course->user = $user;
        }
        return view('courses', compact('courses'));
    }
    
    public function newCourse(Request $request)
    {
        
        if (\Auth::user())
        {
            return view('new-course');
        }
        else
        {
             return redirect('access-denied');
        }
    }

    public function viewCourse(Request $request, Course $course)
    {
        $user = User::where('id', $course->user_id)->first();
        return view('course-single', compact('course', 'user'));
    }
    
    public function goToEditCourse(Request $request, Course $course)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $course->user_id || \Auth::user()->isAdmin()))
        {
            return view('edit-course', compact('course'));
        }
        else
        {
            return redirect('access-denied');
        }
    }
    
    public function editCourse(Request $request, Course $course)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $course->user_id || \Auth::user()->isAdmin()))
        {
            if (strlen($request->title) > 0) {
                $course->title = $request->title;
            }
            
            if (strlen($request->description) > 0) {
                $course->description = $request->description;
            }
            
            if (strlen($request->semester) > 0) {
                $course->semester = $request->semester;
            }
            
            if (strlen($request->location) > 0) {
                $course->location = $request->location;
            }
            
            if (strlen($request->duration) > 0) {
                $course->duration = $request->duration;
            }
            
            if (strlen($request->{'start-date'}) > 0) {
                $course->{'start-date'} = $request->{'start-date'};
            }
            
            if (strlen($request->picture) > 0) {
                $file = $request->picture;
                
                $name = time() . $file->getClientOriginalName();
                
                $file->move('course/images', $name);
                
                $path = "/course/images/{$name}";
                
                $course->picture =  $path;
            }
            
            $course->save();
            
            return redirect('course-single/' . $course->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }
    
    public function addCourse(Request $request)
    {
        
        $course = new Course;
        
        if(\Auth::user())
        {

            if (strlen($request->title) > 0) {
                $course->title = $request->title;
            }
            
            if (strlen($request->description) > 0) {
                $course->description = $request->description;
            }
            
            if (strlen($request->semester) > 0) {
                $course->semester = $request->semester;
            }
            
            if (strlen($request->location) > 0) {
                $course->location = $request->location;
            }
            
            if (strlen($request->duration) > 0) {
                $course->duration = $request->duration;
            }
            
            if (strlen($request->{'start-date'}) > 0) {
                $course->{'start-date'} = $request->{'start-date'};
            }
            
            if (strlen($request->picture) > 0) {
                $file = $request->picture;
                
                $name = time() . $file->getClientOriginalName();
                
                $file->move('course/images', $name);
                
                $path = "/course/images/{$name}";
                
                $course->picture =  $path;
            }
            
            $course->status = 'pending';
            
            $course->user_id = \Auth::user()->id;
            
            $course->save();
            
            return redirect('course-single/' . $course->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }

}
