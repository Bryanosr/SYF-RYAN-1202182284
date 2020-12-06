@extends("layout")

@section("tampilan")
<div class="mt-5 text-center">
    @if($product=='[]')
    <p>There is no data...</p>
    <a href="/insertproduct" type="button" class="btn btn-dark">Add Product</a>
    @else
    <table class="table">
        <thead>
            <a href="/insertproduct" type="button" class="btn btn-dark">Add Product</a>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->price}}</td>
                <td>
                    <a class="btn btn-primary" href="/editproduct/{{$data->id}}">Edit</a>
                    <a class="btn btn-danger" href="/deleteorder/{{$data->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif

</div>
@endsection