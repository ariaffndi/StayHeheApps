<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Member;
use App\Models\Unit;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with(['member', 'unit'])->get();

        return view('booking.list-bookings', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        $units = Unit::all();

        return view('booking.input-bookings', compact('members', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'booking_id' => 'required|unique:bookings',
            'member_id' => 'required|exists:members,id',
            'unit_id' => 'required|exists:units,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $validated['status'] = $validated['status'] ?? 'on going';

        Booking::create($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        $members = Member::all();
        $units = Unit::all();

        return view('booking.update-bookings', compact('booking', 'members', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        // Validasi data
        $validated = $request->validate([
            'member_id' => 'required|exists:members,id',
            'unit_id' => 'required|exists:units,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $booking->update($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dihapus.');
    }


    public function complete(Booking $booking)
    {
        $booking->update(['status' => 'completed']);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diperbarui.');
    }

}
