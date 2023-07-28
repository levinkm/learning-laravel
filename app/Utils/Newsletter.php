<?php

namespace App\Utils;

use MailchimpMarketing\ApiClient;



class Newsletter

/*
 * A class to help handle all the functions used by rhe newsletter
 * It will be used by the controller
 * The functions will be static
*/
{
    public function subscribe(string $email, string $list_id, string $apikey, string $server)

    {

        return $this->client($apikey, $server)->lists->addListMember($list_id, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }

    public function client(string $apikey = null, string $server)
    {
        $apikey ??= config('services.mailchimp.key');

        return (new ApiClient())->setConfig([
            'apiKey' => $apikey,
            'server' => $server //'us9'
        ]);
    }
}
