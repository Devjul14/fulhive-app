<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTeamsRequest;
use App\Models\Teams;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class TeamsController extends Controller
{
    public function addteams(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:teams',
            'phone' => 'required',
            'role_id' => 'required',
            'gender' => 'required',
        ]);

        $roleId = $request->role_id;

        $owner = Auth::user()->id;
        $hashedPassword = bcrypt($request->password);

        $user = User::create($request->all() + [
            'owner_id' => $owner,
            'password' => $hashedPassword
        ]);


        $user->assignRole($roleId);

        return redirect()
            ->route('setting_account.index')
            ->with('success', 'New Teams has been created!');
    }

    public function updateteams(Request $request, User $user)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => Rule::unique('users')->ignore($user->id),
            'phone' => 'required',
            'role_id' => 'required',
            'gender' => 'required',
        ]);

        $roleId = $request->role_id;

        $owner = Auth::user()->id;
        $updateData = $validatedData;
        if ($request->has('password') && $request->password != '') {
            $updateData['password'] = bcrypt($request->password);
        }
        $updateData['owner_id'] = $owner;

        $user->update($updateData);

        $user->syncRoles($roleId);

        return redirect()
            ->route('setting_account.index')
            ->with('success', 'Team has been updated!');
    }

    public function deleteteams(User $user)
    {
        //
        $user->delete();

        return redirect()
            ->back()
            ->with('success', 'Team has been deleted!');
    }
}
