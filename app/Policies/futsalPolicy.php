<?php

namespace App\Policies;

use App\Models\Admin\Futsal;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FutsalPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }


    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->userCanDo('Futsal', 'browse');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return mixed
     */
    public function view(User $user, Futsal $futsal)
    {
        return $user->userCanDo('Futsal', 'read');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->userCanDo('Futsal', 'add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return mixed
     */
    public function update(User $user, Futsal $futsal)
    {
        return $user->userCanDo('Futsal', 'edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return mixed
     */
    public function delete(User $user, Futsal $futsal)
    {
        return $user->userCanDo('Futsal', 'delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return mixed
     */
    public function restore(User $user, Futsal $futsal)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Futsal  $futsal
     * @return mixed
     */
    public function forceDelete(User $user, Futsal $futsal)
    {
        return true;
    }
}
