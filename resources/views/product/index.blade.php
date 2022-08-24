<h2>Product Name</h2>

<table>
    <thead>
        <tr>
            <th class="px-6 py-3">#</th>
            <th class="px-6 py-3">Name</th>
            <th class="px-6 py-3">Phone</th>
            <th class="px-6 py-3">Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $product)
            <tr>
                <td class="px-6 py-2">{{ $product->id }}</td>
                <td class="px-6 py-2">{{ $product->name }}</td>
                <td class="px-6 py-2">{{ $product->phone_number }}</td>
                <td class="px-6 py-2">{{ $product->address }}</td>
            </tr>
        @endforeach
    </tbody>
</table>