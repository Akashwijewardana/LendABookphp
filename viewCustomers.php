

<html >
<head>

  <title>View Customers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
  <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

</head>

<style>
body {
 
</style>
<body >
<br><br>


<div class="contact py-sm-5" style="opacity: 0.8;">



  <div class="container py-xl-4 py-lg-2">
  


<h1 class="text-center" >Register</h1>


 <?php 
 $db = mysqli_connect('localhost', 'root', '', 'lendabook');
 $results = mysqli_query($db, "SELECT * FROM users"); ?>




 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          <th>Id</th>
                                          <th>Email</th>
                                           <th>Age</th>
                                        <th>Status</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                       <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['role']; ?></td>
            </tr>
        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>



</div>
<script >
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>



</html>





