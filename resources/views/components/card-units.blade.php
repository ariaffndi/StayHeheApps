@props(['totalUnits'])

<a href="{{ route('units.index') }}">
    <div class="card bg-base-100 image-full w-72 shadow-xl">
        <figure>
            <img src="../img/card-image-3.jpg" alt="" />
        </figure>
        <div class="card-body">
            <h1 class="card-title text-3xl">{{ $slot }}</h1>
            <h1 class="mt-4" style="font-size: 10rem">{{ $totalUnits }}</h1>
            <h1 class="mt-4">Units We Have</h1>
        </div>
    </div>
</a>