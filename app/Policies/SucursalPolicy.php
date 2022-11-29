<?php

namespace App\Policies;

use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SucursalPolicy
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
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Sucursal $sucursal)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Sucursal $sucursal)
    {
        //solo el usuario que creó la sucursal podrá editarla
        return $user->id == $sucursal->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Sucursal $sucursal)
    {
        //solo el usuario que creó la sucursal podrá eliminarla
        return $user->id == $sucursal->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Sucursal $sucursal)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Sucursal  $sucursal
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Sucursal $sucursal)
    {
        //
    }
}
