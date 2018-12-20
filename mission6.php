<?php //【mission_6-1.php（ログイン画面）】
$mail=$_POST["mail"];
$password1=$_POST["password"];
$submit1=$_POST["submit1"];
if($submit1=="ログイン"
and $mail!=""
and $password1!=""){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT * FROM tt_623_99sv_coco_com.keijiban1 WHERE adress='$mail'";
$result=$pdo->query($sql);
foreach($result as $row){
$password2=$row["password"];
$pre=$row["pre"];
$name=$row["name"];
}
if($password1==$password2){
header("location:http://tt-623.99sv-coco.com/mission_6-3.php");
session_start();
$_SESSION["pre"]=$pre;
$_SESSION["name"]=$name;
$_SESSION["adress"]=$mail;
$_SESSION["password"]=$password1;
}else{
echo "<div align='center'><font color='#ff0000'>メールアドレスもしくはパスワードに誤りがあります</font></div><br>";
}
}else{
if($submit1=="ログイン" and $mail==""){
echo "<div align='center'><font color='#ff0000'>メールアドレスを入力してください</font></div><br>";
}
if($submit1=="ログイン" and $password1==""){
echo "<div align='center'><font color='#ff0000'>パスワードを入力してください</font></div><br>";
}
}
?>

<?php
$submit1=$_POST["submit1"];
$submit2=$_POST["submit2"];
if($submit2=="新規会員登録"){
header("location:http://tt-623.99sv-coco.com/mission_6-2.php");
}
?>

<div align="center">
<form action="mission_6-1.php" method="post">
<input type="text" name="mail" placeholder="メールアドレス"><br>
<input type="text" name="password" placeholder="パスワード"><br>
<input type="submit" name="submit1" value="ログイン"><br>
<br>
<br>
<input type="submit" name="submit2" value="新規会員登録">
</form>
</div>


<div align="center"> //【mission_6-2.php（新規登録画面）】 
<form action="mission_6-2.php" method="post">
<label for="name">ニックネームを入力して下さい</label><br>
<input type="text" name="name" placeholder="ニックネーム"><br>
<br>
<label for="pre">お住まいの都道府県をお選びください</label><br>
<select name="pre">
<option value="沖縄県">沖縄県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="宮崎県">宮崎県</option>
<option value="大分県">大分県</option>
<option value="熊本県">熊本県</option>
<option value="長崎県">長崎県</option>
<option value="佐賀県">佐賀県</option>
<option value="福岡県">福岡県</option>
<option value="山口県">山口県</option>
<option value="広島県">広島県</option>
<option value="鳥取県">鳥取県</option>
<option value="岡山県">岡山県</option>
<option value="島根県">島根県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="香川県">香川県</option>
<option value="徳島県">徳島県</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>
<option value="滋賀県">滋賀県</option>
<option value="大阪府">大阪府</option>
<option value="和歌山県">和歌山県</option>
<option value="奈良県">奈良県</option>
<option value="三重県">三重県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="富山県">富山県</option>
<option value="岐阜県">岐阜県</option>
<option value="長野県">長野県</option>
<option value="愛知県">愛知県</option>
<option value="静岡県">静岡県</option>
<option value="山梨県">山形県</option>
<option value="新潟県">新潟県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="栃木県">栃木県</option>
<option value="茨城県">茨城県</option>
<option value="千葉県">千葉県</option>
<option value="福島県"福島県></option>
<option value="山形県">山形県</option>
<option value="宮城県">宮城県</option>
<option value="岩手県">岩手県</option>
<option value="秋田県">秋田県</option>
<option value="青森県">青森県</option>
<option value="北海道">北海道</option>
</select><br>
<br>
<label for="adress">メールアドレスを入力してください</label><br>
<input type="text" name="adress" placeholder="メールアドレス"><br>
<input type="text" name="check-ad" placeholder="メールアドレス（再入力)"><br>
<br>
<label for="password">パスワードを入力してください</label><br>
<input type="text" name="password" placeholder="パスワード"><br>
<input type="text" name="check-pass" placeholder="パスワード（再入力）"><br>
<br>
<p style="border-width: 5px; border-color: black; border-style: double; width:250px;" >
利用規約です
</p>
<input type="checkbox" name="rule" value="利用規約">
利用規約に同意する<br>
<br>
<input type="submit" name="submit" value="新規登録する">
</form>
</div>

<?php //
$name=$_POST["name"];
$pre=$_POST["pre"];
$adress=$_POST["adress"];
$adress1=$_POST["check-ad"];
$password1=$_POST["password"];
$password2=$_POST["check-pass"];
$rule=$_POST["rule"];
$submit=$_POST["submit"];
if($submit=="新規登録する" ){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT COUNT(adress) FROM tt_623_99sv_coco_com.keijiban1 WHERE adress='$adress'";
$result=$pdo->query($sql);
foreach($result as $row){
$count=$row[0];
}
$sql="SELECT COUNT(name) FROM tt_623_99sv_coco_com.keijiban1 WHERE name='$name'";
$results=$pdo->query($sql);
foreach($results as $row){
$count1=$row[0];
}
if($count==0 
and $count1==0
and $name!=""
and $adress!=""
and $adress==$adress1
and $password1!=""
and $password1==$password2
and $rule=="利用規約"){
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$rand=mt_rand(0,9);
$rand1=mt_rand(0,9);
$rand2=mt_rand(0,9);
$rand3=mt_rand(0,9);
$random=$rand.$rand1.$rand2.$rand3;
$title="仮登録完了のお知らせ";
$message=$name."様へ"."\r\n"
."会員制掲示板への仮登録が完了しました"."\r\n"
."ユーザー認証番号は".$random."です"."\r\n"
."ユーザー認証番号を入力し、登録を完了させてください";
mb_send_mail($adress,$title,$message);
echo "メールアドレスにユーザー認証番号を送信しました<br>
<form action='mission_6-2.php' method='post'>
<input type='hidden' name='random' value=$random>
<input type='hidden' name='name1' value=$name>
<input type='hidden' name='pre1' value=$pre>
<input type='hidden' name='adress1' value=$adress>
<input type='hidden' name='password1' value=$password1>
<label for='check'>ユーザー認証番号を入力して下さい</label><br>
<input type='text' name='check' placeholder='数字4桁（半角）'><br>
<input type='submit' name='submit1' value='確認する'>
</form>";
}else{
if($count>=1){
echo "<div align='center'><font color='#ff0000'>このメールアドレスは既に登録されています</font></div><br>";
}
if($count1>=1){
echo "<div align='center'><font color='#ff0000'>このニックネームは既に使われています</font></div><br>";
}
if($adress!=$adress1){
echo "<div align='center'><font color='#ff0000'>2つのメールアドレスが異なります</font></div><br>";
}
if($password1!=$password2){
echo "<div align='center'><font color='#ff0000'>2つのパスワードが異なります</font></div><br>";
}
if(empty($_POST["rule"])){
echo "<div align='center'><font color='#ff0000'>利用規約に同意してください</font></div><br>";
}
if(empty($name)){
echo "<div align='center'><font color='#ff0000'>ニックネームが入力されていません</font></div><br>";
}
if($adress=="" or $adress1==""){
echo "<div align='center'><font color='#ff0000'>メールアドレスが入力されていません</font></div><br>";
}
if($password1=="" or $password2==""){
echo "<div align='center'><font color='#ff0000'>パスワードが入力されていません</font></div><br>";
}
}
}
?>

