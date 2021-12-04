<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Nik:</label>
                              </div>
                            <input type="text"
                                class="form-control"
                                id="exampleFormControlInput1" placeholder="Masukan Nik" wire:model="nik">
                            @error('nik') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Nama:</label>
                              </div>
                            <input
                                class="form-control"
                                id="exampleFormControlInput2" wire:model="nama"
                                placeholder="Masukan Nama"></input>
                            @error('nama') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Kota:</label>
                              </div>
                            <input
                                class="form-control"
                                id="exampleFormControlInput2" wire:model="kota"
                                placeholder="Masukan Kota"></input>
                            @error('kota') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Domisili:</label>
                              </div>
                            <input
                                class="form-control"
                                id="exampleFormControlInput2" wire:model="domisili"
                                placeholder="Masukan Domisili"></input>
                            @error('domisili') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Tingkatan:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" wire:model="tingkatan">
                              <option selected>Pilih...</option>
                              <option value="Taman Kanak-kanak atau Paud">Taman Kanak-kanak atau Paud</option>
                              <option value="Sekolah Dasar">Sekolah Dasar</option>
                              <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                              <option value="Sekolah Menengah Kejuruan">Sekolah Menengah Kejuruan</option>
                              <option value="Mahasiswa">Mahasiswa</option>
                            </select>
                            @error('tingkatan') <span class="text-red-500">{{ $message }}</span>@enderror
                          </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Store
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModalPopover()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Close
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
