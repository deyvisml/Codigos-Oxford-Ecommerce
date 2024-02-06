<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Order;
use App\Models\Permission;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        try {
            $permission = Permission::where('name', 'orders-read-any')->first();
            $roles = $permission->roles;

            return $user->hasRole($roles);
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can view its own models.
     */
    public function viewOwn(User $user): bool
    {
        try {
            $permission = Permission::where('name', 'orders-read-own')->first();
            $roles = $permission->roles;

            return $user->hasRole($roles);
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Order $order): bool
    {
        try {
            $permission = Permission::where('name', 'orders-read-own')->first();
            $roles = $permission->roles;

            if ($user->hasRole($roles) && $order->user_id == $user->id) return true;

            $permission = Permission::where('name', 'orders-read-any')->first();
            $roles = $permission->roles;

            return $user->hasRole($roles);
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        try {
            $permission = Permission::where('name', 'orders-create')->first();
            $roles = $permission->roles;

            return $user->hasRole($roles);
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Order $order): bool
    {
        try {
            $permission = Permission::where('name', 'orders-update-own')->first();
            $roles = $permission->roles;

            if ($user->hasRole($roles) && $order->user_id == $user->id) return true;

            $permission = Permission::where('name', 'orders-update-any')->first();
            $roles = $permission->roles;

            return $user->hasRole($roles);
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Order $order): bool
    {
        try {
            $permission = Permission::where('name', 'orders-delete-own')->first();
            $roles = $permission->roles;

            if ($user->hasRole($roles) && $order->user_id == $user->id) return true;

            $permission = Permission::where('name', 'orders-delete-any')->first();
            $roles = $permission->roles;

            return $user->hasRole($roles);
        } catch (\Throwable $e) {
            return false;
        }
    }
}
