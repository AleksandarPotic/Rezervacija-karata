<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class MatchPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the match.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,4);
    }

    /**
     * Determine whether the user can create matches.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,1);
    }

    /**
     * Determine whether the user can update the match.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the user can delete the match.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,3);
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
