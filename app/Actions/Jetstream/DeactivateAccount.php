<?php

namespace App\Actions\Jetstream;

class DeactivateAccount
{
    /**
     * Deactivates an account.
     *
     * @param  mixed  $user
     * @return void
     */

    public function deactivate($user)
    {
        $user->status = 0;
    }
}