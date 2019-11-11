<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>

    <title>json</title>
    <style>
    </style>
  </head>
  <body>

  <div class="container">
    <form>
      <div class="mt-4 form-group">
      <h1>Select JSON</h1>
        <select class="form-control form-control-lg" id="select">
          <option class="disabled" value="2">Select</option>
        </select>
        <select class="form-control form-control-lg" id="select2">
          <option class="disabled" value="">Select</option>
        </select>
      </div>
    </form>
    <div class="container-fluid mt-5">
    <h3>JSON  </h3>
      <p id="text"></p>
      <p id="text2"></p>
    </div>
  </div>


  <script>
    $(document).ready(function(){
      loadRedeem();

      $("#select").change(function(){
        $("#select2 option").remove();
        redeem = $(this).children("option:selected").val();
        loadRents(redeem);
        console.log(redeem)

      });

      function loadRedeem() {
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            $("#text").html(this.responseText);
            var redeemable = JSON.parse(this.responseText);
            for (x in redeemable) {
              var id = redeemable[x].id;
              var redeem = redeemable[x].redeem;
              var item = $("<option/>", {value:id, text:redeem});
              $("#select").append(item);
            }
          }
        };
        xhttp.open("GET", "redeemable.php", true);
        xhttp.send();
      }

      function loadRents(idRedeem){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            $("#text2").html(this.responseText);
            var rents = JSON.parse(this.responseText);

            for (rent in rents) {
              var id = rents[rent].id;
              var nameRent = rents[rent].name;
              var redeemable  = rents[rent].redeemable;
              var item = $("<option/>", {value:id, text:nameRent});
              $("#select2").append(item);


            }
          }
        };
        xhttp.open("GET", "rents.php?redeemable="+idRedeem, true);
        xhttp.send();
      }





    })
  </script>



  </body>
</html>