<?php
$pre1=$_POST["pre1"];
$name1=$_POST["name1"];
$adress1=$_POST["adress1"];
$password1=$_POST["password1"];
$random1=$_POST["random"];
$check=$_POST["check"];
$submit1=$_POST["submit1"];
if($submit1=="確認する"){
if($random1==$check){
echo "<div align='center'>登録が完了しました</div><br>
<form action='mission_6-2.php' method='post'>
<input type='submit' name='submit2' value='ログイン画面に行く'>
</form>";
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT MAX(number) FROM tt_623_99sv_coco_com.keijiban1";
$result=$pdo->query($sql);
foreach($result as $row){
$number1=1+$row[0];
}
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.keijiban1(number,pre,name,adress,password)
VALUES(:number,:pre,:name,:adress,:password)");
$sql->bindParam(":number",$number1,PDO::PARAM_STR);
$sql->bindParam(":pre",$pre1,PDO::PARAM_STR);
$sql->bindParam(":name",$name1,PDO::PARAM_STR);
$sql->bindParam(":adress",$adress1,PDO::PARAM_STR);
$sql->bindParam(":password",$password1,PDO::PARAM_STR);
$sql->execute();
}else{
echo "<div align='center'><font color='#ff0000'>ユーザー認証番号が違います</font></div>";
}
}
?>

<?php
$submit3=$_POST["submit2"];
if($submit3=="ログイン画面に行く"){
header("location:http://tt-623.99sv-coco.com/mission_6-1.php");
}
?>



<?php //【mission_6-3.php（新規投稿画面）】
session_start();
$name=$_SESSION["name"];
$pre=$_SESSION["pre"];
$mail=$_SESSION["adress"];
?>

<?php
$comment=$_POST["comment"];
$submit=$_POST["submit"];
$gentei=$_POST["pre"];
$tokumei=$_POST["tokumei"];
$date=date("Y/m/d H:i:s");
if($submit=="投稿する"
and $gentei!=""
and $tokumei!=""
and $comment!=""){
if($gentei=="pre"){
$gentei1="1";
}else{
$gentei1="2";
}
if($tokumei=="tokumei"){
$tokumei1="1";
}else{
$tokumei1="2";
}
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT MAX(number) FROM tt_623_99sv_coco_com.keijiban3";
$result=$pdo->query($sql);
foreach($result as $row){
$number=1+$row[0];
}
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.keijiban3(number,name,pre,comment,date,gentei,tokumei)
VALUES(:number,:name,:pre,:comment,:date,:gentei,:tokumei)");
$sql->bindParam(":number",$number,PDO::PARAM_STR);
$sql->bindParam(":name",$name,PDO::PARAM_STR);
$sql->bindParam(":pre",$pre,PDO::PARAM_STR);
$sql->bindParam(":comment",$comment,PDO::PARAM_STR);
$sql->bindParam(":date",$date,PDO::PARAM_STR);
$sql->bindParam(":gentei",$gentei1,PDO::PARAM_STR);
$sql->bindParam(":tokumei",$tokumei1,PDO::PARAM_STR);
$sql->execute();
}else{
if($comment=="" and $submit=="投稿する"){
echo "<font color='#ff0000'>投稿内容を入力してください</font><br>";
}
if($gentei=="" and $submit=="投稿する"){
echo "<font color='#ff0000'>掲示板の種類を選んでください</font><br>";
}
if($tokumei=="" and $submit=="投稿する"){
echo "<font color='#ff0000'>匿名希望の有無を選んでください</font><br>";
}
}
?>	

<?php //ログアウトボタンを押したとき
$log=$_POST["log"];
if($log=="ログアウトする"){
session_start();
unset($_SESSION["name"]);
unset($_SESSION["pre"]);
unset($_SESSION["adress"]);
unset($_SESSION["password"]);
header("location:http://tt-623.99sv-coco.com/mission_6-4.php");
}
?>

<?php //返信ボタンを押したとき
$to=$_POST["to"];
$reply=$_POST["reply"];
$number3=$_POST["number"];
$name3=$_POST["tokumei"];
$gentei1=$_POST["gentei"];
$naiyou=$_POST["naiyou"];
$date3=$_POST["date"];
$reply1=$_POST["reply1"];
if($reply=="返信"){
session_start();
$_SESSION["to"]=$to;
$_SESSION["name1"]=$name3;
$_SESSION["pre1"]=$gentei1;
$_SESSION["comment"]=$naiyou;
$_SESSION["date"]=$date3;
$_SESSION["number"]=$number3;
$_SESSION["reply"]=$reply1;
header("location:http://tt-623.99sv-coco.com/mission_6-5.php");
}
?>

