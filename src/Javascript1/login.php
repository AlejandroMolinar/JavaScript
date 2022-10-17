<?php 

    //$password="123456789";
    //$user="Alejandro";
    $userGet= isset($_GET['user']) ? $_GET['user'];
    $_POST('user');

    $passwordGet= isset($_GET['password']) ? $_GET['password'];
    $_POST('password');

    $conexion= mysqli_connect("localhost", "test", "root", "");
    if (mysqli_connect_errno()) {
        $errno="Error al conectar";
    }

    $resulSet= mysqli_query($conexion, "Select * From userprofile WHERE User= '$userGet");
   
  //  $resulSet->execute(array(":user"=>$userGet)); //ejecutar consulta PDO
    $arreglo = $resulSet->fetch(PDO::FETCH_ASSOC); //convertir en arreglo nuestro resultado
    $json = json_encode($arreglo);
    
    echo $json;

    /*while ($fila=mysqli_fetch_array($resulSet, MYSQL_ASSOC)) {
        $user=$fila[`User`];
        $password=$fila['Password'];
        

        if ($userGet==$user && $passwordGet==$password) {
            
            $lastName=$fila['LastName'];
            $firstName=$fila['FirstName'];
            $identification=$fila['Identification'];
            $phone=$fila['Phone'];
            $email=$fila['Email'];
            $career=$fila['Career'];
            $semester=$fila['Semester'];
            $pais=$fila['Pais'];       
        }else{
            echo "No se encuentra el ususario";
        }
    }*/








?>