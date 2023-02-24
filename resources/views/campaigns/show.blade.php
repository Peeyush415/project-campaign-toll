<h1>Campaign Details</h1>

<p><strong>Name:</strong> {{ $campaign->name }}</p>
<p><strong>Project:</strong> {{ $campaign->project->name }}</p>
<p><strong>Status:</strong> {{ $campaign->status ? 'Active' : 'Inactive' }}</p>
<p><strong>Opens:</strong> {{ $campaign->opens }}</p>
<p><strong>Clicks:</strong> {{ $campaign->clicks }}</p>

<a href="{{ route('campaigns.edit', ['campaign' => $campaign->id]) }}">Edit</a>

<form action="{{ route('campaigns.destroy', ['campaign' => $campaign->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