<?php //削除ボタンを押したとき
$delete=$_POST["delete"];
$delto=$_POST["to"];
$delrep=$_POST["reply1"];
if($delete=="削除"){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
if($delrep=="0"){
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE number='$delto'";
$result=$pdo->query($sql);
foreach($result as $row){
$delname=$row["name"];
}
if($delname==$name){
echo <<<EOM
<script type="text/javascript">
  alert( "本当に削除しますか？" )
</script>
EOM;
$sql="delete from tt_623_99sv_coco_com.keijiban3 where number='$delto'";
$results=$pdo->query($sql);
}else{
echo <<<EOM
<script type="text/javascript">
alert ("他人の投稿は削除できません")
</script>
EOM;
}
}else{
$sql="SELECT*FROM tt_623_99sv_coco_com.reply WHERE num='$delto'";
$result=$pdo->query($sql);
foreach($result as $row){
$delname1=$row["name"];
}
if($delname1==$name){
echo <<<EOM
<script type="text/javascript">
alert("本当に削除しますか？")
</script>
EOM;
$sql="delete from tt_623_99sv_coco_com.reply where num='$delto'";
$results=$pdo->query($sql);
}else{
echo <<<EOM
<script type="text/javascript">
alert("他人の投稿は削除できません")
</script>
EOM;
}
}
}
?>

<?php //編集ボタンを押したとき
$edit=$_POST["edit"];
$editto=$_POST["to"];
$editrep=$_POST["reply1"];
if($edit=="編集"){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
if($editrep=="0"){
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE number='$editto'";
$result=$pdo->query($sql);
foreach($result as $row){
$editname=$row["name"];
$editcom=$row["comment"];
}
if($editname==$name){
echo "<h2>編集フォーム</h2><form action='mission_6-3.php' method='post'>
<textarea name='editform' cols='50' rows='5'>$editcom</textarea><br>
<input type='submit' name='editsub' value='編集内容を投稿する'>
<input type='text' name='zeroichi' value='0'>
<input type='text' name='ban' value='$editto'>
</form>";
}else{
echo <<<EOM
<script type="text/javascript">
alert("他人の投稿は編集できません")
</script>
EOM;
}
}else{
$sql="SELECT*FROM tt_623_99sv_coco_com.reply WHERE num='$editto'";
$results=$pdo->query($sql);
foreach($results as $row){
$editname1=$row["name"];
$editcom=$row["comment"];
}
if($editname1==$name){
echo "<h2>編集フォーム</h2><form action='mission_6-3.php' method='post'>
<textarea name='editform' cols='50' rows='5'>$editcom</textarea><br>
<input type='submit' name='editsub' value='編集内容を投稿する'>
<input type='text' name='zeroichi' value='1'>
<input type='text' name='ban' value='$editto'>
</form>";
}else{
echo <<<EOM
<script type="text/javascript">
alert("他人の投稿は編集できません")
</script>
EOM;
}
}
}
?>

<?php //編集投稿ボタンを押したとき
$ban=$_POST["ban"];
$zeroichi=$_POST["zeroichi"];
$editsub=$_POST["editsub"];
$editform=$_POST["editform"];
if($editsub=="編集内容を投稿する"){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
if($zeroichi=="0"){
$sql="update tt_623_99sv_coco_com.keijiban3 set comment='$editform',date='$date' where number='$ban'";
$result=$pdo->query($sql);
echo <<<EOM
<script type="text/javascript">
alert("本当に編集内容を投稿しますか？")
</script>
EOM;
}else{
$sql="update tt_623_99sv_coco_com.reply set comment='$editform',date='$date' where num='$ban'";
$results=$pdo->query($sql);
echo <<<EOM
<script type="text/javascript">
alert("本当に編集内容を投稿しますか？")
</script>
EOM;
}
}
?>

<h2>ようこそ！
<?php session_start();
echo $_SESSION["name"]; ?>
様</h2>

<div style="width: 100%; color:white; background-color:#afeeee;"><a href="#a">新規投稿はコチラから</a><br>
<a href="#b"><?php echo $pre;?>限定掲示板を見る</a><br>
<a href="#c">全国版掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">新しい掲示板を作成する</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">マイアカウント</a><br>
<a href="#111">ログアウト</a></div>

<a id="a"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2>新規投稿はコチラから</h2></div>
<form action="mission_6-3.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="投稿を入力してください"></textarea>
<input type="reset" value="取り消し"><br>
<input type="radio" name="pre" value="pre"><?php session_start(); echo $_SESSION["pre"];?>限定掲示板に投稿する
<input type="radio" name="pre" value="nopre">全国版掲示板に投稿する<br>
<input type="radio" name="tokumei" value="tokumei">匿名希望
<input type="radio" name="tokumei" value="notokumei">匿名を希望しない<br>
<input type="submit" name="submit" value="投稿する">
</form>


