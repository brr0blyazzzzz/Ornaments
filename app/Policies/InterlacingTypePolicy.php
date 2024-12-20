<?php

namespace App\Policies;

use App\Models\User;
use App\Models\InterlacingType;
use Illuminate\Auth\Access\HandlesAuthorization;

class InterlacingTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InterlacingType  $interlacingType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, InterlacingType $interlacingType)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InterlacingType  $interlacingType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, InterlacingType $interlacingType)
    {
        return $user->id == $interlacingType->creator_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InterlacingType  $interlacingType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, InterlacingType $interlacingType)
    {
        return $user->id == $interlacingType->creator_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InterlacingType  $interlacingType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, InterlacingType $interlacingType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InterlacingType  $interlacingType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, InterlacingType $interlacingType)
    {
        //
    }
}
