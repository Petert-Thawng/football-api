<?php
/**
 * Created by PhpStorm.
 * User: bp
 * Date: 7/3/21
 * Time: 11:19 AM
 */
namespace Peter\FootballAPI;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use App;

class FootballAPIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/football.php' =>  config_path('football.php'),
        ], 'config');

    }

    public function register()
    {
        $this->app->bind('football', function()
        {
            $client = new Client([
                'base_uri'  =>  'https://api-football-v1.p.rapidapi.com',
                'headers'   =>  [
                    "X-RapidAPI-Host" => "api-football-v1.p.rapidapi.com",
                    'X-RapidAPI-Key' => config('football.x-rapidapi-key')
                ]
            ]);

            return new FootballAPI($client);
        });

    }
}