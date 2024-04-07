<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Empleyee</title>
</head>

<body>
    <h1>Create Employee</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>

        @endif
    </div>
    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        @method('post')
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age">
        <br>
        <label for="position">Posistion</label>
        <input type="text" name="position">
        <br>
        <label for="salary">Salary</label>
        <input type="number" name="salary">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