<a id="b"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2><?php echo $pre;?>限定掲示板</h2></div>
<hr>
<?php
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE gentei='1' and pre='$pre'";
$results=$pdo->query($sql);
foreach($results as $row){
$number1=$row["number"];
$comment1=$row["comment"];
$date1=$row["date"];
$name1=$row["name"];
if($row["tokumei"]=="1"){
$namae1="匿名希望";
$toku="1";
}else{
$namae1=$name1;
$toku=$name1;
}
echo "<hr><br>".$number1."：".$namae1."さんからの投稿".$date1."<br>"; 
echo $comment1."<br>";
echo "<a id='$number1'></a><form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='返信'style='background:white;border:none;'>
<input type='submit' name='edit' value='編集'style='background:white;border:none;'>
<input type='submit' name='delete' value='削除' style='background:white;border:none;'>
<input type='hidden' name='to' value='$number1'>
<input type='hidden' name='number' value='$number1'>
<input type='hidden' name='tokumei' value='$toku'>
<input type='hidden' name='gentei' value='$pre'>
<input type='hidden' name='naiyou' value='$comment1'>
<input type='hidden' name='date' value='$date1'>
<input type='hidden' name='reply1' value='0'>
</form><br>";
$sql="SELECT*FROM tt_623_99sv_coco_com.reply WHERE number='$number1'";
$result1=$pdo->query($sql);
foreach($result1 as $row){
$reprep=$row["reply"];
$aiterep=$row["aite"];
$numrep=$row["num"];
$namerep=$row["name"];
$commentrep=$row["comment"];
$daterep=$row["date"];
$tokumeirep=$row["tokumei"];
if($tokumeirep=="1"){
$namae="匿名希望";
$toku1="1";
}else{
$namae=$namerep;
$toku1=$namerep;
}
if($reprep=="0"){
$henban=$aiterep;
}else{
$henban=$aiterep."a";
}
$numrepa=$numrep."a";
echo $numrep."a:".$namae."さんからの返信".$daterep."<br>";
echo "to<a href='#$henban'>$henban</a><br>";
echo $commentrep."<br>";
echo "<a id='$numrepa'></a><form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='返信'style='background:white;border:none;'>
<input type='submit' name='edit' value='編集'style='background:white;border:none;'>
<input type='submit' name='delete' value='削除' style='background:white;border:none;'>
<input type='hidden' name='to' value='$numrep'>
<input type='hidden' name='number' value='$number1'>
<input type='hidden' name='tokumei' value='$toku1'>
<input type='hidden' name='gentei' value='$pre'>
<input type='hidden' name='naiyou' value='$commentrep'>
<input type='hidden' name='date' value='$daterep'>
<input type='hidden' name='reply1' value='1'>
</form><br>";
}
}
?>


<a id="c"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2>全国版掲示板</h2></div>
<hr>
<?php
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE gentei='2'";
$results=$pdo->query($sql);
foreach($results as $row){
$number2=$row["number"];
$comment2=$row["comment"];
$date2=$row["date"];
$name2=$row["name"];
if($row["tokumei"]=="1"){
$namae2="匿名希望";
$toku2="1";
}else{
$namae2=$name2;
$toku2=$name2;
}
echo "<hr>".$number2."：".$namae2."さんからの投稿".$date2."<br>";
echo $row["comment"]."<br>";
echo "<a id='$number2'></a><form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='返信' style='background:white;border:none;'>
<input type='submit' name='edit' value='編集'style='background:white;border:none;'>
<input type='submit' name='delete' value='削除' style='background:white;border:none;'>
<input type='hidden' name='to'value='$number2'>
<input type='hidden' name='number' value='$number2'>
<input type='hidden' name='tokumei' value='$toku2'>
<input type='hidden' name='gentei' value='2'>
<input type='hidden' name='naiyou' value='$comment2'>
<input type='hidden' name='date' value='$date2'>
<input type='hidden' name='reply1' value='0'>
</form><br>";
$sql="SELECT*FROM tt_623_99sv_coco_com.reply WHERE number='$number2'";
$result1=$pdo->query($sql);
foreach($result1 as $row){
$reprep1=$row["reply"];
$aiterep1=$row["aite"];
$numrep1=$row["num"];
$namerep1=$row["name"];
$commentrep1=$row["comment"];
$daterep1=$row["date"];
$tokumeirep1=$row["tokumei"];
if($tokumeirep1=="1"){
$namae3="匿名希望";
$toku3="1";
}else{
$namae3=$namerep1;
$toku3=$namerep1;
}
if($reprep1=="0"){
$henban1=$aiterep1;
}else{
$henban1=$aiterep1."a";
}
$numrepa1=$numrep1."a";
echo "<a id='$numrepa1'></a>".$numrep1."a:".$namae3."さんからの返信".$daterep."<br>";
echo "to<a href='#$henban1'>$henban1</a><br>";
echo $commentrep1."<br>";
echo "<form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='返信'style='background:white;border:none;'>
<input type='submit' name='edit' value='編集'style='background:white;border:none;'>
<input type='submit' name='delete' value='削除' style='background:white;border:none;'>
<input type='hidden' name='to' value='$numrep1'>
<input type='hidden' name='number' value='$number2'>
<input type='hidden' name='tokumei' value='$toku3'>
<input type='hidden' name='gentei' value='2'>
<input type='hidden' name='naiyou' value='$commentrep1'>
<input type='hidden' name='date' value='$daterep1'>
<input type='hidden' name='reply1' value='1'>
</form><br>";
}
}
?>

<a id="111"></a><h2>ログアウトはコチラから</h2>
<form action="mission_6-3.php" method="post">
<input type="submit" name="log" value="ログアウトする" onClick="alert('本当にログアウトしますか？');">
</form>

<?php //【mission_6-4.php（ログアウト成功画面）】
?>
<h2>ログアウトに成功しました</h2>

<form action="mission_6-4.php" method="post">
<input type="submit" name="return" value="ログイン画面に戻る" >
</form>

<?php
$return=$_POST["return"];
if($return=="ログイン画面に戻る"){
header("location:http://tt-623.99sv-coco.com/mission_6-1.php");
}
?>



<?php //【mission_6-5.php（地域限定掲示板・全国版掲示板への返信フォーム）】
session_start();
$to=$_SESSION["to"];
$name=$_SESSION["name"];
$comment=$_SESSION["comment"];
$date=$_SESSION["date"];
$number=$_SESSION["number"];
$name1=$_SESSION["name1"];
$pre1=$_SESSION["pre1"];
$reply=$_SESSION["reply"];
if($name1=="1"){
$name2="匿名希望";
}else{
$name2=$name1;
}
if($pre1=="2"){
$pre2="全国版掲示板";
}else{
$pre2=$pre1."限定掲示板";
}
?>

