<h1>Create Project</h1>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <button type="submit">Save</button>
</form>
