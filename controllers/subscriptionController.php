<?php

class SubscriptionController
{

    public function subscribe()
    {
        $data = Flight::request()->data;
        $subscription = new subscription($data);
        $subscription->store();
        Flight::redirect("/");
    }
}
