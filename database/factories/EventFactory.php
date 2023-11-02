<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'familyName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->phoneNumber,
            'eventDate' => $this->faker->date,
            'eventLocation' => $this->faker->city,
            'eventType' => $this->faker->word,
            'streetNumber' => $this->faker->buildingNumber,
            'streetName' => $this->faker->streetName,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'information' => $this->faker->paragraph,
        ];
    }
}
