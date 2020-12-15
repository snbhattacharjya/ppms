<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Office;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class OfficePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function view(User $user, Office $office)
    {
        /* Users of Resource Type State, District, Subdivision, Block and Office (Owner) can view
        *  specific office model,if office resource area matches with user resource area
        */ 
        if($user->attached_to->resource_type === 'App\Models\State'){
                return $user->attached_to->resource_id === $office->district->state->id 
                    ? Response::allow() 
                    : Response::deny('Only State Users of '.$office->district->state->name.' can view');
        }
        else if($user->attached_to->resource_type === 'App\Models\District'){
                return $user->attached_to->resource_id === $office->district->id 
                    ? Response::allow() 
                    : Response::deny('Only District Users of '.$office->district->name.' can view');
        }
        else if($user->attached_to->resource_type === 'App\Models\Subdivision'){
                return $user->attached_to->resource_id === $office->subdivision->id 
                    ? Response::allow() 
                    : Response::deny('Only State Users of '.$office->subdivision->name.' can view');
        }
        else if($user->attached_to->resource_type === 'App\Models\BlockMuni'){
                return $user->attached_to->resource_id === $office->block_muni->id 
                    ? Response::allow() 
                    : Response::deny('Only BlockMuni Users of '.$office->block_muni->name.' can view');
        }
        else if($user->attached_to->resource_type === 'App\Models\Office'){
                return $user->attached_to->resource_id === $office->id 
                    ? Response::allow() 
                    : Response::deny('Only Office Users of '.$office->name.' can view');
        }
        else{
                return Response::deny('You are not permitted to view the Office');
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user, Request $request)
    {
        /* Users of Resource Type State, District, Subdivision, Block and Office (Owner) can view
        *  specific office model,if office resource area matches with user resource area
        */ 
        if($user->attached_to->resource_type === 'App\Models\District'){
                return $user->attached_to->resource_id === $request->district_id 
                    ? Response::allow() 
                    : Response::deny('Only District Users of '.$user->attached_to->resource->name.' can add this office');
        }
        else if($user->attached_to->resource_type === 'App\Models\Subdivision'){
                return $user->attached_to->resource_id === $request->subdivision_id 
                    ? Response::allow() 
                    : Response::deny('Only State Users of '.$user->attached_to->resource->name.' can add this office');
        }
        else if($user->attached_to->resource_type === 'App\Models\BlockMuni'){
                return $user->attached_to->resource_id === $request->block_muni_id 
                    ? Response::allow() 
                    : Response::deny('Only BlockMuni Users of '.$user->attached_to->resource->name.' can add this office');
        }
        else{
                return Response::deny('You are not permitted to view the Office');
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function update(User $user, Office $office)
    {
        /* Users of Resource Type State, District, Subdivision, Block and Office (Owner) can view
        *  specific office model,if office resource area matches with user resource area
        */ 
        if($user->attached_to->resource_type === 'App\Models\District'){
                return $user->attached_to->resource_id === $office->district->id 
                    ? Response::allow() 
                    : Response::deny('Only District Users of '.$office->district->name.' can update');
        }
        else if($user->attached_to->resource_type === 'App\Models\Subdivision'){
                return $user->attached_to->resource_id === $office->subdivision->id 
                    ? Response::allow() 
                    : Response::deny('Only Subdivision Users of '.$office->subdivision->name.' can update');
        }
        else if($user->attached_to->resource_type === 'App\Models\BlockMuni'){
                return $user->attached_to->resource_id === $office->block_muni->id 
                    ? Response::allow() 
                    : Response::deny('Only BlockMuni Users of '.$office->block_muni->name.' can update');
        }
        else if($user->attached_to->resource_type === 'App\Models\Office'){
                return $user->attached_to->resource_id === $office->id 
                    ? Response::allow() 
                    : Response::deny('Only Office Users of '.$office->name.' can update');
        }
        else{
                return Response::deny('You are not permitted to update the Office');
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function delete(User $user, Office $office)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function restore(User $user, Office $office)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function forceDelete(User $user, Office $office)
    {
        //
    }
}
