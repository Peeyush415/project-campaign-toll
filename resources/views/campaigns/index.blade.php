<h1>Campaigns</h1>
<a href="{{ route('campaigns.create') }}">Create New Campaign</a>

<table border="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Project</th>
      <th>Opens</th>
      <th>Clicks</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($campaigns as $campaign)
    <tr>
      <td>{{ $campaign->id }}</td>
      <td>{{ $campaign->campaign_name }}</td>
      <td>{{ $campaign->project->project_name }}</td>
      <td>{{ $campaign->opens }}</td>
      <td>{{ $campaign->clicks }}</td>
      <td>{{ $campaign->status ? 'Active' : 'Inactive' }}</td>
      <td>
        <a href="{{ route('campaigns.edit',  $campaign->id ) }}"><button>edit</button></a>
        <form action="{{ route('campaigns.destroy',  $campaign->id )}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
