<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class TidingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tiding.
     *
     * @param  \App\Admin  $user
     * @param  \App\tiding  $tiding
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,16);
    }

    /**
     * Determine whether the user can create tidings.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,13);
    }

    /**
     * Determine whether the user can update the tiding.
     *
     * @param  \App\Admin  $user
     * @param  \App\tiding  $tiding
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,14);
    }

    /**
     * Determine whether the user can delete the tiding.
     *
     * @param  \App\Admin  $user
     * @param  \App\tiding  $tiding
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,15);
    }
    /**
     * Determine whether the user can delete the tiding.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function message(Admin $user)
    {
        return $this->getPermission($user,23);
    }

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
