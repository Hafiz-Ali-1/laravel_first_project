{{-- <?php
include ("Components/connect.php");
if (isset($_REQUEST['submit'])) {
   $FullName = mysqli_real_escape_string($conn, $_POST['name']);
   $Email = mysqli_real_escape_string($conn, $_POST['email']);
   $Password = mysqli_real_escape_string($conn, $_POST['password']);
   $Query = "INSERT INTO register (id,name,email,password) " .
      " VALUES(' ','$FullName','$Email', '$Password')";
   $Result = mysqli_query($conn, $Query);
   if ($Result) {
      ?>
      <script>
         alert('Thanks for Contacting. We\'ll respond you soon.');
         window.location.href = 'login.php';
      </script>
      <?php
   } else {
      ?>
      <script>
         alert('Exception Found, Contact us using Our Email.');
         window.location.href = 'contact-add.php?error';
      </script>
      <?php
   }
}

?> --}}
