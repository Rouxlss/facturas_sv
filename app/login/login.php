<?php 

if(isset($_SESSION['user_session'])){
    redirect("main");
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if($_POST['Enviar'] == 'Registrarse') {

        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $password = $_POST['password'];

        $existing_user = verify_existing_user_by_mail($connection, $user_email);

        if($existing_user==0){

            $id = $user_name.$user_last_name.$user_email;
            $id = hash('md5', $id);
        
            $PFQ
            ->insert('tbl_users')->values([
                'id_user' => $id,
                'name' => $user_name,
                'last_name' => $user_last_name,
                'email' => $user_email,
                'password' => $password,
                'date_created' => Date('Y-m-d H:i:s'),
            ])();

            $_SESSION['user_session'] = $id;
            $_SESSION['user_type'] = 0;
    
            echo "<script>
                show_alert(3, 'Se ha registrado con exitoo')
                setTimeout(() => {
                    window.location.href = '".VIEW."main';
                }, 1000);
            </script>";

    
        }else {

            echo "<script>show_alert(2, 'Ya se ha registrado este correo')</script>";
            
        }
    }

    if($_POST['Enviar'] == 'Iniciar Sesion') {

        $user_email = $_POST['email'];
        $password = $_POST['password'];

        $existing_user = login_user($connection, $user_email, $password);

        if($existing_user==0){

            echo "<script>show_alert(2, 'Esta cuenta no está registrada')</script>";
    
        }else {

            $user = get_info_user_after_login($connection, $user_email, $password);

            $_SESSION['user_session'] = $user['id_user'];
            $_SESSION['user_type'] = 0;

            redirect("main");

        }
    }

}

require('./views/login/login.view.php');

?>