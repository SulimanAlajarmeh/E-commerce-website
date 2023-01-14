
<?php
include('connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE  FROM signup WHERE(id=$id)";
    $result=mysqli_query($conn,$sql);

    if($result){
        header('Location:Admain.php');
    }
    else{
        die(mysqli_error($conn));
    }
}



?>


<?php
include('connect.php');
if(isset($_GET['delete-massage'])){
$massageid=$_GET['delete-massage'];
$delete="DELETE FROM usermassage WHERE (id=$massageid) ";
$result2=mysqli_query($conn,$delete);

    if($result2){
        header('Location:Admain.php');
    }
    else{
        die(mysqli_error($conn));
    }
}



?>