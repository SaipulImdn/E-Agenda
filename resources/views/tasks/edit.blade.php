<h1>Edit Task</h1>

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="form-group">
        <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}>
        <label for="completed">Completed</label>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
