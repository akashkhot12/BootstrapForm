<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bootstrap Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th style="font-style:Italic;">id</th>
        <th style="font-style:Italic;">email</th>
        <th style="font-style:Italic;">password</th>
      </tr>
    </thead>
    @foreach($forms as $form)
  <tr>
    <td>{{$form->id}}</td>
    <td>{{$form->email}}</td>
    <td>{{$form->password}}</td>
    
   
  </tr>
  @endforeach
 
     
 
      
    </tbody>
  </table>
</div>

</body>
</html>

