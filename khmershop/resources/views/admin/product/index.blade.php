@extends('admin.master')
@section('title','List Products')
@section('content')
   <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
       <h3>Products</h3>
       <div class="table-responsive">
           <table class="table table-hover">
               <thead>
                   <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Price</th>
                       <th>Delete</th>
                       <th>Update</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($products as $product)
                        <tr>
                            <td><img src="{{URL('images',$product->image)}}" alt="" width="80"></td>
                            <td>{{$product->pro_name}}</td>
                            <td>$ {{$product->pro_price}}</td>
                            <td>
                                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                   {{ csrf_field() }}
                                   @method('DELETE')
                                   <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                </form>
                            </td>

                            <td>
                                <form action="{{route('product.update',$product->id)}}" method="post">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <input type="submit" class="btn btn-sm btn-success" value="Update">
                                 </form>
                            </td>
                        </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </main>

@endsection
