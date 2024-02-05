<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminDetail;
use App\Models\CustomerDetail;
use App\Models\User;
use App\Models\VendorDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'view list products']);
        Permission::create(['name' => 'add products']);
        Permission::create(['name' => 'edit products']);
        Permission::create(['name' => 'delete products']);

        Permission::create(['name' => 'view list product categories']);
        Permission::create(['name' => 'add product categories']);
        Permission::create(['name' => 'edit product categories']);
        Permission::create(['name' => 'delete product categories']);

        Permission::create(['name' => 'view list admins']);
        Permission::create(['name' => 'add admins']);
        Permission::create(['name' => 'edit admins']);
        Permission::create(['name' => 'delete admins']);

        Permission::create(['name' => 'view list customers']);
        Permission::create(['name' => 'add customers']);
        Permission::create(['name' => 'edit customers']);
        Permission::create(['name' => 'delete customers']);

        Permission::create(['name' => 'view list vendors']);
        Permission::create(['name' => 'add vendors']);
        Permission::create(['name' => 'edit vendors']);
        Permission::create(['name' => 'delete vendors']);

        Permission::create(['name' => 'view list carts']);
        Permission::create(['name' => 'add carts']);
        Permission::create(['name' => 'edit carts']);
        Permission::create(['name' => 'delete carts']);

        Permission::create(['name' => 'view list orders']);
        Permission::create(['name' => 'add orders']);
        Permission::create(['name' => 'edit orders']);
        Permission::create(['name' => 'delete orders']);

        $customer = Role::create(['name' => 'customer']);
        $customer->syncPermissions([
            'view list carts', 
            'add carts', 
            'edit carts', 
            'delete carts', 
            'view list orders', 
            'add orders', 
            'edit orders'
        ]);


        $vendor = Role::create(['name' => 'vendor']);
        $vendor->syncPermissions([
            'view list products', 
            'add products', 
            'edit products', 
            'delete products', 
            'view list orders', 
            'add orders', 
            'edit orders'
        ]);
        
        $admin = Role::create(['name' => 'admin']);
        $admin->syncPermissions([
            'view list carts', 
            'add carts', 
            'edit carts', 
            'delete carts', 
            'view list orders', 
            'add orders', 
            'edit orders',
            'delete orders',
            'view list products', 
            'add products', 
            'edit products', 
            'delete products', 
            'view list customers', 
            'add customers', 
            'edit customers', 
            'delete customers', 
            'view list vendors', 
            'add vendors', 
            'edit vendors', 
            'delete vendors', 
        ]);

        $user_customer = User::create([
            'email' => 'customer@gmail.com',
            'username' => 'customer123',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        CustomerDetail::create([
            'user_id' => $user_customer->id,
        ]);

        $user_customer->assignRole($customer);

        $user_vendor = User::create([
            'email' => 'vendor@gmail.com',
            'username' => 'vendor123',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        VendorDetail::create([
            'user_id' => $user_vendor->id,
        ]);

        $user_vendor->assignRole($vendor);


        $user_admin = User::create([
            'email' => 'admin@gmail.com',
            'username' => 'admin123',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        AdminDetail::create([
            'user_id' => $user_admin->id,
        ]);

        $user_admin->assignRole($admin);

        $user_super_admin = User::create([
            'email' => 'superadmin@gmail.com',
            'username' => 'superadmin123',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        AdminDetail::create([
            'user_id' => $user_super_admin->id,
        ]);

        $super_admin = Role::create(['name' => 'Super-Admin']);
        $user_super_admin->assignRole($super_admin);
    }
}
