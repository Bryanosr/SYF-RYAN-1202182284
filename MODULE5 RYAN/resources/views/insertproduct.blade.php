@extends("layout")

@section("tampilan")
<div class="container">
    <h2 class="text-center">Input Product</h2>
    <form method="POST" action="/inputorder">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="input-group">
            <br>
            <label class="d-block" for="exampleFormControlInput1">Price</label>
            <br>
            <div class="input-group-prepend d-block">
                <span class="input-group-text" id="basic-addon1">$ USD</span>
            </div>
            <input name="harga" type="number" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stock</label>
            <input name="stock" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="form-group">
                <label for="exampleFormControlFile1">Image file input</label>
                <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
                <button type="submit" class="btn btn-dark mt-3">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection