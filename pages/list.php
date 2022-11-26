<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>James Whitley | List Elements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles.css">
    
  </head>
  <body>
    
    <div class="container text-left">
      <div class="row">
        <div class="col">
          <h1 class="myTitle">James Whitley | List Elements</h1>
          <?php include $_SERVER["DOCUMENT_ROOT"].'/nav.php';?>   
          <hr>
          <ul>
            <li>James</li>
            <li>Jom</li>
            <li>jam</li>
            <li>jomes</li>
            <li>games</li>
          </ul>
          <hr>
          <ol>
            <li>one
              <ul>
                <li>one (1)</li>
                <li> <a href="https://pointerpointer.com/" target="_blank">two (2)</a></li>
                <li>three (3)</li>
                <li>four (4)</li>
                <li>five (5)</li>
              </ul>
              </li>
            <li>two</li>
            <li>three</li>
            <li>four</li>
            <li>five</li>
          </ol>
          <hr>
          <ul class="extra">
            <li>James</li>
            <li>Jom</li>
            <li>jam</li>
            <li>jomes</li>
            <li>games</li>
          </ul>
          <hr>
          <ol class="roman">
            <li>one
              <ul class="square">
                <li>one (1)</li>
                <li>two (2)</li>
                <li>three (3)</li>
                <li>four (4)</li>
                <li>five (5)</li>
              </ul>
            </li>
            <li>two</li>
            <li>three</li>
            <li>four</li>
            <li>five</li>
          </ol>
          
       </div>
      </div>
    </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>