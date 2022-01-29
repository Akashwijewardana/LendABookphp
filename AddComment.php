<!DOCTYPE html>
<html  lang="en">
<head>
  <title>Add Comment</title>
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

<?php 

session_start();
$id=$_GET['id'];
 ?>


<div class="contact py-sm-5" style="opacity: 0.8;">



  <div class="container py-xl-4 py-lg-2">
  
  
<form  method="post" action="php/bookCom.php?id=<?php echo($id) ?>" class="well form-horizontal" >

<h1 class="text-center" >Add Comment</h1><br><br>
<div class="form-group">
  <label class="col-md-4 control-label">Comment</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="bi bi-book"></i></span>
 
 <textarea name="comment" placeholder="comment" cols="40" rows="5"></textarea>
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
