<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Type;
use Illuminate\Auth\Access\HandlesAuthorization;

class TypePolicy
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
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Type $type)
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
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Type $type)
    {
        return $user->id == $type->creator_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Type $type)
    {
        return $user->id == $type->creator_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Type $type)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Type $type)
    {
        //
    }
}
