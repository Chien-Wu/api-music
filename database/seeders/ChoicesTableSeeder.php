<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choices = [
            ['option1' => 'Dog', 'option2' => 'Cat', 'description' => 'Popular pets'],
            ['option1' => 'Americano', 'option2' => 'Latte', 'description' => 'Coffee styles'],
            ['option1' => 'Tea', 'option2' => 'Coffee', 'description' => 'Beverage choices'],
            ['option1' => 'Mac', 'option2' => 'PC', 'description' => 'Computer platforms'],
            ['option1' => 'Summer', 'option2' => 'Winter', 'description' => 'Seasons of the year'],
            ['option1' => 'City', 'option2' => 'Countryside', 'description' => 'Lifestyle or environment'],
            ['option1' => 'Fiction', 'option2' => 'Non-Fiction', 'description' => 'Book genres'],
            ['option1' => 'iOS', 'option2' => 'Android', 'description' => 'Mobile operating systems'],
            ['option1' => 'Pen', 'option2' => 'Pencil', 'description' => 'Writing instruments'],
            ['option1' => 'Pizza', 'option2' => 'Burger', 'description' => 'Popular fast foods'],
            ['option1' => 'Classical', 'option2' => 'Rock', 'description' => 'Music genres'],
            ['option1' => 'Beach', 'option2' => 'Mountain', 'description' => 'Nature getaway preferences'],
            ['option1' => 'Sunrise', 'option2' => 'Sunset', 'description' => 'Daily natural phenomena'],
            ['option1' => 'Chocolate', 'option2' => 'Vanilla', 'description' => 'Ice cream flavors'],
            ['option1' => 'Early Bird', 'option2' => 'Night Owl', 'description' => 'Daily activity patterns'],
            ['option1' => 'Road Trip', 'option2' => 'Air Travel', 'description' => 'Travel methods comparison'],
            ['option1' => 'Smartphone', 'option2' => 'Tablet', 'description' => 'Portable technology devices'],
            ['option1' => 'City Life', 'option2' => 'Suburban Life', 'description' => 'Lifestyle choices in living environments'],
            ['option1' => 'Action', 'option2' => 'Comedy', 'description' => 'Movie genre preferences'],
            ['option1' => 'Introvert', 'option2' => 'Extrovert', 'description' => 'Personality type comparison'],
            ['option1' => 'Wine', 'option2' => 'Beer', 'description' => 'Alcoholic beverage preferences'],
            ['option1' => 'Train', 'option2' => 'Bus', 'description' => 'Transportation choices'],
            ['option1' => 'Hardcover', 'option2' => 'Paperback', 'description' => 'Book formats'],
            ['option1' => 'Reality TV', 'option2' => 'Documentary', 'description' => 'Television show styles'],
            ['option1' => 'Yoga', 'option2' => 'Pilates', 'description' => 'Exercise regimens'],
            ['option1' => 'Macchiato', 'option2' => 'Cappuccino', 'description' => 'Specialty coffee choices'],
            ['option1' => 'Early Adopter', 'option2' => 'Late Adopter', 'description' => 'Technology adoption styles'],
            ['option1' => 'Sneakers', 'option2' => 'Loafers', 'description' => 'Shoe style options'],
            ['option1' => 'Hiking', 'option2' => 'Biking', 'description' => 'Outdoor activity preferences'],
            ['option1' => 'Apple', 'option2' => 'Orange', 'description' => 'Popular fruits'],
            ['option1' => 'Mountains', 'option2' => 'Oceans', 'description' => 'Scenic landscape preferences'],
            ['option1' => 'Bicycles', 'option2' => 'Cars', 'description' => 'Transportation modes'],
            ['option1' => 'Burger', 'option2' => 'Hot Dog', 'description' => 'Fast food options'],
        ];

        // Insert each choice into the 'choices' table
        DB::table('choices')->insert($choices);
    }
}
