<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD Hotel</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="script.js" charset="utf-8"></script>
    <script id="people-template" type="text/x-handlebars-template">
      <div class="person-paying" data-id="{{id}}">
        <div class="identif">ID_{{id}}</div>
        <h2>{{name}}</h2>
        <h2>{{lastname}}</h2>
        <hr>
        <h2 class="indirizzo"></h2>
        <div class="modifica">
          <i class="fas fa-edit"></i>
        </div>
        <div class="elimina">
          <i class="fas fa-trash"></i>
        </div>
      </div>
    </script>
  </head>
  <body>
    <h1>Ospiti&nbsp;&nbsp;&nbsp;Paganti</h1>
      <!-- container per handlebars -->
      <div class="paying-container">

      </div>
  </body>
</html>
