<x-layoutcomponent>
    <x-slot name="content">
        <h1>Register!</h1>
        <div class="row">
            <form class="m-3 col-4" action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Name Here...">
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Enter Username Here...">
                    @error('username')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Here...">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password Here...">
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>

            <a href="/">
                Back to Home
            </a>
        </div>
    </x-slot>
</x-layoutcomponent>