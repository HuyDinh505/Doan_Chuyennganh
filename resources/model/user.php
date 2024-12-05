<?php
// function themdm($tendm){
//     $conn = connectdb();
//     $sql = "INSERT INTO danhmuc (tendm)
//     VALUES ('".$tendm."')";

//     $conn->exec($sql);
// }
function checkuser($email, $pass) {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT UserType FROM users WHERE Email = :email AND PasswordHash = :pass");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetch();

    if (is_array($kq) && !empty($kq)) {
        return $kq['UserType'];
    } else {
        return null; // Trả về null nếu không tìm thấy người dùng
    }
}


// function del_dm($id){
//     $conn = connectdb();
//     $sql = "DELETE FROM danhmuc WHERE id=".$id;
//     $conn->exec($sql);
// }
// function getone_dm($id){
//     $conn = connectdb();
//     $stmt = $conn->prepare("SELECT * FROM danhmuc WHERE id=".$id);
//     $stmt->execute();
//     $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }
// function update_dm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE danhmuc SET tendm='".$tendm."' WHERE id=".$id;
//   $stmt = $conn->prepare($sql);
//   $stmt->execute();
// }
?>
