<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // upload profile photo
        if ($request->hasFile('image_user')) {
            if ($request->user()->image_user && file_exists(storage_path('app/public/' . $request->user()->image_user))) {
                Storage::delete('public/' . $request->user()->image_user);
            }
            $image_user = $request->file('image_user')->store('images', 'public');
            $request->user()->image_user = $image_user;
        } else {
            // hapus gambar profil jika tombol hapus diklik
            if ($request->has('delete_image')) {
                if ($request->user()->image_user && file_exists(storage_path('app/public/' . $request->user()->image_user))) {
                    Storage::delete('public/' . $request->user()->image_user);
                }
                $request->user()->image_user = null;
            }
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'Profile Updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();
        
        $user = Users::findOrFail($id);
        $user-> keranjang()->update(['ide_users' => null]);
        $user-> ulasan()->update(['ide_users' => null]);
        $user-> transaksi()->update(['ide_users' => null]);
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
