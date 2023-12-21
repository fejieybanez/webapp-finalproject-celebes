<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB; 


class UserController extends Controller
{
//this display a list of all users, retrieving all users from the database, and returns the users.users view, passing the retrieved users and a header for display
    public function index()
    {
        return view('users.users', [
            'header' => 'Users Management',
            'users' =>  User::all()
        ]);
    }
//Renders a form for adding a new user. Returns the users.form view, passing a header for display
    public function form()
    {
        return view('users.form', [
            'header' => 'Add Users',

        ]);
    }
//Renders a form for changing a specific user's password. Retrieves the user with the specified ID using User::find($id). Returns the users.form_password view, passing the retrieved user and a header for display.
    public function passwordForm($id)
    {
        $user = User::find($id);
        return view('users.form_password', [
            'header' => 'Change Password',
            'user'      => $user
        ]);
    }
//Updates a user's password in the database
    public function changePassword(Request $request, $id)
    {
        
        DB::table('users')->where('id', $request->id)->update([
            'password' => Hash::make($request->password)
        ]);

        session()->flash('status', 'Password Updated Successfully!');

        return redirect('/users');
    }

/// Creates a new user in the database.  Redirects the user back to the users list page
    public function store(Request $request)
    {

        //FOR VALIDATION. Validates the user input using Laravel's validation rules.
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

//Creates a new user instance using User::create(). Hashes the password before storing it
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
//Sets a flash message to indicate success.    //Redirects the user back to the users list page
        session()->flash('status', 'Added User Successfully!');
        return redirect('/users');
    }
//Retrieves a specific user's information for editing
     public function show($id)
     {
         $user = User::find($id);
 
         return view('users.form', [
                 'header'    => 'Update User',
                 'user'      => $user
             ]); 
     }

    //Updates an existing user's information in the database
    public function update(Request $request, $id)
    {
        // For Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        $user = User::find($id);

        $user->update($request->all());

        session()->flash('status', 'Updated User Successfully!');
 
        return redirect('/users');
        // return redirect('/users/update/' . $user->id);
    }
//Deletes a specific user from the database
    public function destroy(Request $request, $id){
        
        $user = User::find($id);
        $user->delete($request->all());
        session()->flash('status', 'Data Successfully Deleted!');
        return redirect('/users');
    }

    
}
