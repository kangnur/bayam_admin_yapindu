<?php

namespace App\Http\Livewire\Student;
use Livewire\Component;
use App\Models\Student;


class Crud extends Component
{
    public $students, $nik, $nama, $kota, $domisili, $tingkatan, $student_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.student.crud',  [
            'students' => Student::latest()->get(),
        ]);

    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();

    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->mobile = '';

    }

    public function store()
    {
        $this->validate([
            'nik' => 'required',
            'nama' => 'required',
            'kota' => 'required',
            'domisili' => 'required',
            'tingkatan' => 'required',
        ]);

        Student::updateOrCreate(['id' => $this->student_id], [
            'nik' => $this->nik,
            'nama' => $this->nama,
            'kota' => $this->kota,
            'domisili' => $this->domisili,
            'tingkatan' => $this->tingkatan,
        ]);

        session()->flash('message', $this->student_id ? 'Student updated.' : 'Student created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->nik = $student->nik;
        $this->nama = $student->nama;
        $this->kota = $student->kota;
        $this->domisili = $student->domisili;
        $this->tingkatan = $student->tingkatan;

        $this->openModalPopover();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Studen deleted.');
    }
}
