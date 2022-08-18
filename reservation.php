<!DOCTYPE html>
<html>
 <head>
  <title>The Resort</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 
 </head>
 <body style="background-color: lightyellow;">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">The Resort</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
 </nav>
 
 <section class="my-5">
   <div class="py-5">
    <h2 class="text-center"> Contact for Reservation</h2>
    <hr noshade>
   </div>
   <div class="w-50 m-auto">
     <form action="bookinginfo.php" method="post">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="user" autocomplete ="off" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Email Id</label>
        <input type="email" name="email" autocomplete ="off" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete ="off" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Aadhar no.</label>
        <input type="text" name="aadhar" autocomplete ="off" class="form-control" required>
        </div>
        
        <br>

        <div class="form-inline">
        <label>Check-in date</label>
        <input type="date" name="checkin" autocomplete ="off" class="form-control" required>

        <label>Check-out date</label>
        <input type="date" name="checkout" autocomplete ="off" class="form-control" required>
        </div>
        
          <br><br>

         <div class="form-group">
        <label>Room Type (Regular / Deluxe Suites / Presidential Suites)</label>
        <input type="text" name="room" autocomplete ="off" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
   </div>
 </section>
  
 <footer>
  <p class="p-3 bg-dark text-white text-center">@theResortPvtltd</p>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>