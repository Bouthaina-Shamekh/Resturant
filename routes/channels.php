<?php

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
