<?php

namespace App\Policies;

use App\Customer;
use App\Reply;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReplyPolicy
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
     * @param  \App\Reply  $reply
     * @return mixed
     */
    public function view(Customer $customer, Reply $reply)
    {
        //
        return $customer->id === $reply->customer_id;
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
     * @param  \App\Reply  $reply
     * @return mixed
     */
    public function edit(Customer $customer, Reply $reply)
    {
        //
        return $customer->id === $reply->customer_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reply  $reply
     * @return mixed
     */
    public function delete(Customer $customer, Reply $reply)
    {
        //
        return $customer->id === $reply->customer_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reply  $reply
     * @return mixed
     */
    public function restore(Customer $customer, Reply $reply)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Reply  $reply
     * @return mixed
     */
    public function forceDelete(Customer $customer, Reply $reply)
    {
        //
    }
}
