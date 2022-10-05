@extends('layouts.master')
@section('content')

<div class="container mt-3">
  <h2>Products <a class="btn btn-info" href="{{route('product.create')}}">New Product</a></h2>
          
  <table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Category</th>
        <th>Freshness</th>
        <th>Size</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $collectionData as $product)
  
            
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->freshness }}</td>
        <td>{{ $product->size }}</td>
        <td>
            <a href="{{ route('product.edit',[$product->id]) }}" class="btn btn-sm btn-info">Edit</a>
            <form method="post" action="{{ route('destroy.index',[$product->id]) }}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- 
</body>
</html> -->
@endsection