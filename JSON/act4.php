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
    <table id="mevaTable" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">redeemable</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
  </div>


  <script>
    $(document).ready(function(){
      loadRent();
      function loadRent() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var rents = JSON.parse(this.responseText);
            var i=1;
             for (rent in rents) {
              var id = rents[rent].id;
              var nameRent = rents[rent].name;
              var priceRent = rents[rent].price;
              var redeemable  = rents[rent].redeemable;
              var newTR = $("<tr/>");
              var newTH = $("<th/>", {scope:'row', text:i});
              newTR.append(newTH);

              var newTD = $("<td/>",{text:id});
              newTR.append(newTD);
              newTD = $("<td/>",{text:nameRent});
              newTR.append(newTD);
              newTD = $("<td/>",{text:priceRent});
              newTR.append(newTD);
              newTD = $("<td/>",{text:redeemable});
              newTR.append(newTD);
              $("#mevaTable").children("tbody").append(newTR);
              i++;
            };
          };
        };
        xhttp.open("GET", "rents.php", true);
        xhttp.send();
      };
    });
  </script>



  </body>
</html>
