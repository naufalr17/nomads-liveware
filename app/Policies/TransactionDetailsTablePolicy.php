<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\transaction_details_table;
use App\Models\User;

class TransactionDetailsTablePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, transaction_details_table $transactionDetailsTable): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, transaction_details_table $transactionDetailsTable): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, transaction_details_table $transactionDetailsTable): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, transaction_details_table $transactionDetailsTable): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, transaction_details_table $transactionDetailsTable): bool
    {
        //
    }
}
