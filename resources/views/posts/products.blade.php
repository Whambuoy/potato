@extends('layouts.app')

@section('content')
 <table class ="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
</tr>
</thead>

@foreach ($products as $product)
<tbody>
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
    </tr>
</tbody>
@endforeach
</table>
@endsection