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
          <option class="disabled" value="">Select</option>
        </select>
      </div>
    </form>
    <div class="container-fluid mt-5">
    <h3>JSON  </h3>
      <p id="text"></p>
    </div>
  </div>


  <script>
    $(document).ready(function(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          $("#text").html(this.responseText);
          var rents = JSON.parse(this.responseText);
          for (rent in rents) {
            console.log(rents[rent].name);
            var id = rents[rent].id;
            var nameRent = rents[rent].name;
            var item = $("<option/>", {value:id, text:nameRent});
            $("select").append(item);
          }
        }
      };
      xhttp.open("GET", "rents.php", true);
      xhttp.send();
    })
  </script>



  </body>
</html>
