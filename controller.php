<?php

     require_once 'conexion.php';
 
 

    class Formulario extends Database {

        function __construct()
        {
           $this->db = new Database;
        }
        

        public function registrar($name,$email,$phone) {

           //INTENTO INSERTAR NUEVO REGISTRO EN CASO DE FALLAR MUESTRA ERROR
            try{
                $this->db->query("INSERT INTO `form` (`name`,`email`,`phone`,date) 
                    Values 
                        (:name,:email,:phone,CURDATE())"); 
                $this->db->bind(':name',$name);
               // $this->db->bind(':lastname',$lastname); 
                $this->db->bind(':email',$email); 
                $this->db->bind(':phone',$phone);
                
                ?>
               
                <script>
                    swal({
                    title: 'Messsage sent succesfuly',
                    text: 'Thanks, we contact you soon',
                    type: 'success',
                    }).then(function() {
              window.location.replace ('index.php');
          });
                </script>
            <?php
                
                $se = $this->db->execute();   

                return $se;
               
                
            }catch(\Exception $e){
              
            ?>
                <script> swal({
                    title: 'Oopss, Someting wrong',
                    text: 'Please try with a different email',
                    type: 'error'
                    }).then(function() {
              window.location.replace ('index.php');
                </script>
                    <?php
                   
                        
            }
                
           
           

        }
    

	}     