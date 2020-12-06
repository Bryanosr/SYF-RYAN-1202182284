@extends("layout")

@section("tampilan")
<center class="mt-5">
    <div class="card mb-3" style="max-width: 1000px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://www.mainbasket.com/uploads/post/2016/12/16.png" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">NIKE AIR JORDAN</h5>
                    <p class="card-text">Nike Air Jordan is for Basketball Player the Range of price is between $50.00 - $100.00</p>
                    <p class="card-text"><small class="text-muted">Stock 10</small></p>
                    <h2>$100.00</h2>
                </div>
            </div>
        </div>
    </div>
    <br>
    <form>
        <div class="col-md-8">
            <div class="card-body text-left">
                <h5 class="mt-3 text-center">Buyer Information</h5>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Contact">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</center>
@endsection