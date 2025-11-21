<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public const ROLE_PERMISSIONS = [
        'veterinarian' => [
            'index.pets',
            'show.pets',
            'store.pets',
            'edit.pets',
            'update.pets',
            'delete.pets',
        ],
        'caregiver' => [
            'index.pets',
            'show.pets',
        ],
    ];

    /**
     * Run the database seeds.
     * @throws \Throwable
     */
    public function run(): void
    {
        $this->executeInTransaction(function () {
            $this->createPermissions();
            $this->createRole();
            $this->assignPermissionsToRole();
        });
    }

    private function createPermissions(): void
    {
        collect(self::ROLE_PERMISSIONS)
            ->flatten()
            ->unique()
            ->values()
            ->each(function ($permission) {
                Permission::firstOrCreate(['name' => $permission]);
            });
    }

    private function createRole(): void
    {
        collect(self::ROLE_PERMISSIONS)
            ->keys()
            ->each(function ($role) {
                Role::firstOrCreate(['name' => $role]);
            });
    }

    private function assignPermissionsToRole(): void
    {
        collect(self::ROLE_PERMISSIONS)->each(function ($permission, $roleName) {
            $role = Role::where('name', $roleName)->firstOrFail();

            $role->syncPermissions($permission);
        });
    }

    /**
     * @throws \Throwable
     */
    private function executeInTransaction(callable $callback): void
    {
        DB::transaction($callback);
    }
}
