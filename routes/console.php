<?php

use Illuminate\Support\Facades\Artisan;



Artisan::command('addressCount {id}', function ($id) {
    $customer = \App\Models\Customer::where('id', $id)->with('address')->first();
    if ($customer != null) {
        $this->info("Customer with id {$id} has {$customer->address->count()} addresses");
    } else {
        $this->error("No such customer");
    }
})->purpose('Find out, how many addresses a customer has');