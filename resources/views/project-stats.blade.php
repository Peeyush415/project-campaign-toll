<h1>Project Stats</h1>
<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Total Campaigns</th>
            <th>Total Opens Required</th>
            <th>Total Opens Achieved</th>
            <th>Total Clicks Required</th>
            <th>Total Clicks Achieved</th>
            <th>Open Cost</th>
            <th>Total Open Cost</th>
            <th>Click Cost</th>
            <th>Total Click Cost</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->project_name }}</td>
            <td>{{ $project->campaigns_count }}</td>
            <td>{{ $project->target_opens * $project->campaigns_count }}</td>
            <td>{{ $project->campaigns->sum('opens') }}</td>
            <td>{{ $project->target_clicks * $project->campaigns_count }}</td>
            <td>{{ $project->campaigns->sum('clicks') }}</td>
            <td>{{ $project->open_cost }}</td>
            <td>{{ $project->campaigns->sum('opens') * $project->open_cost }}</td>
            <td>{{ $project->click_cost }}</td>
            <td>{{ $project->campaigns->sum('clicks') * $project->click_cost }}</td>
            <td>{{ $project->status ? 'Active' : 'Inactive' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $projects->links() }}
