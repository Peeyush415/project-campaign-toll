<h1>Project Details</h1>

<p><strong>Name:</strong> {{ $project->name }}</p>
<p><strong>Description:</strong> {{ $project->description }}</p>
<p><strong>Status:</strong> {{ $project->status ? 'Active' : 'Inactive' }}</p>

<a href="{{ route('projects.edit', ['project' => $project->id]) }}">Edit</a>

<form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<a href="{{ route('campaigns.create', ['project_id' => $project->id]) }}">Add Campaign</a>
