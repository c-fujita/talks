<?php

namespace App\Policies;

use App\Customer;
use App\Reference;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReferencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function viewAny(Customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reference  $reference
     * @return mixed
     */
    public function view(Customer $customer, Reference $reference)
    {
        //
        return $customer->id === $reference->customer_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function create(Customer $customer)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reference  $reference
     * @return mixed
     */
    public function edit(Customer $customer, Reference $reference)
    {
        //
        return $customer->id === $reference->customer_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reference  $reference
     * @return mixed
     */
    public function delete(Customer $customer, Reference $reference)
    {
        //
        return $customer->id === $reference->customer_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reference  $reference
     * @return mixed
     */
    public function restore(Customer $customer, Reference $reference)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reference  $reference
     * @return mixed
     */
    public function forceDelete(Customer $customer, Reference $reference)
    {
        //
    }
}
