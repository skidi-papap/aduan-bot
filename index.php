<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body>
      <form action="bot_form.php" method="POST">    
            <div class="form-left-decoration"></div>
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
                <h1>Aduan Siber</h1>
                <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="uname" placeholder="Email">
                <textarea rows="5" type="text" name="teks" placeholder="Aduan"></textarea>
                <button type="submit" class="kirim" data-toggle="modal" data-target="#demo-popup">Submit</button> 
            </div>
        </form>

        <div class="modal fade" id="demo-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="alert">
          <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="popupConfirm">Bantuan 70</h4>
          </div>
          <div class="modal-body">
            <p>Aduan anda telah diterima</p>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">OK</button> 
          </div>
          </div>
          </div>
        </div>
    </body>
</html>
