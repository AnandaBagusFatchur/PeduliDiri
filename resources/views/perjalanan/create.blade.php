<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Isi Data Perjalanan') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
                <div class="py-12">
                    <div class="card-body">
                        <form method="post" action="{{ route('perjalanan.store') }}">
                        @csrf
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tanggal Perjalanan</label>
                            <input name="tanggal" class="form-control" type="date" placeholder="Pilih Tanggal" value="{{ old('tanggal') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Waktu Perjalanan</label>
                            <input name="waktu" class="form-control" type="time" placeholder="Pilih Waktu" value="{{ old('waktu') }}" required>
                        </div>
                        <div class="form-group">
                            <label  class="form-label" for="form4">Lokasi Perjalanan</label>
                            <input name="lokasi" id="form4" class="form-control" type="text" placeholder="Masukkan Lokasi Perjalanan" value="{{ old('lokasi') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Suhu Tubuh</label>
                            <input name="suhu" class="form-control" type="text" placeholder="Masukkan Suhu Tubuh" value="{{ old('suhu') }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a type="button" class="btn btn-primary" href="{{ route('perjalanan.index') }}">Back</a>
                     
                    </form>
                </div>
                </div>
           
            </div>
        </div>
    </div>
</x-app-layout>