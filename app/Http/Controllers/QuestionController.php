<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'nama'       => 'required|max:10',
        'email'      => ['required', 'email'],
        'pertanyaan' => 'required|max:300|min:8',
    ], [
        'nama.required' => 'Nama Tidak Boleh Kosong',
        'email.email'   => 'Email Tidak Valid',
    ]);

    return redirect('/')->with('info', 'Pertanyaan berhasil dikirim!');
}


    public function response()
    {

        if (! session()->has('nama')) {
            return redirect('/');
        }

        return view('home-question-respon', [
            'nama'       => session('nama'),
            'email'      => session('email'),
            'pertanyaan' => session('pertanyaan'),
        ]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
