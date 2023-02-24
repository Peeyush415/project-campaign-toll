<h1>Edit Campaign</h1>

<form action="{{ route('campaigns.update', $campaign->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $campaign->campaign_name }}" required>

    <label for="project_id">Project:</label>
    <select name="project_id" id="project_id" required>
        @foreach($projects as $project)
            <option value="{{ $project->id }}" {{ $campaign->project_id == $project->id ? 'selected' : '' }}>{{ $project->project_name }}</option>
        @endforeach
    </select>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="1" {{ $campaign->status ? 'selected' : '' }}>Active</option>
        <option value="0" {{ !$campaign->status ? 'selected' : '' }}>Inactive</option>
    </select>

    <button type="submit">Update Campaign</button>
</form>
