<h1>Create Role</h1>

<form action="{{ route('roles.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Role Name">

    <button type="submit">Save</button>
</form>