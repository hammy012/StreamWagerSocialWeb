<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

}
