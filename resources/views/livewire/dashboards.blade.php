<div class="p-6">
    <h1 class="text-2xl text-indigo-800 font-bold">Halo</h1>
    <br>
    <br>
    <table class="table-fixed border-2">
        <tr> 
            <th rowspan="4"><div class="bg-cover bg-center w-20 h-20 rounded-full" style="background-image: url('/img/admin.png')"></div></th>
            <td><p class="text-pink-800 text-lg">{{ auth()->user()->name }}</p></td>
        </tr>
        <tr class="w-30">
            <td><p class="text-pink-500 text-lg">{{ auth()->user()->email }}</p></td>
        </tr>
        <tr class="w-30 border-2">
            <td><p class="text-gray-300 text-lg">{{ auth()->user()->role }}</p></td>
        </tr>
    </table>

    <a class="text-blue-700 text-xl font-bold" href="{{ route('cetak-struk') }}">Cetak Data</a>

    <!--
        
    -->
    
</div>
