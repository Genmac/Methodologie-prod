
@include('_header', ['title' => 'Add New Student'])
    <div class="container mt-5">
        <h1 class="mb-4">Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            @include('students._formstudent')
        </form>
    </div>
</body>
</html>