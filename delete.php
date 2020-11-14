<?php 
    conn = mysqli_init();
    mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);

    if (isset($_REQUEST['delete_id'])) {
        $id = $_REQUEST['delete_id'];

        $select_stmt = $db->prepare("SELECT * FROM guestbook WHERE ID = :ID");
        $select_stmt->bindParam(':ID', $ID);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

        // Delete an original record from db
        $delete_stmt = $db->prepare('DELETE FROM guestbook WHERE ID = :ID');
        $delete_stmt->bindParam(':ID', $ID);
        $delete_stmt->execute();

        header('Location:show.php');
    }
?>
