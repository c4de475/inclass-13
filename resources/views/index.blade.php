<x-layoutcomponent>

<x-slot name="content">

    <form class="m-3" action="#" method="GET">
        <label for="search">Search by Age:</label>
        <input type="text" name="age" placeholder="Cat age" value="{{ request('age') }}">
    </form>

    <div class="row">
        @foreach($cats as $cat)
            <div class="col s6 m4">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6>{{ $cat->name }}</h6>
                        <ul class="grey-text">
                            <li>Age: {{ $cat->age }}</li>
                            <li>Breed: {{ $cat->breed }}</li>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a class="brand-text" href="/cats/{{ $cat->id }}">more info</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $cats->links() }}

    @if (session()->has('success'))
    <div class="position-absolute bottom-0 end-0 bg-primary m-5 py-2 px-5 rounded-3">
        <p class="m-3 text-white">{{ session('success') }}</p>
    </div>
    @endif
</x-slot>

</x-layoutcomponent>