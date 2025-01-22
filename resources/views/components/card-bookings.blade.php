@props(['totalBookings'])

<a href="{{ route('bookings.index') }}">
    <div class="card bg-base-100 image-full w-72 shadow-xl">
        <figure>
            <img src="../img/card-image-1.jpg" alt="CARD IMAGE" />
        </figure>
        <div class="card-body">
            <h1 class="card-title text-3xl">{{ $slot }}</h1>
            <h1 class="mt-4" style="font-size: 10rem">{{ $totalBookings }}</h1>
            <h1 class="mt-4">Total Bookings</h1>
        </div>
    </div>
</a>