<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = DB::table('questions')->get();
        return view('pertanyaan.index', ['data' => $data]);
    }

    public function create()
    {

        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:posts'],
            'body' => ['required', 'max:255'],
        ]);

        $query = DB::table('questions')->insert(
            ['judul' => $request['judul'], 'isi' => $request['isi']]
        );

        return view('pertanyaan.index');
    }
}
