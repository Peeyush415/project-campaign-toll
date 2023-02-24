<h1>Edit Project</h1>

<form action="{{ route('projects.update',$project->id ) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $project->project_name }}" required>


    <button type="submit">Save Changes</button>
</form>
