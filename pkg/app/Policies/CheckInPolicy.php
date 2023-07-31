<?php

namespace App\Policies;

use App\Models\CheckIn;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckInPolicy
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
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CheckIn $checkIn)
    {
        if (!$checkIn->booking) {
            return $this->viewAny($user);
        }
        return $checkIn->booking->user_id === $user->id || $this->viewAny($user);
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
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CheckIn $checkIn)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CheckIn $checkIn)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CheckIn $checkIn)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CheckIn $checkIn)
    {
        return false;
    }
}
