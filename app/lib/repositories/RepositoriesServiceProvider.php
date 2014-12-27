<?php
/**
 * Created by PhpStorm.
 * User: Jarbit
 * Date: 17/11/2014
 * Time: 12:17
 */

namespace Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    public function register(){
        $app = $this->app;
        $app->bind('Repositories\Administrator\ProductRepository', 'Repositories\Administrator\ProductEloquent');
    }
} 