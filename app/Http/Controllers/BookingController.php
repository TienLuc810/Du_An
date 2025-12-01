<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function ShowForm()
    {
        return view('Dat_ban.booking');
    }

    public function SubmiteForm(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
        ]);

        // Lưu dữ liệu vào database (ví dụ model Booking)
        Booking::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'guests' => $request->guests,
            'notes' => $request->notes,
            'menu' => $request->menu ? implode(', ', $request->menu) : null,
        ]);

        // Redirect về form với thông báo thành công
        return redirect()->back()->with('success', 'Đặt bàn thành công!');
    }

    public function search(Request $request)
    {
        $query = $request->q;
        // Tìm món trong database có tên chứa từ khóa
        $results = Booking::where('name', 'like', "%{$query}%")->get();
        return view('Trang_chu.search', compact('results', 'query'));
    }

}
