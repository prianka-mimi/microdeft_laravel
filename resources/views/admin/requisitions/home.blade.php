<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microdeft</title>

    <style>
        .error{
            color: red;
        }
    </style>

</head>

<body>
    <form action="{{ url('/dashboard/store') }}" method="post" align="center"
        style="border: 2px solid black; width: 30rem; margin: auto; padding: 2rem 0;">
        @csrf
        <label style="font-size: 1.5rem;" for="">Name </label><br>
        <input style="padding: 10px 1rem; width: 20rem; height: 2rem; font-size: 1.5rem; margin-top: 1rem;"
            type="text" name="name" id=""><br><br>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label style="font-size: 1.5rem;" for="">Phone </label><br>
        <input style="padding: 10px 1rem; width: 20rem; height: 2rem; font-size: 1.5rem; margin-top: 1rem;"
            type="text" name="phone" id=""><br><br>
        @error('phone')
            <div class="error">{{ $message }}</div>
        @enderror

        <label style="font-size: 1.5rem;" for="">Email </label><br>
        <input style="padding: 10px 1rem; width: 20rem; height: 2rem; font-size: 1.5rem; margin-top: 1rem;"
            type="text" name="email" id=""><br><br>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label style="font-size: 1.5rem;" for="">Designation </label><br>
        <input style="padding: 10px 1rem; width: 20rem; height: 2rem; font-size: 1.5rem; margin-top: 1rem;"
            type="text" name="designation" id=""><br><br>
        @error('designation')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" style="width: 10rem; height: 3rem; font-size: 1.5rem; margin-top: 1rem;">Sign Up</button>
    </form>
</body>

</html>
