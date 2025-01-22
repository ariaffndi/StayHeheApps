@props(['units', 'members'])


<form action="{{ route('bookings.store') }}" method="POST" class="bg-base-200 p-6 rounded-lg shadow-md">
    @csrf

    <div>
        <label class="label">
            <span class="label-text">Booking ID</span>
        </label>
        <input type="text" name="booking_id" required class="input input-bordered w-full"
            placeholder="Masukkan Booking ID" />
        @error('unit_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Nama Member</span>
        </label>
        <select name="member_id" required class="select select-bordered w-full">
            <option value="" disabled selected>Pilih Member</option>
            @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->name }} (ID: {{ $member->member_id }})</option>
            @endforeach
        </select>
        @error('member_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Nama Unit</span>
        </label>
        <select name="unit_id" required class="select select-bordered w-full">
            <option value="" disabled selected>Pilih Unit</option>
            @foreach ($units as $unit)
                <option value="{{ $unit->id }}">{{ $unit->name }} (ID: {{ $unit->unit_id }})</option>
            @endforeach
        </select>
        @error('unit_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <label class="label">
            <span class="label-text">Tanggal Checkin</span>
        </label>
        <input type="date" name="start_date" required class="input input-bordered w-full"
            placeholder="Masukkan tanggal checkin" />
        @error('start_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Tanggal Checkout</span>
        </label>
        <input type="date" name="end_date" required class="input input-bordered w-full"
            placeholder="Masukkan tanggal checkout" />
        @error('end_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary m-3">Tambah Booking</button>
    </div>
</form>
