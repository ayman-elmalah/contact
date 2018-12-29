<?php

namespace AymanElmalah\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {
  /**
   * Boot the service provider.
   *
   * @return void
   */
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/views', 'contact');
    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    $this->mergeConfigFrom(__DIR__.'/config/pkg.php', 'contact');
    $this->publishes([__DIR__.'/config/pkg.php' => config_path('pkg.php')]);
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {

  }
}
