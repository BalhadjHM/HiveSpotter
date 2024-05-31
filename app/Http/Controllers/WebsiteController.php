<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // display the dashboard
    public function overview(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('dashboard.overview');
    }

    // Calculate website speed using cURL
    public function speed($url)
    {
        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // Timeout in seconds

        // Execute cURL session
        $start = microtime(true);
        $response = curl_exec($ch);
        $end = microtime(true);

        // Close cURL session
        curl_close($ch);

        // Calculate speed in milliseconds
        return number_format(($end - $start), 1);
    }

    // Calculate website uptime using cURL and return as percentage
    public function uptime($url)
    {
        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // Timeout in seconds

        // Execute cURL session
        $response = curl_exec($ch);

        // Get total time taken for the request in milliseconds
        $totalTime = curl_getinfo($ch, CURLINFO_TOTAL_TIME);

        // Close cURL session
        curl_close($ch);

        // Calculate uptime percentage
        // Assuming uptime is considered as 200 and 3xx status codes
        if ($totalTime > 0) {
            // Convert milliseconds to seconds
            $totalTimeSeconds = $totalTime / 1000;

            // Calculate uptime percentage
            $uptime = (1 - ($totalTimeSeconds / 10)) * 100; // 10 seconds is assumed as total time
            return round($uptime, 1); // Round to two decimal places
        } else {
            return 0; // If the total time is 0, return uptime as 0%
        }
    }


    // display the dashboard index page
    public function index($userId): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // get the websites of the user
        $trackers = Website::where('user_id', $userId)->get();

        foreach($trackers as $tracker) {
            // set the status of the website
            if($tracker->status == 1){
                $tracker->status = "ON";
            } else {
                $tracker->status = "OFF";
            }

            // set the uptime of the website
            $tracker->uptime = $this->uptime($tracker->url);

            // set the speed of the website
            $tracker->speed = $this->speed($tracker->url);
        }

        // return the dashboard index page
        return view('dashboard.index', ['trackers' => $trackers]);
    }

    // display the tracker details page
    public function tracker()
    {
        return view('dashboard.viewmore');
    }

    // display the add tracker page
    public function addTracker()
    {
        return view('dashboard.addTracker');
    }

    // display the edit tracker page
    public function editTracker()
    {
        return view('dashboard.editTracker');
    }
}