<?php
$comment1=$_POST["comment"];
$tokumei=$_POST["tokumei"];
$submit=$_POST["submit"];
$date1=date("Y/m/d H:i:s");
if($tokumei=="tokumei"){
$tokumei1="1";
}else{
$tokumei1="2";
}
if($submit=="返信する"
and $tokumei!=""
and $comment1!=""){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT MAX(num) FROM tt_623_99sv_coco_com.reply";
$result=$pdo->query($sql);
foreach($result as $row){
$num=1+$row[0];
}
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.reply(reply,aite,num,number,name,comment,date,tokumei)
VALUES(:reply,:aite,:num,:number,:name,:comment,:date,:tokumei)");
$sql->bindParam(":reply",$reply,PDO::PARAM_STR);
$sql->bindParam(":aite",$to,PDO::PARAM_STR);
$sql->bindParam(":num",$num,PDO::PARAM_STR);
$sql->bindParam(":number",$number,PDO::PARAM_STR);
$sql->bindParam(":name",$name,PDO::PARAM_STR);
$sql->bindParam(":comment",$comment1,PDO::PARAM_STR);
$sql->bindParam(":date",$date1,PDO::PARAM_STR);
$sql->bindParam(":tokumei",$tokumei1,PDO::PARAM_STR);
$sql->execute();
echo "返信が完了しました";
}else{
if($tokumei==""){
echo "匿名希望の有無を選択してください<br>";
}
if($comment1==""){
echo "返信内容を入力してください";
}
}
?>

<?php 
$submit1=$_POST["submit1"];
if($submit1=="返信を終了する"){
session_start();
unset($_SESSION["reply"]);
unset($_SESSION["to"]);
unset($_SESSION["comment"]);
unset($_SESSION["date"]);
unset($_SESSION["number"]);
unset($_SESSION["name1"]);
unset($_SESSION["pre1"]);
header("location:http://tt-623.99sv-coco.com/mission_6-3.php");
}
?>



<div style="width: 100%; color:white; background-color:#afeeee;"><a href="http://tt-623.99sv-coco.com/mission_6-3.php
">新規投稿はコチラから</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>限定掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">全国版掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">新しい掲示板を作成する</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">マイアカウント</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">ログアウト</a></div>

<div style="width:100%; color:black; background-color:#afeeee;"><h2>返信フォーム</h2></div>

<?php echo $name2;?>さんからの投稿@<?php echo $pre2;?><br>
<?php echo $date;?><br>
<?php echo $comment;?><br>
<hr>
<form action="mission_6-5.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="返信を入力してください"></textarea>
<input type="reset" value="取り消し"><br>
<input type="radio" name="tokumei" value="tokumei">匿名希望
<input type="radio" name="tokumei" value="notokumei">匿名を希望しない<br>
<input type="submit" name="submit" value="返信する">
</form>

<form action="mission_6-5.php" method="post">
<input type="submit" name="submit1" value="返信を終了する" onClick="alert('本当に終了しますか？');">
</form>



<?php //【mission_6-6.php（マイページ）】
session_start();
$mail=$_SESSION["adress"];
$pre=$_SESSION["pre"];
$name=$_SESSION["name"];
$password1=$_SESSION["password"];
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$newpre=$_POST["pre"];
$d=$_POST["d"];
$newname=$_POST["nickname"];
$e=$_POST["e"];
$newadress=$_POST["adress1"];
$newadress1=$_POST["adress2"];
$f=$_POST["f"];
if($d=="変更を保存する"){ //都道府県変更
echo <<<EOM
<script type="text/javascript">
 alert("本当に変更しますか？")
</script>
EOM;
$sql="update tt_623_99sv_coco_com.keijiban1 set pre='$newpre' where adress='$mail'";
$result=$pdo->query($sql);
session_start();
$_SESSION["pre"]=$newpre;
echo "変更が完了しました";
}
if($e=="変更を保存する"){ //ニックネーム変更
if($newname!=""){
$sql="SELECT COUNT(name) FROM tt_623_99sv_coco_com.keijiban1 WHERE name='$newname'";
$result=$pdo->query($sql);
foreach($result as $row){
$count=$row[0];
}
if($count=="0"){
echo <<<EOM
<script type="text/javascript">
alert("本当に変更しますか？")
</script>
EOM;
$sql="update tt_623_99sv_coco_com.keijiban1 set name='$newname' where adress='$mail'";
$results=$pdo->query($sql);
session_start();
$_SESSION["name"]=$newname;
echo "変更が完了しました";
}else{
echo "<font color='#ff0000'>そのニックネームは既に使われています</font>";
}
}elseif($newname==""){
echo "<font color='#ff0000'>新しいニックネームを入力してください</font>";
}
}
$pass=$_POST["pass"];
$num=$_POST["random"];
$check=$_POST["check"];
$newadress2=$_POST["adress1"];
if($pass=="確認する"){ //メールアドレス変更
if($num==$check){
echo "変更が完了しました";
$sql="update tt_623_99sv_coco_com.keijiban1 set adress='$newadress2' where adress='$mail'";
$result=$pdo->query($sql);
session_start();
$_SESSION["adress"]=$newadress2;
}else{
echo "ユーザー認証番号が間違っています";
}
}
$newpass=$_POST["newpassword"];
$newpass1=$_POST["newpassword1"];
$passbutton2=$_POST["i"];
if($passbutton2=="変更を保存する"){
if($newpass!=""
and $newpass==$newpass1){
$sql="update tt_623_99sv_coco_com.keijiban1 set password='$newpass' where adress='$mail'";
$result=$pdo->query($sql);
session_start();
$_SESSION["password"]=$newpass;
echo "変更が完了しました";
}else{
if($newpass==""
or $newpass1==""){
echo "<font color='#ff0000'>新しいパスワードを入力してください</font>";
}
if($newpass!=$newpass1){
echo "<font color='#ff0000'>2つのパスワードが異なっています</font>";
}
}
}
?>

