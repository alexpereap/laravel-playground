<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logtext;
use App\Jobs\ProcessPodcast;

class MultiController extends Controller
{
    public function addLogTxt(string $txt, ?string $extraMessage = null)
    {
        $logText = new Logtext;
        $logText->message = $txt;
        if ($extraMessage) {
            $logText->extra_message = $extraMessage;
        }
        $logText->save();

        dd($txt, $extraMessage);
    }

    public function addLogTxtViaQueue(string $txt)
    {
        ProcessPodcast::dispatch($txt);
        dd('ProcessPodcast done with value ' . $txt);
    }
}
