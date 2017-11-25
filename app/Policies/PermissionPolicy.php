<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\Admin  $user
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function permission(Admin $user)
    {
        return $this->getPermission($user,22);
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