<div style="width: 100%; color:white; background-color:#afeeee;"><a href="http://tt-623.99sv-coco.com/mission_6-3.php
">新規投稿はコチラから</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>限定掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">全国版掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">新しい掲示板を作成する</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">マイアカウント</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">ログアウト</a></div>

<div style="width:100%; color:black; background-color:#afeeee;"><h2>マイアカウント</h2></div>
<div style="width:100%; color:white; background-color:#90ee90;"><h2>登録都道府県</h2></div>
<?php echo $_SESSION["pre"];?><br>
<form action="mission_6-6.php" method="post">
<input type="submit" name="a" value="変更する">
</form>
<?php
$submit=$_POST["a"]; //都道府県変更
if($submit=="変更する"){
echo '<form action="mission_6-6.php" method="post">
<select name="pre">
<option value="沖縄県">沖縄県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="宮崎県">宮崎県</option>
<option value="大分県">大分県</option>
<option value="熊本県">熊本県</option>
<option value="長崎県">長崎県</option>
<option value="佐賀県">佐賀県</option>
<option value="福岡県">福岡県</option>
<option value="山口県">山口県</option>
<option value="広島県">広島県</option>
<option value="鳥取県">鳥取県</option>
<option value="岡山県">岡山県</option>
<option value="島根県">島根県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="香川県">香川県</option>
<option value="徳島県">徳島県</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>
<option value="滋賀県">滋賀県</option>
<option value="大阪府">大阪府</option>
<option value="和歌山県">和歌山県</option>
<option value="奈良県">奈良県</option>
<option value="三重県">三重県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="富山県">富山県</option>
<option value="岐阜県">岐阜県</option>
<option value="長野県">長野県</option>
<option value="愛知県">愛知県</option>
<option value="静岡県">静岡県</option>
<option value="山梨県">山形県</option>
<option value="新潟県">新潟県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="栃木県">栃木県</option>
<option value="茨城県">茨城県</option>
<option value="千葉県">千葉県</option>
<option value="福島県"福島県></option>
<option value="山形県">山形県</option>
<option value="宮城県">宮城県</option>
<option value="岩手県">岩手県</option>
<option value="秋田県">秋田県</option>
<option value="青森県">青森県</option>
<option value="北海道">北海道</option>
</select><br>
<input type="submit" name="d" value="変更を保存する">
</form>';
}
?>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>登録ニックネーム</h2></div>
<?php echo $_SESSION["name"];?><br>
<form action="mission_6-6.php" method="post">
<input type="submit" name="b" value="変更する">
</form>
<?php 
$submit1=$_POST["b"];
if($submit1=="変更する"){
echo "<form action='mission_6-6.php' method='post'>
<input type='text' name='nickname' placeholder='新しいニックネーム'><br>
<input type='submit' name='e' value='変更を保存する'>
</form>";
}
?>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>登録メールアドレス</h2></div>
<?php echo $_SESSION["adress"];?><br>
<form action="mission_6-6.php" method="post">
<input type="submit" name="c" value="変更する">
</form>
<?php
$submit2=$_POST["c"];
if($submit2=="変更する"){
echo "<form action='mission_6-6.php' method='post'>
<input type='text' name='adress1' placeholder='新しいメールアドレス'><br>
<input type='text' name='adress2' placeholder='確認用（再入力）'><br>
<input type='submit' name='f' value='変更を保存する'>
</form>";
}
?>
<?php 
if($f=="変更を保存する"){
if($newadress!=""
and $newadress==$newadress1){
$sql="SELECT COUNT(adress) FROM tt_623_99sv_coco_com.keijiban1 WHERE adress='$newadress'";
$result=$pdo->query($sql);
foreach($result as $row){
$count1=$row[0];
}
if($count1=="0"){
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$rand=mt_rand(0,9);
$rand1=mt_rand(0,9);
$rand2=mt_rand(0,9);
$rand3=mt_rand(0,9);
$random=$rand.$rand1.$rand2.$rand3;
$title="メールアドレス変更のお知らせ";
$message=$name."様へ"."\r\n"
."メールアドレス変更はまだ完了していません"."\r\n"
."ユーザー認証番号は".$random."です"."\r\n"
."ユーザー認証番号を入力し、メールアドレス変更を完了させてください";
mb_send_mail($newadress,$title,$message);
echo "新しいメールアドレスにユーザー認証番号を送信しました<br>
<form action='mission_6-6.php' method='post'>
<input type='text' name='random' value=$random>
<input type='text' name='adress1' value='$newadress'>
<label for='check'>ユーザー認証番号を入力して下さい</label><br>
<input type='text' name='check' placeholder='数字4桁（半角）'><br>
<input type='submit' name='pass' value='確認する'>
</form>";
}else{
echo "<font color='#ff0000'>そのメールアドレスは既に登録されています</font>";
}
}
if($newadress=="" 
or $newadress1==""){
echo "<font color='#ff0000'>新しいメールアドレスを入力してください</font>";
}
if($newadress!=$newadress1){
echo "<font color='#ff0000'>２つのメールアドレスが異なります</font>";
}
}
?>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>パスワード</h2></div>
******
<form action="mission_6-6.php" method="post">
<input type="submit" name="g" value="変更する">
</form>

<?php
$passbutton=$_POST["g"];
if($passbutton=="変更する"){
echo "現在のパスワードを入力してください<br>
<form action='mission_6-6.php' method='post'>
<input type='text' name='passwordnow' placeholder='現在のパスワード'><br>
<input type='submit' name='h' value='確認する'>
</form>";
}
?>

