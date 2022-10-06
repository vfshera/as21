<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            "topic" => $this->faker->sentence,
            "type_of_paper" => $this->faker->randomElement([
                "Research Paper",
                "White Paper",
                "Class Assignment",
                "Case Study",
                "Dissertation",
                "Proofreading",
                "Editing",
                "Captioning",
                "Transcription",
            ]),
            "subject_area" => $this->faker->jobTitle,
            "paper_details" => $this->faker->sentence(50),
            "additional_materials" => "/orders/materials/" . Str::random(12) . ".zip",
            "paper_format" => $this->faker->currencyCode,
            "prefered_english" => $this->faker->languageCode,
            "number_of_sources" => $this->faker->randomDigit,
            "number_of_pages" => $this->faker->randomDigit,
            "spacing" => $this->faker->randomElement(["Double Spacing", "Single Spacing"]),
            "academic_level" => $this->faker->randomElement(["School", "University", "Post Graduate"]),
            "urgency" => $this->faker->randomElement([
                "6 Hours", "12 Hours", "1 Day", "2 Days",
                "3 Days", "4 Days", "5 Days", "6 Days",
                "1 Week", "10 Days", "2 Weeks",
                "1 Month", "2 Months",
            ]),
            "stage" => random_int(0, 4),
            "service_type" => random_int(0, 2),
            "cost" => random_int(1000, 20000),
            "user_id" => 1,
        ];
    }
}