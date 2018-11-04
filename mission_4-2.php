<?php 
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE table5"
."("
."number INT,"
."name char(32),"
."comment TEXT,"
."password char(32),"
."date char(32)"
.");";
$stmt=$pdo->query($sql);
?>

<?php
$judge=$_POST["judge"];
$name=$_POST["name"];
$comment=$_POST["comment"];
$password1=$_POST["password"];
$date=date("Y/m/d H:i:s");
$submit=$_POST["submit"];
if($submit=="送信する" and $comment!="" and $name!="" ){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
if($judge==""){
$sql="SELECT MAX(number) FROM tt_623_99sv_coco_com.table5";//30
$result=$pdo->query($sql);
foreach($result as $row){
$number=1+$row[0];
}
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.table5(number,name,comment,password,date)
VALUES(:number,:name,:comment,:password,:date)");//30
$sql->bindParam(":number",$number,PDO::PARAM_STR);
$sql->bindParam(":name",$name,PDO::PARAM_STR);
$sql->bindParam(":comment",$comment,PDO::PARAM_STR);
$sql->bindParam(":password",$password1,PDO::PARAM_STR);
$sql->bindParam(":date",$date,PDO::PARAM_STR);
$sql->execute();
}else{
$sql="update tt_623_99sv_coco_com.table5 set name='$name',comment='$comment',date='$date'where number=$judge";
$result=$pdo->query($sql);
}
}
?>

<?php
$delete=$_POST["delete"];
$password1=$_POST["password1"];
$submit1=$_POST["submit1"];
if($submit1=="削除する" and $delete!="" and $password!=""){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT password FROM tt_623_99sv_coco_com.table5 WHERE number=$delete";
$results=$pdo->query($sql);//50
foreach($results as $row){
$password2=$row[0];
}
if($password1==$password2){
$sql="delete from tt_623_99sv_coco_com.table5 where number=$delete";
$result=$pdo->query($sql);
}else{
echo "パスワードが違います";
}
}
?>

<?php
$submit2=$_POST["submit2"];
$edit=$_POST["edit"];
$password3=$_POST["password3"];
if($submit2=="編集する" and $edit!="" and $password3!=""){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT name,comment,password FROM tt_623_99sv_coco_com.table5 WHERE number=$edit";
$results=$pdo->query($sql);
foreach($results as $row){
$name1=$row[0];
$comment1=$row[1];
$password4=$row[2];
}
if($password3==$password4){
$name2=$name1;
$comment2=$comment1;
$edit1=$edit;
}else{
echo "パスワードが違います";
}
}
?>

<form action="mission_4-2.php" method="post">
<label for="name">名前</label><br>
<input type="text"  name="name" value="<?php echo $name2;?>" placeholder="名前"><br>
<label for="comment">コメント</label><br>
<input type="text" name="comment" value="<?php echo $comment2;?>" placeholder="コメント"><br>
<label for="password">パスワード</label><br>
<input type="text" name="password" placeholder="パスワード"><br>
<input type="hidden" name="judge" value="<?php echo $edit1;?>">
<input type="submit" name="submit" value="送信する">
</form>

<form action="mission_4-2.php" method="post">
<label for="delete">削除対象番号</label><br>
<input type="text" name="delete" placeholder="削除対象番号（半角）"><br>
<label for="password1">パスワード</label><br>
<input type="text" name="password1"　placeholder="パスワード"><br>
<input type="submit" name="submit1" value="削除する">
</form>

<form action="mission_4-2.php" method="post">
<label for="edit">編集対象番号</label><br>
<input type="text" name="edit" placeholder="編集対象番号（半角）"><br>
<label for="password3">パスワード</label><br>
<input type="text" name="password3" placeholder="パスワード"><br>
<input type="submit" name="submit2" value="編集する">
</form>

<?php
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.table5";
$results=$pdo->query($sql);
foreach($results as $row){
echo $row["number"].",";
echo $row["name"].",";
echo $row["comment"].",";
echo $row["date"]."<br>";
}
?>
