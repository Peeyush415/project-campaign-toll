<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class SubpageController extends Controller
{
    public function show(Request $request)
    {

        $campaignId = (int) $request->input('campaign_id');
        if (!$campaignId) {
            abort(404);
//            dd('no id');
        }
        $campaign = Campaign::find($campaignId);
        if (!$campaign) {
            abort(404);
        }
        $campaign->increment('opens');
        return view('subpage', compact('campaign'));
    }

    public function click(Request $request)
    {
        $campaignId = $request->campaign_id;
        if (!$campaignId) {
            abort(404);
        }
        $campaign = Campaign::find($campaignId);
        if (!$campaign) {
            abort(404);
        }
        $campaign->increment('clicks');
        return redirect()->route('landing.show');
    }
}
