<!Doctype html>
<html lang="es">

<head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=0">
      <!-- Bootstrap CSS -->
      <link rel="icon" type="image/png" href="img/favicon.png" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/646c794df3.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/estilo3.css">
      <title>Login</title>
</head>

<body>
      <form action="registro_login.php" method="POST">
            <div class="container">

                  <div class="row justify-content-center text-center pt-4 st-4 m-1">
                        <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                              <div class="form-group pt-5">
                                    <img src="img/3.png" class="logo" alt="">
                              </div>
                              <div class="form-group mx-sm-3 mb-1">
                                    <input type="text" class="form-control caja" placeholder="Usuario" name="usuario" required>
                              </div>
                              <div class="form-group mx-sm-3 mb-1">
                                    <input type="password" class="form-control caja" placeholder="password" name="pass" required>
                              </div>
                              <div class="form-group mx-sm-3 pb-5 pb-5">
                                    <input type="submit" class="btn btn-block boton" value="LOGIN" name="ingresar">
                              </div>
                              <div class="form-group mx-sm-3">
                                    <label>No tengo cuenta <a href="registro.php" class="registrate">Registrese aqui</a></label>
                              </div>
                              <div class="form-group mx-sm-3">
                                    <a href="https://accounts.google.com/v3/signin/identifier?dsh=S420173605%3A1668986316256297&continue=https%3A%2F%2Faccounts.google.com%2Fgsi%2Fselect%3Fclient_id%3D49625052041-kgt0hghf445lmcmhijv46b715m2mpbct.apps.googleusercontent.com%26ux_mode%3Dpopup%26ui_mode%3Dcard%26as%3DphH46sHI6kjepi1rNqsXdA%26channel_id%3D94237fa85d4898bb15ae53787e69e9844a450f3d1925d4a64a69fab0067edf6e%26origin%3Dhttps%3A%2F%2Ftwitter.com&faa=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=ARgdvAvuAbNlYnZyfjNmG7ZQVLsUIxdeEINhLL35rVt0Oro6epP_vVuansBIkuxPC-HxqGxnm0DA" class="links"><i class="fab fa-google"></i></a>
                                    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D" class="m-1 links"><i class="fab fa-twitter"></i></a>
                                    <a href="https://es-la.facebook.com/" class="links"><i class="fab fa-facebook"></i></a>

                              </div>
                        </div>
                  </div>
            </div>
      </form>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>