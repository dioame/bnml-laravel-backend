<?php

namespace Database\Seeders;

use App\Models\Activities;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lib_activities_id = [1, 2];
        $activities = [
            "Team meeting",
            "Project brainstorming session",
            "Skill development workshop",
            "One-on-one with manager",
            "Team lunch",
            "Client presentation",
            "Online training course",
            "Code review session",
            "Team-building exercise",
            "Product demo",
            "Performance review",
            "Office trivia game",
            "Hackathon",
            "Daily stand-up meeting",
            "Cross-department collaboration",
            "Employee recognition event",
            "Work from home day",
            "Feedback session",
            "Wellness activity",
            "Problem-solving challenge"
        ];

        $areas = [
            "New York City",
            "Los Angeles",
            "Chicago",
            "Houston",
            "Phoenix",
            "Philadelphia",
            "San Antonio",
            "San Diego",
            "Dallas",
            "San Jose",
        ];

        foreach ($activities as $value) {
            list($randomStartDate, $randomEndDate) = $this->getRandomStartEndDate();

            Activities::create([
                'lib_activity_id' => $lib_activities_id[array_rand($lib_activities_id)],
                'name' => $value,
                'description' => $value,
                'area' => $areas[array_rand($areas)],
                'start_date' => $randomStartDate,
                'end_date' => $randomEndDate
            ]);
        }
    }

    function getRandomDate($start, $end) {
        $startTimestamp = strtotime($start);
        $endTimestamp = strtotime($end);
        $randomTimestamp = mt_rand($startTimestamp, $endTimestamp);
        return date("Y-m-d", $randomTimestamp);
    }

    function getRandomStartEndDate() {
        $startDate = $this->getRandomDate("2024-01-01", "2025-12-31");
        $endDate = $this->getRandomDate($startDate, "2025-12-31");

        // Ensure end date is after start date
        while (strtotime($endDate) <= strtotime($startDate)) {
            $endDate = $this->getRandomDate($startDate, "2025-12-31");
        }

        return [$startDate, $endDate];
    }
}
