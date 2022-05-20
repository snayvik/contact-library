<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <h1>Contact us any time</h1>
    <form action="{{ route('contact.post') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" />
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html>