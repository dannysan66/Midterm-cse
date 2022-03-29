<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Notes</title>
  </head>
  <body>
    <form class="" action="{{route('save.notes')}}" method="post">
      Post : <br><input type="text" name="name" value=""><br>
      Description : <br><textarea name="description"></textarea>
      <input type="submit" name="" value="submit">
    </form>


  </body>
</html>
