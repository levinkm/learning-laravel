<?php

namespace App\Models;

class Listings
{
    /**
     * Get all listings from the DB
     *
     * @return string
     */
    public static function all()
    {
        return [
            [
                'id' => 12,
                'title' => 'Jobs',
                'posititon' => "Software Developer",
                'Description' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt facilis ipsam error similique aliquam omnis molestias eligendi atque fugiat. Nihil voluptas quibusdam dolor quasi labore vel possimus maiores deserunt corporis!'
            ],
            [
                'id' => 1,
                'title' => 'Jobs',
                'posititon' => "Devops Engineer",
                'Description' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt facilis ipsam error similique aliquam omnis molestias eligendi atque fugiat. Nihil voluptas quibusdam dolor quasi labore vel possimus maiores deserunt corporis!'
            ]
        ];
    }

    /**
     * Get a listing by Id
     *
     * @param  int
     * @return array
     */
    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
