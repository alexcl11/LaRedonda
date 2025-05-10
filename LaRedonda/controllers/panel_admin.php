<?php
    

require_once 'models/Usuario.php';

$usuario = new Usuario();
$users = $usuario -> getUsers();

if(isset($_POST['form-modify-id']) && isset($_POST['form-modify-name']) && isset($_POST['form-modify-email']) && isset($_POST['form-modify-role'])){
    $id = $_POST['form-modify-id'];
    $name = $_POST['form-modify-name'];
    $email = $_POST['form-modify-email'];
    $role = $_POST['form-modify-role'];

    $numberOfEqualEmails = 0;
    foreach ($users as $user){
        if($user['email'] === $email && $user['id'] != $id)
            $numberOfEqualEmails++;   }
    

    if($numberOfEqualEmails>0)
        $userExistsUpdate = 'El email introducido ya pertenece a un usuario';
    else{
        $userExistsUpdate = '';
    }
    if($userExistsUpdate == ''){  
        $modifyUser = $usuario -> updateUser($id, $name, $email, $role);   
        header('Location: '.BASE_PATH.'/panel-admin');
    }
}

if(isset($_POST['form-create-name']) && isset($_POST['form-create-email']) && isset($_POST['form-create-password']) && isset($_POST['form-create-role'])){
        $name = $_POST['form-create-name'];
        $email = $_POST['form-create-email'];
        $password = $_POST['form-create-password'];
        $role = $_POST['form-create-role'];
        
        foreach ($users as $user){
            if($user['email']===$email)
                $userExists = 'El email introducido ya pertenece a un usuario';
            else
                $userExists = '';
        }

        if($userExists == ''){  
            $createUser = ($role==1) ? $usuario -> createAdmin($email, $name, $password) : $usuario -> createUser($email, $name, $password);   
            unset($_POST['email']);
            header('Location: '.BASE_PATH.'/panel-admin');
        }
 
    
}
    
    
require_once 'views/panel_admin.view.php';