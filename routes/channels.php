<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('order', function ($user) {
    return true;
});
Broadcast::channel('delivery', function ($user) {
    return true;
});
Broadcast::channel('contact', function ($user) {
    return true;
});


 Broadcast::routes();


 Broadcast::channel('chat', function ($user) {

    return (int) $user;
});









/*  
 Broadcast::channel('broadcast-message', function ($user) {
    return (bool) $user;
}, ['guards' => ['delivery']]);



Broadcast::channel('App.Models.Delivery.{id}', function ($user, $id) {
    // Ensure the authenticated user's ID matches the $id parameter
    return (int) $user->id === (int) $id;
}); */