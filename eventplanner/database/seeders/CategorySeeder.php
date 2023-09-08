<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_categories = array(
        
        array(
            'name' => 'Music',
            'description' => 'Events related to music performances and concerts.',
        ),
        array(
            'name' => 'Sports',
            'description' => 'Events related to sports and athletic competitions.',
        ),
        array(
            'name' => 'Art and Culture',
            'description' => 'Events showcasing art exhibitions, cultural festivals, and more.',
        ),
        array(
            'name' => 'Food and Drink',
            'description' => 'Events featuring food and beverage tastings, culinary festivals, and more.',
        ),
        array(
            'name' => 'Technology',
        'description' => 'Events focused on technology, innovation, and tech-related topics.',
    
        ),
        array(
            'name' => 'Business',
            'description' => 'Events related to entrepreneurship, business conferences, and networking.',
        ),
        array(
            'name' => 'Health and Wellness',
            'description' => 'Events promoting health, fitness, and wellness activities.',
        ),
        array(
            'name' => 'Education',
            'description' => 'Events related to education, workshops, seminars, and training programs.',
        ),
        array(
            'name' => 'Family and Kids',
        'description' => 'Family-friendly events and activities for children and parents.',
        ),
        array(
            'name' => 'Community',
            'description' => 'Events that bring communities together for various purposes.',
        ));

        foreach ($event_categories as $event_category) {
            \App\Models\Category::create($event_category);
        }
    }
}