<?php 
$passwordnow=$_POST["passwordnow"];
$passbutton1=$_POST["h"];
if($passbutton1=="確認する"){
if($passwordnow==$password1){
echo "新しいパスワードを入力してください<br>
<form action='mission_6-6.php' method='post'>
<input type='text' name='newpassword' placeholder='新しいパスワード'><br>
<input type='text' name='newpassword1' placeholder='確認用(再入力)'><br>
<input type='submit' name='i' value='変更を保存する'>
</form>";
}else{
echo "<font color='#ff0000'>パスワードが間違っています</font>";
}
}
?>


<?php //【mission_6-7.php（スレッド作成＆スレッド検索画面）】
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT COUNT(*) FROM information_schema.tables WHERE table_schema='tt_623_99sv_coco_com'";
$result=$pdo->query($sql);
foreach($result as $row){
$table=$row[0];
}
$tablenum=$table+1;
$keijiname=$_POST["keijiname"];
$syoukai=$_POST["syoukai"];
$submit=$_POST["submit"];
if($submit=="作成する"){
if($keijiname!=""
and $syoukai!=""){
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.keijiname(id,name,syoukai)
VALUES(:id,:name,:syoukai)");
$sql->bindParam(":id",$tablenum,PDO::PARAM_STR);
$sql->bindParam(":name",$keijiname,PDO::PARAM_STR);
$sql->bindParam(":syoukai",$syoukai,PDO::PARAM_STR);
$sql->execute();
$sql="CREATE TABLE tt_623_99sv_coco_com.makekeiji$tablenum(
id INT(11),
name char(32),
comment TEXT,
date char(32),
tokumei INT(11),
hensin char(32)
)";
$result=$pdo->query($sql);
session_start();
$_SESSION["tablenum"]=$tablenum;
header("location:http://tt-623.99sv-coco.com/mission_6-8.php");
}else{
if($keijiname==""){
echo "<font color='#ff0000'>掲示板の名前を決めてください</font><br>";
}
if($syoukai==""){
echo "<font color='#ff0000'>紹介文を入力してください</font>";
}
}
}
?>

<?php 
$topage=$_POST["topage"];
$keijinum2=$_POST["keijinum"];
if($topage=="このページに行く"){
session_start();
$_SESSION["tablenum"]=$keijinum2;
header("location:http://tt-623.99sv-coco.com/mission_6-8.php");
}
?>


<div style="width: 100%; color:white; background-color:#afeeee;"><a href="http://tt-623.99sv-coco.com/mission_6-3.php
">新規投稿はコチラから</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>限定掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">全国版掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">新しい掲示板を作成する</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">マイアカウント</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">ログアウト</a></div>

<div style="width:100%; color:black; background-color:#afeeee;"><h2>新規掲示板作成</h2></div>

<form action="mission_6-7.php" method="post">
<input type="text" name="keijiname" placeholder="掲示板名"><br>
<textarea name="syoukai" cols="50" rows="5" placeholder="掲示板の紹介文を入力してください"></textarea><br>
<input type="submit" name="submit" value="作成する"><br>


<div style="width:100%; color:white; background-color:#afeeee;"><h2>掲示板一覧</h2></div>
<span style="float:right;">
<div style="width:100%; background-color:#e6e6fa;">掲示板名検索<br>
<form action="mission_6-7.php" method="post">
<input type="text" name="aaa" placeholder="掲示板名"><br>
<input type="submit" name="bbb" value="検索する"></div>

<?php 
$aaa=$_POST["aaa"];
$bbb=$_POST["bbb"];
if($bbb=="検索する"){
if($aaa!=""){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiname WHERE name LIKE '%$aaa%'";
$result=$pdo->query($sql);
foreach($result as $row){
$tablenum2=$row["id"];
$tablename2=$row["name"];
$syoukai2=$row["syoukai"];
echo "【".$tablename2."】<br>".$syoukai2."<br>
<form action='mission_6-7.php' method='post'>
<input type='text' name='keijinum' value='$tablenum2'>
<input type='submit' name='topage' value='このページに行く'>
</form><br>";
}
}else{
if($aaa==""){
echo "<font color='#ff0000'>掲示板名を入力してください</font>";
}
}
}
?>
</span>

<?php
$dsn="データベース名";
$user="tt-623.99sv-coco";
$password="Vw54kZC7";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiname";
$result=$pdo->query($sql);
foreach($result as $row){
$tablename1=$row["name"];
$syoukai1=$row["syoukai"];
$tablenum1=$row["id"];
echo "【".$tablename1."】<br>".$syoukai1.
"<form action='mission_6-7.php' method='post'>
<input type='hidden' name='keijinum' value='$tablenum1'>
<input type='submit' name='topage' value='このページに行く'>
</form><br>";
}
?>


<?php //【mission_6-8.php（各スレッドの新規投稿画面）】
session_start();
$tablenum=$_SESSION["tablenum"];
$name=$_SESSION["name"];
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiname WHERE id='$tablenum'";
$result=$pdo->query($sql);
foreach($result as $row){
$keijiname=$row["name"];
$syoukai=$row["syoukai"];
}
?>

<?php 
$comment=$_POST["comment"];
$submit=$_POST["submit"];
$tokumei=$_POST["tokumei"];
$date=date("Y/m/d H:i:s");
if($submit=="投稿する"
and $tokumei!=""
and $comment!=""){
if($tokumei=="tokumei"){
$tokumei1="1";
}else{
$tokumei1="2";
}
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT MAX(id) FROM tt_623_99sv_coco_com.makekeiji$tablenum";
$result=$pdo->query($sql);
foreach($result as $row){
$number=1+$row[0];
}
$hensin="0";
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.makekeiji$tablenum(id,name,comment,date,tokumei,hensin)
VALUES(:id,:name,:comment,:date,:tokumei,:hensin)");
$sql->bindParam(":id",$number,PDO::PARAM_STR);
$sql->bindParam(":name",$name,PDO::PARAM_STR);
$sql->bindParam(":comment",$comment,PDO::PARAM_STR);
$sql->bindParam(":date",$date,PDO::PARAM_STR);
$sql->bindParam(":tokumei",$tokumei1,PDO::PARAM_STR);
$sql->bindParam(":hensin",$hensin,PDO::PARAM_STR);
$sql->execute();
}else{
if($comment=="" and $submit=="投稿する"){
echo "<font color='#ff0000'>投稿内容を入力してください</font><br>";
}
if($tokumei=="" and $submit=="投稿する"){
echo "<font color='#ff0000'>匿名希望の有無を選んでください</font><br>";
}
}
?>	

