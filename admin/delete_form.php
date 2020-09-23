<?php
    require_once "init2.php";
    session_start();
    if(!isset($_SESSION['userName'])){
      header("location:../siggin.php");

    }
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $material_id = $_GET['id'];
        $stmt = $con->prepare("DELETE FROM material WHERE ID = :material_id");
        $stmt->bindParam(":material_id" , $material_id);
        $stmt->execute();
        echo "<br><br><h2 class='alert alert-danger'>material has deleted successfuly ... you will return to dashboard in 5s</h2>";
        header("refresh:2;url=dashboard.php");
    }
        else{
            header("location:dashboard.php");
        }


        /*delete data from courses*/

        if (isset($_GET['id']) && is_numeric($_GET['id'])){
            $material_id = $_GET['id'];
            $stmt = $con->prepare("DELETE FROM courses WHERE ID = :material_id");
            $stmt->bindParam(":material_id" , $material_id);
            $stmt->execute();
        }
            else{
                header("location:dashboard.php");
            }


            if (isset($_GET['id']) && is_numeric($_GET['id'])){
                $material_id = $_GET['id'];
                $stmt = $con->prepare("DELETE FROM books WHERE ID = :material_id");
                $stmt->bindParam(":material_id" , $material_id);
                $stmt->execute();
            }
                else{
                    header("location:dashboard.php");
                }
    
