<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // Validasi
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:4',
            'email' => 'required',
            'jurusan' => 'required',

        ]);




        // Isert Data Secara Keseluruhan

        // $student = new Student;
        // $student->nama = $request->txtnama;
        // $student->nrp = $request->txtnrp;
        // $student->email = $request->txtemail;
        // $student->jurusan = $request->txtjurusan;
        // $student->save();

        // Motede insert berdasarkan baris tertentu
        // Student::create([
        //     'nama' => $request->txtnama,
        //     'nrp' => $request->txtnrp,
        //     'email' => $request->txtemail,
        //     'jurusan' => $request->txtjurusan,
        // ]);

        Student::create($request->all());

        return redirect('/students')->with('status', 'Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:4',
            'email' => 'required',
            'jurusan' => 'required',

        ]);

        student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('status', 'Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Berhasil di Hapus');
    }
}
