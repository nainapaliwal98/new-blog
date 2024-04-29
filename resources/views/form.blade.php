<form method="POST" action="/register">
    @csrf
    <!-- Form fields here -->

  <div class="container">
    <h1 class="text-center"> Registration</h1>
</div>
<div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" id="" aria-describedby="emailHelp" placeholder="">
    
  </div>

  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" id=""  class="form-control" aria-describedby="emailHelp" placeholder="">
    </div>
    <div class="form-group">
    <label for="">Password</label>
    <input type="text" name="password" id="" aria-describedby="emailHelp" placeholder="">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>