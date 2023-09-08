<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = array(
            array(
                'name' => 'Event 1',
                'description' => 'Description for Event 1',
                'address' => '123 Main Street',
                'city' => 'City 1',
                'country' => 'Country 1',
                'zip_code' => '12345',
                'latitude' => 40.7128,
                'longitude' => -74.0060,
                'phone' => '123-456-7890',
                'email' => 'event1@example.com',
                'website' => 'https://www.event1.com',
                'price' => 25.00,
            ),
            array(
                'name' => 'Event 2',
                'description' => 'Description for Event 2',
                'address' => '456 Elm Street',
                'city' => 'City 2',
                'country' => 'Country 2',
                'zip_code' => '67890',
                'latitude' => 34.0522,
                'longitude' => -118.2437,
                'phone' => '555-555-5555',
                'email' => 'event2@example.com',
                'website' => 'https://www.event2.com',
                'price' => 30.00,
            ),
            array(
                'name' => 'Event 3',
                'description' => 'Description for Event 3',
                'address' => '789 Oak Street',
                'city' => 'City 3',
                'country' => 'Country 3',
                'zip_code' => '54321',
                'latitude' => 51.5074,
                'longitude' => -0.1278,
                'phone' => '987-654-3210',
                'email' => 'event3@example.com',
                'website' => 'https://www.event3.com',
                'price' => 20.00,
            ),
            array(
                'name' => 'Event 4',
                'description' => 'Description for Event 4',
                'address' => '101 Pine Avenue',
                'city' => 'City 4',
                'country' => 'Country 4',
                'zip_code' => '98765',
                'latitude' => 41.8781,
                'longitude' => -87.6298,
                'phone' => '111-222-3333',
                'email' => 'event4@example.com',
                'website' => 'https://www.event4.com',
                'price' => 15.00,
            ),
            array(
                'name' => 'Event 5',
                'description' => 'Description for Event 5',
                'address' => '567 Willow Lane',
                'city' => 'City 5',
                'country' => 'Country 5',
                'zip_code' => '54321',
                'latitude' => 35.682839,
                'longitude' => 139.759455,
                'phone' => '555-123-4567',
                'email' => 'event5@example.com',
                'website' => 'https://www.event5.com',
                'price' => 40.00,
            ),
            array(
                'name' => 'Event 6',
                'description' => 'Description for Event 6',
                'address' => '789 Oak Street',
                'city' => 'City 6',
                'country' => 'Country 6',
                'zip_code' => '12345',
                'latitude' => 40.7128,
                'longitude' => -74.0060,
                'phone' => '123-456-7890',
                'email' => 'event6@example.com',
                'website' => 'https://www.event6.com',
                'price' => 25.00,
            ),
            array(
                'name' => 'Event 7',
                'description' => 'Description for Event 7',
                'address' => '456 Elm Street',
                'city' => 'City 7',
                'country' => 'Country 7',
                'zip_code' => '67890',
                'latitude' => 34.0522,
                'longitude' => -118.2437,
                'phone' => '555-555-5555',
                'email' => 'event7@example.com',
                'website' => 'https://www.event7.com',
                'price' => 30.00,
            ),
            array(
                'name' => 'Event 8',
                'description' => 'Description for Event 8',
                'address' => '101 Pine Avenue',
                'city' => 'City 8',
                'country' => 'Country 8',
                'zip_code' => '98765',
                'latitude' => 41.8781,
                'longitude' => -87.6298,
                'phone' => '111-222-3333',
                'email' => 'event8@example.com',
                'website' => 'https://www.event8.com',
                'price' => 15.00,
            ),
            array(
                'name' => 'Event 9',
                'description' => 'Description for Event 9',
                'address' => '567 Willow Lane',
                'city' => 'City 9',
                'country' => 'Country 9',
                'zip_code' => '54321',
                'latitude' => 35.682839,
                'longitude' => 139.759455,
                'phone' => '555-123-4567',
                'email' => 'event9@example.com',
                'website' => 'https://www.event9.com',
                'price' => 40.00,
            ),
            array(
                'name' => 'Event 10',
                'description' => 'Description for Event 10',
                'address' => '890 Maple Road',
                'city' => 'City 10',
                'country' => 'Country 10',
                'zip_code' => '13579',
                'latitude' => 37.7749,
                'longitude' => -122.4194,
                'phone' => '987-654-3210',
                'email' => 'event10@example.com',
                'website' => 'https://www.event10.com',
                'price' => 50.00,
            ),
        );
        
        foreach($events as $event){
            // generate a random number between 1 and 10 and add as the categort_id to the event array
            $event['category_id'] =rand(1,10);

            \App\Models\Event::create($event);
        }
    }
}
