<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {

        $coaches = User::where('type', 'coach')->get();
        $players = User::where('type', 'player')->get();
        $premiums = User::where('membership', 1)->get();

        return view('admin.dashboard', compact('coaches', 'players', 'premiums', ));
    }


    public function adminTest()
    {
        // if(\Auth::guard('admin')->user()->hasRole('admin')){
        //     dd('only admin allowed');
        // }

        if (Gate::forUser(Auth::guard('admin')->user())->allows('admin')) {
            dd('only admin allowed');
        }
        abort(403);
    }

    // public function editorTest()
    // {
    //     if (Auth::guard('admin')->user()->hasRole('editor')) {
    //         dd('only editor allowed');
    //     }
    //     abort(403);
    // }


    // CATEGORY
    public function add_new_category()
    {
        return view('admin.category.add-new-category');
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $name = $request->input('name');

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->storeAs('public/productImgs', $imageName);

        // $randomFileName = Str::random(20) . '.' . $request->file('image')->getClientOriginalExtension();

        // $imagePath = $request->file('image')->storeAs('img/product_imgs', $randomFileName, 'public');

        // Save to the database
        $category = Category::create([
            'name' => $name,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.add-new-category');
    }


    public function category_list()
    {
        $category = Category::orderBy('created_at', 'desc')->get();

        return view('admin.category.list', compact('category'));
    }

    public function category_delete($id)
    {
        // Find the project by ID
        $project = Category::find($id);

        // Check if the project exists
        if (!$project) {
            return redirect()->back()->with('error', 'Project not found.');
        }

        // Delete the project
        $project->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Project deleted successfully.');

    }

    public function category_edit($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return back();
        }
        return view('admin.category.edit', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        $project = Category::find($id);
        if (!$project) {
            return redirect()->back();
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update name
        $project->name = $request->input('name');

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($project->image) {
                Storage::delete('public/productImgs/' . $project->image);
            }

            // Upload the new image with a custom name
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/productImgs', $imageName);

            // Update the image attribute in the model
            $project->image = $imageName;
        }

        $project->save();

        return redirect()->route('admin.category-list');
    }


    public function payment_list()
    {
        $payments = Payment::orderBy('created_at', 'desc')->get();

        return view('admin.payment.list', compact('payments'));
    }


    public function user_list()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('admin.users.list', compact('users'));
    }

    public function user_delete($id)
    {
        // Find the project by ID
        $project = User::find($id);

        // Check if the project exists
        if (!$project) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Delete the project
        $project->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User deleted successfully.');

    }



    public function coach_list()
    {
        $coaches = User::where('type', 'coach')->orderBy('created_at', 'desc')->get();

        return view('admin.coach.list', compact('coaches'));
    }

    public function coach_update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        // Validate the status
        $request->validate([
            'status' => 'required|in:Pending,Rejected,Verified',
        ]);

        // Update the user's status
        $user->status = $request->status;
        $user->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }




    // ADMIN PROFILE
    public function profile_view()
    {
        return view('admin.profile.profile');
    }

    public function profile_update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|string',
        ]);

        // Get the authenticated admin user
        $adminId = 1;
        $admin = Admin::find($adminId);

        // Check if the admin exists
        if (!$admin) {
            return back()->with('error', 'Admin not found.');
        }

        // Check if the provided password matches the stored hash
        if ($request->password && !Hash::check($request->password, $admin->password)) {
            return redirect()->route('admin.dashboard');
        }

        // Update the admin details
        $admin->name = $request->name;
        $admin->email = $request->email;

        // Update the password if a new one is provided
        if ($request->npassword) {
            $admin->password = Hash::make($request->npassword);
        }

        $admin->save();

        return back()->with('success', 'Profile updated successfully.');
    }
}
