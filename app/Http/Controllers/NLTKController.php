<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NLTKController extends Controller
{
    public function index() {
        // Example text
        $text = "In 2016 my email and personal data was involved in a data breach and my infromation was added to a list being sold on the dark web. For several years scammers have been using my (and other) email sddresses for possible exploitation. They are using bitly services to send out targeted emails to a Russian scam/porn site. I get up to several emails daily, and have been getting them daily for years. I have used bitly's complaint site literally hundreds of times in an attempt tp get the company to block the user, but what they have done is to block the instance of the email source which is spoofed. This means that the scammers just use another fake email so they can continue as if there was no block at all. Scammers use bitly because they know that Bitly will not stop them, and bitly has ceased responding to demands they put something in place to effectively stop these or any scammers who use this method to exploit innocent internet users. The Russian scam company is called Flynet.LLC and their company has not responded to any demoands to cease by either me or by RIPE - this leaves me with no option but to start reaching out to complaint departments to get BITLY to develop a method to vet it's customers before blasting out scam/porn weblinks via it's service:";

        // Execute the Python script
        $command = escapeshellcmd("python ./keyword_extraction.py " . escapeshellarg($text));
        $output = shell_exec($command);

          // Convert the output string to an array
        $data['keywords'] = explode("\n", trim($output));
        // $keywords = explode("\n", trim($output));
        // echo implode(", ", $keywords);
        return view('keyword_view', $data);
    }
}
