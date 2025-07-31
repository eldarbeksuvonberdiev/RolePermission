<?php

namespace App\Console\Commands;

use App\Models\RolePermission\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class RefreshPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates permissions by using all the routes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $routes = Route::getRoutes();

        foreach ($routes as $route) {

            if (in_array($route->uri(), ['up', 'login', 'authenticate', 'logout']) || str_starts_with($route->uri(), 'storage/')) {
                continue;
            }

            $routeName = $route->getName();

            if (!Permission::where('route_name', $routeName)->exists()) {

                Permission::create([
                    'name' => str_replace('.', '-', $routeName),
                    'route_name' => $routeName,
                ]);

            }
        }
        $this->info('Permissions have been created successfully.');
    }
}
