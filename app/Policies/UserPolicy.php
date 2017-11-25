<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\Admin  $user
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,20);
    }

    /**
     * Determine whether the user can create users.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\Admin  $user
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,18);
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\Admin  $user
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,19);
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
