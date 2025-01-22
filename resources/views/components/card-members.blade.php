@props(['totalMembers'])

<a href="{{ route('members.index') }}">
    <div class="card bg-base-100 image-full w-72 shadow-xl">
        <figure>
            <img src="../img/card-image-2.jpg" alt="" />
        </figure>
        <div class="card-body">
            <h1 class="card-title text-3xl">{{ $slot }}</h1>
            <h1 class="mt-4" style="font-size: 10rem">{{ $totalMembers }}</h1>
            <h1 class="mt-4">Members Registered</h1>
        </div>
    </div>
</a>
