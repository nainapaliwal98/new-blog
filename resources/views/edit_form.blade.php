<form action="{{url('ccustomer/update',$ccustomer->customer_id)}}" method="post">
  <!-- Button to register the ccustomer -->

    @csrf
    @method('POST')
  
  <div class="container">
    <h1 class="text-center"> Update</h1>
</div>
<div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" value ="{{$ccustomer->name}}" id="" aria-describedby="emailHelp" placeholder="">
    
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" value ="{{$ccustomer->email}}" id=""  class="form-control" aria-describedby="emailHelp" placeholder="">
    </div>
    <div class="form-group">
    <label for="">Password</label>
    <input type="text" name="password" value ="{{$ccustomer->password}}" id="" aria-describedby="emailHelp" placeholder="">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>