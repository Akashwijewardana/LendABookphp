<!DOCTYPE html>
<html  lang="en">
<head>
  <title>Save Librarian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
body {
  background-image: url(img/reg_back.jpg);
}
</style>
<body >
<br><br>


<div class="contact py-sm-5" style="opacity: 0.8;">



  <div class="container py-xl-4 py-lg-2">
  
  
<form  method="post" action="php/registerLibrarian.php" class="well form-horizontal" >

<h1 class="text-center" >Add Librarian</h1><br><br>
<div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="bi bi-book"></i></span>
 <input name="username" value="" placeholder="email"  class="form-control"  type="text" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Age</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="bi bi-book"></i></span>
 <input  name="age" value=""  placeholder="age"  class="form-control"  type="text" required>
    </div>
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="bi bi-book"></i></span>
 <input  name="password" value=""  placeholder="name"  class="form-control"  type="Password" required>
    </div>
  </div>
</div>







<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="save" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>






</form>


</div>
</div>
</body>
</html>
