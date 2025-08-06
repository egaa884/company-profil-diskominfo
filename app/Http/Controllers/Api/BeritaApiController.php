<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaApiController extends Controller
{
    public function index()
    {
        // Get all berita with pagination (10 per page)
        $beritas = Berita::orderBy('created_at', 'desc')->paginate(10);
        return response()->json($beritas);
    }

    public function show(Berita $berita)
    {
        return response()->json($berita);
    }

    public function latest()
    {
        // Get latest 3 berita for the frontend news section
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        return response()->json($beritas);
    }
}