<?php 
$reply=$_POST["reply"];
$to=$_POST["to"];
if($reply=="←返信"){
session_start();
$_SESSION["to"]=$to;
header("location:http://tt-623.99sv-coco.com/mission_6-9.php");
}
?>


<div style="width: 100%; color:white; background-color:#afeeee;"><a href="#a">新規投稿はコチラから</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>限定掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">全国版掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">新しい掲示板を作成する</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">マイアカウント</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">ログアウト</a></div>

<div style="width:100%; color:black; background-color:#afeeee;">
<h2>【<?php echo $keijiname;?>】<br>
<?php echo $syoukai;?></h2></div>

<a id="a"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2>新規投稿はコチラから</h2></div>
<form action="mission_6-8.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="投稿を入力してください"></textarea>
<input type="reset" value="取り消し"><br>
<input type="radio" name="tokumei" value="tokumei">匿名希望
<input type="radio" name="tokumei" value="notokumei">匿名を希望しない<br>
<input type="submit" name="submit" value="投稿する">
</form>

<?php 
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.makekeiji$tablenum";
$result=$pdo->query($sql);
foreach($result as $row){
$id=$row["id"];
$name1=$row["name"];
$comment1=$row["comment"];
$date1=$row["date"];
$tokumei2=$row["tokumei"];
$hensin1=$row["hensin"];
if($tokumei2=="1"){
$tokumei3="匿名希望";
}else{
$tokumei3=$name1;
}
if($hensin1!="0"){
$hensin2="to".$hensin1;
}else{
$hensin2="";
}
echo "<a id='$id'></a><a href='#$hensin1'>$hensin2</a><br>".
$id."<>".$tokumei3."さんからの投稿<>".$date1."<br>".
$comment1."<br>";
echo "<form action='mission_6-8.php' method='post'>
<input type='submit' name='reply' value='←返信'style='background:white;border:none;'>
<input type='hidden' name='to' value='$id'>
</form><br>";
}
?>


<?php //【mission_6-9.php（各スレッドの投稿への返信フォーム）】
session_start();
$to=$_SESSION["to"];
$tablenum=$_SESSION["tablenum"];
$name=$_SESSION["name"];
$comment=$_POST["comment"];
$tokumei=$_POST["tokumei"];
$submit=$_POST["submit"];
$date=date("Y/m/d H:i:s");
if($tokumei=="tokumei"){
$tokumei1="1";
}else{
$tokumei1="2";
}
if($submit=="返信する"){
if($comment!=""
and $tokumei!=""){
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT MAX(id) FROM tt_623_99sv_coco_com.makekeiji$tablenum";
$result=$pdo->query($sql);
foreach($result as $row){
$number=1+$row[0];
}
$sql=$pdo->prepare("INSERT INTO tt_623_99sv_coco_com.makekeiji$tablenum(id,name,comment,date,tokumei,hensin)
VALUES(:id,:name,:comment,:date,:tokumei,:hensin)");
$sql->bindParam(":id",$number,PDO::PARAM_STR);
$sql->bindParam(":name",$name,PDO::PARAM_STR);
$sql->bindParam(":comment",$comment,PDO::PARAM_STR);
$sql->bindParam(":date",$date,PDO::PARAM_STR);
$sql->bindParam(":tokumei",$tokumei1,PDO::PARAM_STR);
$sql->bindParam(":hensin",$to,PDO::PARAM_STR);
$sql->execute();
echo "返信が完了しました";
}else{
if($comment==""){
echo "<font color='#ff0000'>返信内容を入力してください</font><br>";
}
if($tokumei==""){
echo "<font color='#ff0000'>匿名希望の有無を選択してください</font><br>";
}
}
}
?>

<?php 
$a=$_POST["a"];
if($a=="掲示板に戻る"){
header("location:http://tt-623.99sv-coco.com/mission_6-8.php");
}
?>



<div style="width: 100%; color:white; background-color:#afeeee;"><a href="#a">新規投稿はコチラから</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>限定掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">全国版掲示板を見る</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">新しい掲示板を作成する</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">マイアカウント</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">ログアウト</a></div>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>返信フォーム</h2></div>
<form action="mission_6-9.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="返信を入力してください"></textarea>
<input type="reset" value="取り消し"><br>
<input type="radio" name="tokumei" value="tokumei">匿名希望
<input type="radio" name="tokumei" value="notokumei">匿名を希望しない<br>
<input type="submit" name="submit" value="返信する">
</form>
<br>
<br>
<br>
<form action="mission_6-9.php" method="post">
<input type="submit" name="a" value="掲示板に戻る">
</form>

<?php //【mission_createtb.php（テーブル作成）】
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE keijiban1(number INT(11),pre char(15),name char(32),adress char(64),password char(32))";
$stmt=$pdo->query($sql);
?>

<?php
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE keijiban3(number INT(11),name char(32),pre char(32),comment TEXT,date char(32),gentei INT(11),tokumei INT(11))";
$stmt=$pdo->query($sql);
?>

<?php
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE reply(reply INT(11),aite INT(11),num INT(11),number INT(11),name char(32),comment TEXT,date char(32),tokumei INT(11))";
$stmt=$pdo->query($sql);
?>

<?php 
$dsn="データベース名";
$user="ユーザー名";
$password="パスワード";
$pdo=new PDO($dsn,$user,$password);
$sql="CREATE TABLE tt_623_99sv_coco_com.keijiname(
id INT(11),
name char(32),
syoukai TEXT)";
$stmt=$pdo->query($sql);
?>


