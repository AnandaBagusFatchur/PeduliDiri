<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catatan Perjalanan') }}
        </h2>
    </x-slot>
    
    @if (session('status'))
    <div class="alert alert-success d-flex align-items-center alert-dismissible" role="alert">  
        <i aria-label="Success:"></i>
        <div>
            {{ session('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
{{-- konten --}}
<div>
       
    <br>

    <div class="flex flex-col">
        <div class="max-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 p-2">
            <a class="btn btn-danger " href="{{ route('perjalanan.create')}}" >&nbsp; Add &nbsp;  </a>
            <hr class="opacity-0">

            <div class=" align-middle inline-block min-w-full ">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-2">
                    <table  id="dtBasicExample" class="min-w-full divide-y divide-gray-200 w-full " >
                        <thead>
                        <tr>
                            {{-- <th scope="col" width="50" class="th-sm px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th> --}}
                            <th scope="col" class="th-sm px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                tanggal
                            </th>
                            <th scope="col" class="th-sm px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                waktu
                            </th>
                            <th scope="col" class="th-sm px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                lokasi
                            </th>
                            <th scope="col" class="th-sm px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                suhu
                        </tr>
                        </thead>
                        
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($data as $d ) 
                            <tr>
   
                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $loop->iteration }}
                                </td> --}}

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $d->tanggal }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $d->waktu }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $d->lokasi }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $d->suhu }}  &nbsp; °C
                                </td>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

{{-- tabel sorting --}}
<script>
    $(document).ready(function () {
    $('#dtBasicExample').DataTable({
        "aaSorting": [],
        columnDefs: [{
            orderable: false,
            targets: 2
        }]
    });
    
  });
</script>


            </div>
        </div>
    </div>
</x-app-layout>

