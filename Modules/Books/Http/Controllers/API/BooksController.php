<?php

namespace Modules\Books\Http\Controllers\API;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Books\Entities\Book;
use Modules\Books\Entities\Genre;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $period = $request->period;

        $popular_books = Book::whereHas('issuances', function ($query) use($period) {
            if($period === 'month') {
                return $query->where('date_issued', '>', Carbon::today()->subMonths(1));
            } else if($period === '3months') {
                return $query->where('date_issued', '>', Carbon::today()->subMonths(3));
            } else if($period === '6months') {
                return $query->where('date_issued', '>', Carbon::today()->subMonths(6));
            } else if($period === 'year') {
                return $query->where('date_issued', '>', Carbon::today()->subYears(1));
            }
            return $query;
        })
        ->withCount('issuances')
        ->orderBy('issuances_count', 'desc')
        ->limit(10)
        ->get();

        return response()->json([
            'code' => 200,
            'success' => true,
            'message' => "Successfully retrieved books",
            'books' => $popular_books,
        ]);
    }
}
