<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <table class="table container">
    
    <thead>
      <tr>
        <?php foreach ($auteur as $key => $value) : ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($auteur as $key => $value) : ?>
            <td><?= $value ?></td>
        <?php endforeach; ?>
      </tr>
    </tbody>
    
  </table>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>