
<form action="{{ route('products.import') }}"
method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file required">
    <button type="submit">Import Products</button>
</form>