<form>
    <div>
        <label for="nama">Nama:</label>
        <input type="text" id="nama"/>
    </div>
    <div>
        <label for="nomor_telepon">No Telepon:</label>
        <input type="text" id="nomor_telepon"/>
    </div>
    <div>
        <label for="product">Produk:</label>
        <input list="product"/>
        <datalist id="product">
            @foreach($kategori as $kategori)
            <option value="{{ $kategori->title }}">
            @endforeach
        </datalist>
    </div>
</form>