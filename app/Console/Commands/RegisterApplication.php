<?php


namespace App\Console\Commands;

use App\Models\RegisteredApplication;
use Illuminate\Console\Command;

class RegisterApplication extends Command
{

    protected $signature = 'register:application';
    protected $description = 'Register a new application to the signature service.';

    public function handle()
    {
        $registerd = RegisteredApplication::create(["name"=>"a name"]);

        return true;
    }
}
