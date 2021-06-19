<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 >PDF</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>DOCUMENT TITLE</th>
        <th>DESCRIPTION</th>
        <th>DATE</th>
        <th>TIME</th>
        <th>PHOTO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$events->document_title}}</td>
        <td>{{$events->short_description}}</td>
        <td>{{$events->date}}</td>
        <td>{{$events->time}}</td>
        <td><img src="{{asset('storage/images/'.$events->event_pic)}}" alt="" width="50" height="50"></td>
      </tr>
    </tbody>
  </table>
</div>
 <script>
    window.print();
</script> 
</body>
</html>