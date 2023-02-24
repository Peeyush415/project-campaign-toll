<h1>Create Campaign</h1>

<form action="{{ route('campaigns.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="project_id">Project:</label>
    <select name="project_id" id="project_id" required>
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
        @endforeach
    </select>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>

    <button type="submit">Create Campaign</button>
</form>
