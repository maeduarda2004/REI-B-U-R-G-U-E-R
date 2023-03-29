<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REI B U R G U E R</title>
</head>
<body>
    <?php
        $login = $_POST ["login"];
        $senha = $_POST["senha"];


        if ($login == 'Duda' && $senha == '123456'){
            echo "Login realizado com sucesso!";
        }
        

        else{
            echo "Usuario ou senha incorretos!!!";
        }
    



    ?>

</body>
</html>