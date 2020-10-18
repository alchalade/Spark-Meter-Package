<?php


namespace Inensus\SparkMeter\Providers;

 use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

 use Inensus\SparkMeter\App\Listeners\MeterParameterListener;
 use Inensus\SparkMeter\App\Listeners\TransactionListener;

 class EventServiceProvider extends ServiceProvider
{
     protected $subscribe = [
         MeterParameterListener::class,
         TransactionListener::class
     ];

     /**
      * Register any events for your application.
      *
      * @return void
      */
     public function boot()
     {
         parent::boot();

         //
     }
}
