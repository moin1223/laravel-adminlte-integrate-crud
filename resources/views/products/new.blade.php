@extends('layouts.master')
@section('content')

<div class="container">
      <div class="bg-light mt-2">
      <form method="POST" action="{{route('product.store')}}">
      @csrf
        <h1 class="text-center pt-3">Add new product</h1>
          <div class="p-5">

              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Product Title</label>
                  <input type="text"  name="title"  class="form-control" id="exampleFormControlInput1">
                  <span class='text-danger'>@error('title'){{$message}}@enderror</span>
              </div>

               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Product Category</label>
                        <select class="form-select"  name="category" id="floatingSelect" aria-label="Floating label select example">
                            <option value='' hidden>Select Category</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Travel">Travel</option>
                            <option value="Business">Business</option>
                       </select>
                    
               </div>
               <span  class='text-danger'>@error('category'){{$message}}@enderror</span>

               <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Product Freshness</label>
                 
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="freshness" value="Brand New" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Brand New
                    </label>
                  </div>


                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="freshness" value="Second Hand" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Second Hand
                    </label>
                  </div>
                  <span class='text-danger'>@error('freshness'){{$message}}@enderror</span>

                                
              </div>

              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Size</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="size[]" value="XL" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              XL
                             </label>
                             
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="size[]" value="L" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                             L
                             </label>
                             
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="size[]" value="M" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                             M
                             </label>
                            
                             
                      </div>
                      <span class='text-danger'>@error('size'){{$message}}@enderror</span>

              </div>
          <button type="submit" class="btn btn-primary">Create</button>
      </form>
      </div>
</div>
@endsection