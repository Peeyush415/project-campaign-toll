<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Project;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
{
    $campaigns = Campaign::all();
    return view('campaigns.index', ['campaigns' => $campaigns]);
}

public function create()
{
    $projects = Project::all();
//    dd($projects);
    return view('campaigns.create')->with('projects', $projects);
//    return view('campaigns.create');
}

public function store(Request $request)
{
    $campaign = new Campaign;
    $campaign->project_id = $request->project_id;
    $campaign->campaign_name = $request->name;
    $campaign->status = $request->status;
    $campaign->save();
    return redirect()->route('campaigns.index');
}

public function edit($id)
{
    $campaign = Campaign::find($id);
    $projects = Project::all();
    return view('campaigns.edit', ['campaign' => $campaign])->with('projects', $projects);
}

public function update(Request $request, $id)
{
    $campaign = Campaign::find($id);
    $campaign->project_id = $request->project_id;
    $campaign->campaign_name = $request->name;
    $campaign->status = $request->status;
    return redirect()->route('campaigns.index');
}

public function destroy($id)
{
    $campaign = Campaign::find($id);
    $campaign->delete();
    return redirect()->route('campaigns.index');
}

}
