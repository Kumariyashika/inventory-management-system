<h1>Edit Role</h1>

<form action="{{ route('roles.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $role->name }}">

    <button type="submit">Update</button>
</form>