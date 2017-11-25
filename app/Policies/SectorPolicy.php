<?php

namespace App\Policies;

use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the sector.
     *
     * @param  \App\Admin  $user
     * @param  \App\sector  $sector
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user,8);
    }

    /**
     * Determine whether the user can create sectors.
     *
     * @param  \App\Admin  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user,5);
    }

    /**
     * Determine whether the user can update the sector.
     *
     * @param  \App\Admin  $user
     * @param  \App\sector  $sector
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user,6);
    }

    /**
     * Determine whether the user can delete the sector.
     *
     * @param  \App\Admin  $user
     * @param  \App\sector  $sector
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user,7);
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
