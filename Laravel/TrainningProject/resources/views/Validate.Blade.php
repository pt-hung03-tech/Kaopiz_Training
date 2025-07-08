<form action="/register" method="POST">

    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">

    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <input type="password" name="password">
    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Register</button>