<a href="{{ route('students.create') }}"><button class="btn btn-primary-gradient btn-block">Add New Student
    </button></a>
<table>
<thead>
    <table>
        <tr>
            <td >name</td>
            <td >phone</td>
            <td >city</td>
            <td >address</td>
        </tr>
</thead>
<tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->city }}</td>
            <td>{{ $student->address }}</td>
            <td><a href="{{ route('students.edit', $student->id) }}">EDIT</a>
        </tr>
    @endforeach
</tbody>
</table>

