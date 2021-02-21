
<?php

include_once("banco1.php");
$result_tbembalagem = "SELECT * FROM tbembalagem";
$resultado_tbembalagem = mysqli_query($conn, $result_tbembalagem);
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Natural da Terra</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="stilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../inicioadm.html"><img src="imagem/logorodape.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

    
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">PERDAS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BAIXA DE EMBALAGENS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MFBF</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">DEVOLUÇÃO</a>
            </li>
          </ul>
        </div>
      </nav>
<div style="margin-top: 20px;" class="container">
<td  ><a  class="btn btn-outline-success btn-lg btn-block" href="geraexcel.php" role="button">DONWLOAD PLANILHA EXCEL</a></td>
</div>

      <div class="container">

        <table style="margin-top: 50px;" class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">DESCRIÇÃO</th>
              <th scope="col">CODIGO</th>
              <th scope="col">QUANTIDADE</th>
              <th scope="col">ALTERA</th>
            </tr>
          </thead>
          <tbody>

            <?php while($rows_tbembalagem = mysqli_fetch_assoc($resultado_tbembalagem)) { ?>
            <tr>
              <th scope="row"><?php echo $rows_tbembalagem['id'];?></th>
              <td><?php echo $rows_tbembalagem['material'];?></td>
              <td><?php echo $rows_tbembalagem['codigo'];?></td>
              <td><?php echo $rows_tbembalagem['quantidade'];?></td> 
              <td><a class="btn btn-danger btn-sm" href="deleta.php?id=<?php echo $rows_tbembalagem["id"]; ?>" role="button">DELETAR</a></td>
              
             
            </tr>
            
                 <?php } ?>
            
          </tbody>
        </table>
        
      
          
      </div>
      <footer>
        <div style="margin-top: 160px;" class="card text-center">
          <div class="card-header">
            TATUAPÉ
          </div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            
          </div>
          <div class="card-footer text-muted">
            Copyright Natural da Terra.
          </div>
        </div>
  
      </footer>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>