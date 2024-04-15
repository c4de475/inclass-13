<x-layoutcomponent>

<x-slot name="content">
  <h2>Add a Cat!</h2>

  <div class="row">
    <form class="m-3 col-4" action="/create" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Cat Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Cats Name...">
            @error('name')
            <div id="nameerror" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Cat Age:</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}" placeholder="Enter Cats Age...">
            @error('age')
            <div id="ageerror" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="breed" class="form-label">Cat Breed:</label>
            <input type="text" class="form-control" id="breed" name="breed" value="{{ old('breed') }}" placeholder="Enter Cats Age...">
            @error('breed')
            <div id="breederror" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Cat</button>
    </form>

    <a href="/">
        Back to Home
    </a>
  </div>
</x-slot>

</x-layoutcomponent>