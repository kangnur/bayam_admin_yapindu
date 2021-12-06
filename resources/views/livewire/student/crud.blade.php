<x-slot name="header">
    <h2 class="text-center">Laravel 8 Livewire CRUD Demo</h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            @if (auth()->user()->role == "admin")
            <button wire:click="create()"
            class="btn btn-primary bg-orange">
            Create Student
        </button>
        @if($isModalOpen)
        @include('livewire.student.create')
        @endif
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        @if (auth()->user()->role == "admin")<th class="px-4 py-2">Nik</th>@endif
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Kota</th>
                        <th class="px-4 py-2">Domisili</th>
                        <th class="px-4 py-2">Tingkatan</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td class="border px-4 py-2">{{ $student->id }}</td>
                        @if (auth()->user()->role == "admin")<td class="border px-4 py-2">{{ $student->nik }}</td>@endif
                        <td class="border px-4 py-2">{{ $student->nama}}</td>
                        <td class="border px-4 py-2">{{ $student->kota}}</td>
                        <td class="border px-4 py-2">{{ $student->domisili}}</td>
                        <td class="border px-4 py-2">{{ $student->tingkatan}}</td>
                        <td class="border px-4 py-2">
                            @if (auth()->user()->role == "admin")
                            <button wire:click="edit({{ $student->id }})"
                                class="btn btn-success">Edit</button>
                            <button wire:click="delete({{ $student->id }})"
                                class="btn btn-remove bg-red">Delete</button>
                                @endif
                                <button wire:click="delete({{ $student->id }})"
                                    class="btn btn-primary"><i class="fa fa-view"></i> View</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
