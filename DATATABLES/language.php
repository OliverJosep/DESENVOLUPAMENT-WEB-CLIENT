<!DOCTYPE html>
<html>
<head>

  <!-- css -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.bootstrap4.min.css"/>

  <!-- js -->

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>


  <title></title>
</head>
<body>

<div class="container">
  <h1>dataTable</h1>
  <br>
    <div class="row">
      <div class="col">
        <table id="table" class="table table-striped table-bordered"/>
      </div>
    </div>
  </div>

<script>
  $(document).ready( function () {
    $('#table').DataTable( {
      ajax: {
        url: 'rents.php',
        dataSrc: '',
        type:"POST",
      },
      select: {
        style: 'os',
        items: 'column'  //row, column, cell
      },
      columns:  [
        {title: "ID", data:'id'},
        {title: "Name", data:'name'},
        {title: "Email", data:'email'},
        {title: "Job", data:'job'},
        {title: "Valoration", data:'val1'},
        {title: "Personal Valoration", data:'val2'},
        {title: "Description", data:'description'},
        {title: "Price", data:'price'}
      ],
      language: {
      <?php if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "ca") : ?>
        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Catalan.json"
      <?php elseif (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "es") : ?>
        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
      <?php else : ?>
        url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/English.json"
      <?php endif ?>

      },
    });
  });
</script>
</body>
</html>
