<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="https://paygateglobal.com/v1/page" method="GET" >
                                    {{ csrf_field() }}
                                  <input type="hidden" name="token" value="a8b06466-6551-4c16-a2ce-966a83655ab7">
                                  <input type="hidden" name="amount" value="1">
                                  <input type="hidden" name="identifier" value="5">
                                  <input type="hidden" name="description" value="Confirmation de la réservation de">
                                  <input type="hidden" name="url" value="http://127.0.0.1:8000/test9">
                                <button class="btn btn-primary" type="submit">Proceder au payement</button>
    </form>

    <div class="col-md-offset-2 col-md-8">
      
      @include('sweet::alert')
 
    </div>

  
  
</body>
</html>
