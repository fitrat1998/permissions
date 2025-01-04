<?php

namespace App\Policies;

use App\Models\Index;
use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class IndexPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Admin  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Admin $user, Index $index)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Admin  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Admin $user, Index $index)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Admin $user, Index $index)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Admin $user, Index $index)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Index  $index
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Admin $user, Index $index)
    {
        //
    }
}
