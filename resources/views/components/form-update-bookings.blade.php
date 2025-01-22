@props(['units', 'members', 'booking'])
<form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PATCH')


    <div>
        <label class="label">
            <span class="label-text">Nama Member</span>
        </label>
        <select name="member_id" required class="select select-bordered w-full">
            <option value="" disabled selected>{{ $booking->member->name }}</option>
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
            <option value="" disabled selected>{{ $booking->unit->name }}</option>
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
            placeholder="Masukkan tanggal checkin" value="{{ $booking->start_date }}" />
        @error('start_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Tanggal Checkout</span>
        </label>
        <input type="date" name="end_date" required class="input input-bordered w-full"
            placeholder="Masukkan tanggal checkout" value="{{ $booking->end_date }}" />
        @error('end_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>


    <div>
        <button type="submit" class="btn btn-primary m-3">Update Member</button>
    </div>
</form>
