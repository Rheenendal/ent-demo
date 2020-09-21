<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed $user
     * @param  array $input
     *
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'favourite_movie'  => ['string', 'max:255'],
            'favourite_band'   => ['string', 'max:255'],
            'favourite_crypto' => ['string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        $user->forceFill([
            'name'                     => $input['name'],
            'email'                    => $input['email'],
            'favourite_movie'          => $input['favourite_movie'],
            'favourite_band'           => $input['favourite_band'],
            'favourite_cryptocurrency' => $input['favourite_cryptocurrency'],
        ])->save();
    }
}
