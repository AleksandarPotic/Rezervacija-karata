<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the reservation.
     *
     * @param  \App\Admin  $user
     * @param  \App\reservation  $reservation
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,12);
    }

    /**
     * Determine whether the user can create reservations.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,9);
    }

    /**
     * Determine whether the user can update the reservation.
     *
     * @param  \App\Admin  $user
     * @param  \App\reservation  $reservation
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,10);
    }

    /**
     * Determine whether the user can delete the reservation.
     *
     * @param  \App\Admin  $user
     * @param  \App\reservation  $reservation
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,11);
    }

    /**
     * Get permission function with $user and $permission_id
     */

    /**
     * Get permission function with $user and $permission_id
     */

    protected function getPermission($user,$p_id){

        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
