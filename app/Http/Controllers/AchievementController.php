<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    //
    public function index()
    {
        return view('master');
    }

    public function achiv()
    {
        $achievements = [
            ['range' => '200m', 'rank' => '3rd', 'event' => 'PORKOT', 'year' => '[2019]'],
            ['range' => '4x400m', 'rank' => '2nd', 'event' => 'PORKOT', 'year' => '[2019]'],
            ['range' => '4x100m', 'rank' => '2nd', 'event' => 'PORKOT', 'year' => '[2019]'],
            ['range' => '100m', 'rank' => '3rd', 'event' => 'O2SK', 'year' => '[2019]']
        ];

        return view('profile', compact('achievements'));
    }

    public function detail($jarak)
    {
        $desc = [
            ['range' => '200m', 'details' => 'This is a certificate that I got in 2019 at PORKOT (Pekan Olahraga Kota Tangerang) event. In this event, I compete with another athlete at the high school level. I did sprint for 200 meters and got 3rd place after a few rounds. The finalist is chosen based on athletes that scored best running time in each round. All finalists will have to compete in the final round. Each winner got a charter, certificate, mascot doll, and money.', 'image' => '../Assets/AchievementDetails/200.jpg'],
            ['range' => '4x400m', 'details' => 'This is a certificate that I got in 2019 at PORKOT (Pekan Olahraga Kota Tangerang) event. In this event, I compete with another athlete at the high school level. I did relay race for 400 meters and got 2nd place after a rounds. I`m the first runner out of 4 runners. Each winner got a charter, certificate, mascot doll, and money.', 'image' => '../Assets/AchievementDetails/4x400.jpg'],
            ['range' => '4x100m', 'details' => 'This is a certificate that I got in 2019 at PORKOT (Pekan Olahraga Kota Tangerang) event. In this event, I compete with another athlete at the high school level. I did relay race for 100 meters and got 2nd place after a rounds. I`m the first runner out of 4 runners. Each winner got a charter, certificate, mascot doll, and money.', 'image' => '../Assets/AchievementDetails/4x100.jpg'],
            ['range' => '100m', 'details' => 'c', 'image' => '../Assets/AchievementDetails/100.jpg']
        ];

        $run = [];

        foreach ($desc as $d) {
            if ($d['range'] == $jarak) {
                $run = $d;
            }

            return view('details', compact('run'));
        }
    }
}
