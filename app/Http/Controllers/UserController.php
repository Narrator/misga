<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Collection;

class UserController extends Controller
{
    
    public function newUser(Request $request)
    {
        
        if (\Auth::user())
        {
            return view('new-user');
        }
        else
        {
             return redirect('access-denied');
        }
    }

    public function viewUser(Request $request, User $user)
    {
        
        if (\Auth::user() || $user->role != 'alumni')
        {
            return view('user-profile', compact('user'));
        }
        else
        {
             return redirect('access-denied');
        }
    }
    
    public function goToEditUser(Request $request, User $user)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $user->id || \Auth::user()->isAdmin()))
        {
            return view('edit-user', compact('user'));
        }
        else
        {
            return redirect('access-denied');
        }
    }
    
    public function editUser(Request $request, User $user)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $user->id || \Auth::user()->isAdmin()))
        {
            if (strlen($request->name) > 0) {
                $user->name = $request->name;
            }
            
            if (strlen($request->phone) > 0) {
                $user->phone =  $request->phone;
            }
            
            if (strlen($request->email) > 0) {
                $user->email =  $request->email;
            }
            
            if (strlen($request->username) > 0) {
                $user->username =  $request->username;
            }
            
            if (strlen($request->password) > 0) {
                $user->password = bcrypt($request->password);
            }
            
            if (strlen($request->title) > 0) {
                $user->title =  $request->title;
            }
            
            if (strlen($request->company) > 0) {
                $user->company =  $request->company;
            }
            
            if (strlen($request->bio) > 0) {
                $user->bio =  $request->bio;
            }
            
            if (strlen($request->role) > 0) {
                $user->role =  $request->role;
            }
            
            if (strlen($request->picture) > 0) {
                $file = $request->picture;
                
                $name = time() . $file->getClientOriginalName();
                
                $file->move('user/images', $name);
                
                $path = "/user/images/{$name}";
                
                $user->picture =  $path;
            }
            
            $user->save();
            
            return redirect('user-profile/' . $user->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }
    
    public function addUser(Request $request)
    {
        
        $user = new User;
        
        if(\Auth::user())
        {
            if (strlen($request->name) > 0) {
                $user->name = $request->name;
            }
            
            if (strlen($request->phone) > 0) {
                $user->phone =  $request->phone;
            }
            
            if (strlen($request->email) > 0) {
                $user->email =  $request->email;
            }
            
            if (strlen($request->username) > 0) {
                $user->username =  $request->username;
            }
            
            if (strlen($request->password) > 0) {
                $user->password = bcrypt($request->password);
            }
            
            if (strlen($request->title) > 0) {
                $user->title =  $request->title;
            }
            
            if (strlen($request->company) > 0) {
                $user->company =  $request->company;
            }
            
            if (strlen($request->bio) > 0) {
                $user->bio =  $request->bio;
            }
            
            if (strlen($request->role) > 0) {
                $user->role =  $request->role;
            }
            
            if (strlen($request->picture) > 0) {
                $file = $request->picture;
                
                $name = time() . $file->getClientOriginalName();
                
                $file->move('user/images', $name);
                
                $path = "/user/images/{$name}";
                
                $user->picture =  $path;
            }
            
            $user->save();
            
            return redirect('user-profile/' . $user->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }
    
    public function getAlumni(Request $request)
    {
        $alumni = User::where('role', 'alumni')->get();
        return view('alumni', compact('alumni'));
    }
    
    public function getFaculty(Request $request)
    {
        $faculty = User::where('role', 'faculty')->get();
        return view('faculty', compact('faculty'));
    }
    
    public function getStudents(Request $request)
    {
        $students = User::where('role', 'student')->get();
        return view('students', compact('students'));
    }

}
