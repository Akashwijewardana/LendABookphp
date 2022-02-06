
 <?php  
      
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "lendabook");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Return Date', 'Book Id', 'User Id'));  
      $query = "SELECT * FROM `broowbook` WHERE currentdate >= CURDATE()
  AND currentdate < CURDATE() + INTERVAL 1 DAY";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?> 