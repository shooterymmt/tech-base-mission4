<?php //�ymission_6-1.php�i���O�C����ʁj�z
$mail=$_POST["mail"];
$password1=$_POST["password"];
$submit1=$_POST["submit1"];
if($submit1=="���O�C��"
and $mail!=""
and $password1!=""){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
echo "<div align='center'><font color='#ff0000'>���[���A�h���X�������̓p�X���[�h�Ɍ�肪����܂�</font></div><br>";
}
}else{
if($submit1=="���O�C��" and $mail==""){
echo "<div align='center'><font color='#ff0000'>���[���A�h���X����͂��Ă�������</font></div><br>";
}
if($submit1=="���O�C��" and $password1==""){
echo "<div align='center'><font color='#ff0000'>�p�X���[�h����͂��Ă�������</font></div><br>";
}
}
?>

<?php
$submit1=$_POST["submit1"];
$submit2=$_POST["submit2"];
if($submit2=="�V�K����o�^"){
header("location:http://tt-623.99sv-coco.com/mission_6-2.php");
}
?>

<div align="center">
<form action="mission_6-1.php" method="post">
<input type="text" name="mail" placeholder="���[���A�h���X"><br>
<input type="text" name="password" placeholder="�p�X���[�h"><br>
<input type="submit" name="submit1" value="���O�C��"><br>
<br>
<br>
<input type="submit" name="submit2" value="�V�K����o�^">
</form>
</div>


<div align="center"> //�ymission_6-2.php�i�V�K�o�^��ʁj�z 
<form action="mission_6-2.php" method="post">
<label for="name">�j�b�N�l�[������͂��ĉ�����</label><br>
<input type="text" name="name" placeholder="�j�b�N�l�[��"><br>
<br>
<label for="pre">���Z�܂��̓s���{�������I�т�������</label><br>
<select name="pre">
<option value="���ꌧ">���ꌧ</option>
<option value="��������">��������</option>
<option value="�{�茧">�{�茧</option>
<option value="�啪��">�啪��</option>
<option value="�F�{��">�F�{��</option>
<option value="���茧">���茧</option>
<option value="���ꌧ">���ꌧ</option>
<option value="������">������</option>
<option value="�R����">�R����</option>
<option value="�L����">�L����</option>
<option value="���挧">���挧</option>
<option value="���R��">���R��</option>
<option value="������">������</option>
<option value="���Q��">���Q��</option>
<option value="���m��">���m��</option>
<option value="���쌧">���쌧</option>
<option value="������">������</option>
<option value="���Ɍ�">���Ɍ�</option>
<option value="���s�{">���s�{</option>
<option value="���ꌧ">���ꌧ</option>
<option value="���{">���{</option>
<option value="�a�̎R��">�a�̎R��</option>
<option value="�ޗǌ�">�ޗǌ�</option>
<option value="�O�d��">�O�d��</option>
<option value="�ΐ쌧">�ΐ쌧</option>
<option value="���䌧">���䌧</option>
<option value="�x�R��">�x�R��</option>
<option value="�򕌌�">�򕌌�</option>
<option value="���쌧">���쌧</option>
<option value="���m��">���m��</option>
<option value="�É���">�É���</option>
<option value="�R����">�R�`��</option>
<option value="�V����">�V����</option>
<option value="�Q�n��">�Q�n��</option>
<option value="��ʌ�">��ʌ�</option>
<option value="�����s">�����s</option>
<option value="�_�ސ쌧">�_�ސ쌧</option>
<option value="�Ȗ،�">�Ȗ،�</option>
<option value="��錧">��錧</option>
<option value="��t��">��t��</option>
<option value="������"������></option>
<option value="�R�`��">�R�`��</option>
<option value="�{�錧">�{�錧</option>
<option value="��茧">��茧</option>
<option value="�H�c��">�H�c��</option>
<option value="�X��">�X��</option>
<option value="�k�C��">�k�C��</option>
</select><br>
<br>
<label for="adress">���[���A�h���X����͂��Ă�������</label><br>
<input type="text" name="adress" placeholder="���[���A�h���X"><br>
<input type="text" name="check-ad" placeholder="���[���A�h���X�i�ē���)"><br>
<br>
<label for="password">�p�X���[�h����͂��Ă�������</label><br>
<input type="text" name="password" placeholder="�p�X���[�h"><br>
<input type="text" name="check-pass" placeholder="�p�X���[�h�i�ē��́j"><br>
<br>
<p style="border-width: 5px; border-color: black; border-style: double; width:250px;" >
���p�K��ł�
</p>
<input type="checkbox" name="rule" value="���p�K��">
���p�K��ɓ��ӂ���<br>
<br>
<input type="submit" name="submit" value="�V�K�o�^����">
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
if($submit=="�V�K�o�^����" ){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
and $rule=="���p�K��"){
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$rand=mt_rand(0,9);
$rand1=mt_rand(0,9);
$rand2=mt_rand(0,9);
$rand3=mt_rand(0,9);
$random=$rand.$rand1.$rand2.$rand3;
$title="���o�^�����̂��m�点";
$message=$name."�l��"."\r\n"
."������f���ւ̉��o�^���������܂���"."\r\n"
."���[�U�[�F�ؔԍ���".$random."�ł�"."\r\n"
."���[�U�[�F�ؔԍ�����͂��A�o�^�����������Ă�������";
mb_send_mail($adress,$title,$message);
echo "���[���A�h���X�Ƀ��[�U�[�F�ؔԍ��𑗐M���܂���<br>
<form action='mission_6-2.php' method='post'>
<input type='hidden' name='random' value=$random>
<input type='hidden' name='name1' value=$name>
<input type='hidden' name='pre1' value=$pre>
<input type='hidden' name='adress1' value=$adress>
<input type='hidden' name='password1' value=$password1>
<label for='check'>���[�U�[�F�ؔԍ�����͂��ĉ�����</label><br>
<input type='text' name='check' placeholder='����4���i���p�j'><br>
<input type='submit' name='submit1' value='�m�F����'>
</form>";
}else{
if($count>=1){
echo "<div align='center'><font color='#ff0000'>���̃��[���A�h���X�͊��ɓo�^����Ă��܂�</font></div><br>";
}
if($count1>=1){
echo "<div align='center'><font color='#ff0000'>���̃j�b�N�l�[���͊��Ɏg���Ă��܂�</font></div><br>";
}
if($adress!=$adress1){
echo "<div align='center'><font color='#ff0000'>2�̃��[���A�h���X���قȂ�܂�</font></div><br>";
}
if($password1!=$password2){
echo "<div align='center'><font color='#ff0000'>2�̃p�X���[�h���قȂ�܂�</font></div><br>";
}
if(empty($_POST["rule"])){
echo "<div align='center'><font color='#ff0000'>���p�K��ɓ��ӂ��Ă�������</font></div><br>";
}
if(empty($name)){
echo "<div align='center'><font color='#ff0000'>�j�b�N�l�[�������͂���Ă��܂���</font></div><br>";
}
if($adress=="" or $adress1==""){
echo "<div align='center'><font color='#ff0000'>���[���A�h���X�����͂���Ă��܂���</font></div><br>";
}
if($password1=="" or $password2==""){
echo "<div align='center'><font color='#ff0000'>�p�X���[�h�����͂���Ă��܂���</font></div><br>";
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
if($submit1=="�m�F����"){
if($random1==$check){
echo "<div align='center'>�o�^���������܂���</div><br>
<form action='mission_6-2.php' method='post'>
<input type='submit' name='submit2' value='���O�C����ʂɍs��'>
</form>";
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
echo "<div align='center'><font color='#ff0000'>���[�U�[�F�ؔԍ����Ⴂ�܂�</font></div>";
}
}
?>

<?php
$submit3=$_POST["submit2"];
if($submit3=="���O�C����ʂɍs��"){
header("location:http://tt-623.99sv-coco.com/mission_6-1.php");
}
?>



<?php //�ymission_6-3.php�i�V�K���e��ʁj�z
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
if($submit=="���e����"
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
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
if($comment=="" and $submit=="���e����"){
echo "<font color='#ff0000'>���e���e����͂��Ă�������</font><br>";
}
if($gentei=="" and $submit=="���e����"){
echo "<font color='#ff0000'>�f���̎�ނ�I��ł�������</font><br>";
}
if($tokumei=="" and $submit=="���e����"){
echo "<font color='#ff0000'>������]�̗L����I��ł�������</font><br>";
}
}
?>	

<?php //���O�A�E�g�{�^�����������Ƃ�
$log=$_POST["log"];
if($log=="���O�A�E�g����"){
session_start();
unset($_SESSION["name"]);
unset($_SESSION["pre"]);
unset($_SESSION["adress"]);
unset($_SESSION["password"]);
header("location:http://tt-623.99sv-coco.com/mission_6-4.php");
}
?>

<?php //�ԐM�{�^�����������Ƃ�
$to=$_POST["to"];
$reply=$_POST["reply"];
$number3=$_POST["number"];
$name3=$_POST["tokumei"];
$gentei1=$_POST["gentei"];
$naiyou=$_POST["naiyou"];
$date3=$_POST["date"];
$reply1=$_POST["reply1"];
if($reply=="�ԐM"){
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

<?php //�폜�{�^�����������Ƃ�
$delete=$_POST["delete"];
$delto=$_POST["to"];
$delrep=$_POST["reply1"];
if($delete=="�폜"){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
  alert( "�{���ɍ폜���܂����H" )
</script>
EOM;
$sql="delete from tt_623_99sv_coco_com.keijiban3 where number='$delto'";
$results=$pdo->query($sql);
}else{
echo <<<EOM
<script type="text/javascript">
alert ("���l�̓��e�͍폜�ł��܂���")
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
alert("�{���ɍ폜���܂����H")
</script>
EOM;
$sql="delete from tt_623_99sv_coco_com.reply where num='$delto'";
$results=$pdo->query($sql);
}else{
echo <<<EOM
<script type="text/javascript">
alert("���l�̓��e�͍폜�ł��܂���")
</script>
EOM;
}
}
}
?>

<?php //�ҏW�{�^�����������Ƃ�
$edit=$_POST["edit"];
$editto=$_POST["to"];
$editrep=$_POST["reply1"];
if($edit=="�ҏW"){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
$pdo=new PDO($dsn,$user,$password);
if($editrep=="0"){
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE number='$editto'";
$result=$pdo->query($sql);
foreach($result as $row){
$editname=$row["name"];
$editcom=$row["comment"];
}
if($editname==$name){
echo "<h2>�ҏW�t�H�[��</h2><form action='mission_6-3.php' method='post'>
<textarea name='editform' cols='50' rows='5'>$editcom</textarea><br>
<input type='submit' name='editsub' value='�ҏW���e�𓊍e����'>
<input type='text' name='zeroichi' value='0'>
<input type='text' name='ban' value='$editto'>
</form>";
}else{
echo <<<EOM
<script type="text/javascript">
alert("���l�̓��e�͕ҏW�ł��܂���")
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
echo "<h2>�ҏW�t�H�[��</h2><form action='mission_6-3.php' method='post'>
<textarea name='editform' cols='50' rows='5'>$editcom</textarea><br>
<input type='submit' name='editsub' value='�ҏW���e�𓊍e����'>
<input type='text' name='zeroichi' value='1'>
<input type='text' name='ban' value='$editto'>
</form>";
}else{
echo <<<EOM
<script type="text/javascript">
alert("���l�̓��e�͕ҏW�ł��܂���")
</script>
EOM;
}
}
}
?>

<?php //�ҏW���e�{�^�����������Ƃ�
$ban=$_POST["ban"];
$zeroichi=$_POST["zeroichi"];
$editsub=$_POST["editsub"];
$editform=$_POST["editform"];
if($editsub=="�ҏW���e�𓊍e����"){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
$pdo=new PDO($dsn,$user,$password);
if($zeroichi=="0"){
$sql="update tt_623_99sv_coco_com.keijiban3 set comment='$editform',date='$date' where number='$ban'";
$result=$pdo->query($sql);
echo <<<EOM
<script type="text/javascript">
alert("�{���ɕҏW���e�𓊍e���܂����H")
</script>
EOM;
}else{
$sql="update tt_623_99sv_coco_com.reply set comment='$editform',date='$date' where num='$ban'";
$results=$pdo->query($sql);
echo <<<EOM
<script type="text/javascript">
alert("�{���ɕҏW���e�𓊍e���܂����H")
</script>
EOM;
}
}
?>

<h2>�悤�����I
<?php session_start();
echo $_SESSION["name"]; ?>
�l</h2>

<div style="width: 100%; color:white; background-color:#afeeee;"><a href="#a">�V�K���e�̓R�`������</a><br>
<a href="#b"><?php echo $pre;?>����f��������</a><br>
<a href="#c">�S���Ōf��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">�V�����f�����쐬����</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">�}�C�A�J�E���g</a><br>
<a href="#111">���O�A�E�g</a></div>

<a id="a"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2>�V�K���e�̓R�`������</h2></div>
<form action="mission_6-3.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="���e����͂��Ă�������"></textarea>
<input type="reset" value="������"><br>
<input type="radio" name="pre" value="pre"><?php session_start(); echo $_SESSION["pre"];?>����f���ɓ��e����
<input type="radio" name="pre" value="nopre">�S���Ōf���ɓ��e����<br>
<input type="radio" name="tokumei" value="tokumei">������]
<input type="radio" name="tokumei" value="notokumei">��������]���Ȃ�<br>
<input type="submit" name="submit" value="���e����">
</form>


<a id="b"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2><?php echo $pre;?>����f����</h2></div>
<hr>
<?php
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE gentei='1' and pre='$pre'";
$results=$pdo->query($sql);
foreach($results as $row){
$number1=$row["number"];
$comment1=$row["comment"];
$date1=$row["date"];
$name1=$row["name"];
if($row["tokumei"]=="1"){
$namae1="������]";
$toku="1";
}else{
$namae1=$name1;
$toku=$name1;
}
echo "<hr><br>".$number1."�F".$namae1."���񂩂�̓��e".$date1."<br>"; 
echo $comment1."<br>";
echo "<a id='$number1'></a><form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='�ԐM'style='background:white;border:none;'>
<input type='submit' name='edit' value='�ҏW'style='background:white;border:none;'>
<input type='submit' name='delete' value='�폜' style='background:white;border:none;'>
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
$namae="������]";
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
echo $numrep."a:".$namae."���񂩂�̕ԐM".$daterep."<br>";
echo "to<a href='#$henban'>$henban</a><br>";
echo $commentrep."<br>";
echo "<a id='$numrepa'></a><form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='�ԐM'style='background:white;border:none;'>
<input type='submit' name='edit' value='�ҏW'style='background:white;border:none;'>
<input type='submit' name='delete' value='�폜' style='background:white;border:none;'>
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


<a id="c"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2>�S���Ōf����</h2></div>
<hr>
<?php
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiban3 WHERE gentei='2'";
$results=$pdo->query($sql);
foreach($results as $row){
$number2=$row["number"];
$comment2=$row["comment"];
$date2=$row["date"];
$name2=$row["name"];
if($row["tokumei"]=="1"){
$namae2="������]";
$toku2="1";
}else{
$namae2=$name2;
$toku2=$name2;
}
echo "<hr>".$number2."�F".$namae2."���񂩂�̓��e".$date2."<br>";
echo $row["comment"]."<br>";
echo "<a id='$number2'></a><form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='�ԐM' style='background:white;border:none;'>
<input type='submit' name='edit' value='�ҏW'style='background:white;border:none;'>
<input type='submit' name='delete' value='�폜' style='background:white;border:none;'>
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
$namae3="������]";
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
echo "<a id='$numrepa1'></a>".$numrep1."a:".$namae3."���񂩂�̕ԐM".$daterep."<br>";
echo "to<a href='#$henban1'>$henban1</a><br>";
echo $commentrep1."<br>";
echo "<form action='mission_6-3.php' method='post'>
<input type='submit' name='reply' value='�ԐM'style='background:white;border:none;'>
<input type='submit' name='edit' value='�ҏW'style='background:white;border:none;'>
<input type='submit' name='delete' value='�폜' style='background:white;border:none;'>
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

<a id="111"></a><h2>���O�A�E�g�̓R�`������</h2>
<form action="mission_6-3.php" method="post">
<input type="submit" name="log" value="���O�A�E�g����" onClick="alert('�{���Ƀ��O�A�E�g���܂����H');">
</form>

<?php //�ymission_6-4.php�i���O�A�E�g������ʁj�z
?>
<h2>���O�A�E�g�ɐ������܂���</h2>

<form action="mission_6-4.php" method="post">
<input type="submit" name="return" value="���O�C����ʂɖ߂�" >
</form>

<?php
$return=$_POST["return"];
if($return=="���O�C����ʂɖ߂�"){
header("location:http://tt-623.99sv-coco.com/mission_6-1.php");
}
?>



<?php //�ymission_6-5.php�i�n�����f���E�S���Ōf���ւ̕ԐM�t�H�[���j�z
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
$name2="������]";
}else{
$name2=$name1;
}
if($pre1=="2"){
$pre2="�S���Ōf����";
}else{
$pre2=$pre1."����f����";
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
if($submit=="�ԐM����"
and $tokumei!=""
and $comment1!=""){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
echo "�ԐM���������܂���";
}else{
if($tokumei==""){
echo "������]�̗L����I�����Ă�������<br>";
}
if($comment1==""){
echo "�ԐM���e����͂��Ă�������";
}
}
?>

<?php 
$submit1=$_POST["submit1"];
if($submit1=="�ԐM���I������"){
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
">�V�K���e�̓R�`������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>����f��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">�S���Ōf��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">�V�����f�����쐬����</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">�}�C�A�J�E���g</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">���O�A�E�g</a></div>

<div style="width:100%; color:black; background-color:#afeeee;"><h2>�ԐM�t�H�[��</h2></div>

<?php echo $name2;?>���񂩂�̓��e@<?php echo $pre2;?><br>
<?php echo $date;?><br>
<?php echo $comment;?><br>
<hr>
<form action="mission_6-5.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="�ԐM����͂��Ă�������"></textarea>
<input type="reset" value="������"><br>
<input type="radio" name="tokumei" value="tokumei">������]
<input type="radio" name="tokumei" value="notokumei">��������]���Ȃ�<br>
<input type="submit" name="submit" value="�ԐM����">
</form>

<form action="mission_6-5.php" method="post">
<input type="submit" name="submit1" value="�ԐM���I������" onClick="alert('�{���ɏI�����܂����H');">
</form>



<?php //�ymission_6-6.php�i�}�C�y�[�W�j�z
session_start();
$mail=$_SESSION["adress"];
$pre=$_SESSION["pre"];
$name=$_SESSION["name"];
$password1=$_SESSION["password"];
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
$pdo=new PDO($dsn,$user,$password);
$newpre=$_POST["pre"];
$d=$_POST["d"];
$newname=$_POST["nickname"];
$e=$_POST["e"];
$newadress=$_POST["adress1"];
$newadress1=$_POST["adress2"];
$f=$_POST["f"];
if($d=="�ύX��ۑ�����"){ //�s���{���ύX
echo <<<EOM
<script type="text/javascript">
 alert("�{���ɕύX���܂����H")
</script>
EOM;
$sql="update tt_623_99sv_coco_com.keijiban1 set pre='$newpre' where adress='$mail'";
$result=$pdo->query($sql);
session_start();
$_SESSION["pre"]=$newpre;
echo "�ύX���������܂���";
}
if($e=="�ύX��ۑ�����"){ //�j�b�N�l�[���ύX
if($newname!=""){
$sql="SELECT COUNT(name) FROM tt_623_99sv_coco_com.keijiban1 WHERE name='$newname'";
$result=$pdo->query($sql);
foreach($result as $row){
$count=$row[0];
}
if($count=="0"){
echo <<<EOM
<script type="text/javascript">
alert("�{���ɕύX���܂����H")
</script>
EOM;
$sql="update tt_623_99sv_coco_com.keijiban1 set name='$newname' where adress='$mail'";
$results=$pdo->query($sql);
session_start();
$_SESSION["name"]=$newname;
echo "�ύX���������܂���";
}else{
echo "<font color='#ff0000'>���̃j�b�N�l�[���͊��Ɏg���Ă��܂�</font>";
}
}elseif($newname==""){
echo "<font color='#ff0000'>�V�����j�b�N�l�[������͂��Ă�������</font>";
}
}
$pass=$_POST["pass"];
$num=$_POST["random"];
$check=$_POST["check"];
$newadress2=$_POST["adress1"];
if($pass=="�m�F����"){ //���[���A�h���X�ύX
if($num==$check){
echo "�ύX���������܂���";
$sql="update tt_623_99sv_coco_com.keijiban1 set adress='$newadress2' where adress='$mail'";
$result=$pdo->query($sql);
session_start();
$_SESSION["adress"]=$newadress2;
}else{
echo "���[�U�[�F�ؔԍ����Ԉ���Ă��܂�";
}
}
$newpass=$_POST["newpassword"];
$newpass1=$_POST["newpassword1"];
$passbutton2=$_POST["i"];
if($passbutton2=="�ύX��ۑ�����"){
if($newpass!=""
and $newpass==$newpass1){
$sql="update tt_623_99sv_coco_com.keijiban1 set password='$newpass' where adress='$mail'";
$result=$pdo->query($sql);
session_start();
$_SESSION["password"]=$newpass;
echo "�ύX���������܂���";
}else{
if($newpass==""
or $newpass1==""){
echo "<font color='#ff0000'>�V�����p�X���[�h����͂��Ă�������</font>";
}
if($newpass!=$newpass1){
echo "<font color='#ff0000'>2�̃p�X���[�h���قȂ��Ă��܂�</font>";
}
}
}
?>

<div style="width: 100%; color:white; background-color:#afeeee;"><a href="http://tt-623.99sv-coco.com/mission_6-3.php
">�V�K���e�̓R�`������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>����f��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">�S���Ōf��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">�V�����f�����쐬����</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">�}�C�A�J�E���g</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">���O�A�E�g</a></div>

<div style="width:100%; color:black; background-color:#afeeee;"><h2>�}�C�A�J�E���g</h2></div>
<div style="width:100%; color:white; background-color:#90ee90;"><h2>�o�^�s���{��</h2></div>
<?php echo $_SESSION["pre"];?><br>
<form action="mission_6-6.php" method="post">
<input type="submit" name="a" value="�ύX����">
</form>
<?php
$submit=$_POST["a"]; //�s���{���ύX
if($submit=="�ύX����"){
echo '<form action="mission_6-6.php" method="post">
<select name="pre">
<option value="���ꌧ">���ꌧ</option>
<option value="��������">��������</option>
<option value="�{�茧">�{�茧</option>
<option value="�啪��">�啪��</option>
<option value="�F�{��">�F�{��</option>
<option value="���茧">���茧</option>
<option value="���ꌧ">���ꌧ</option>
<option value="������">������</option>
<option value="�R����">�R����</option>
<option value="�L����">�L����</option>
<option value="���挧">���挧</option>
<option value="���R��">���R��</option>
<option value="������">������</option>
<option value="���Q��">���Q��</option>
<option value="���m��">���m��</option>
<option value="���쌧">���쌧</option>
<option value="������">������</option>
<option value="���Ɍ�">���Ɍ�</option>
<option value="���s�{">���s�{</option>
<option value="���ꌧ">���ꌧ</option>
<option value="���{">���{</option>
<option value="�a�̎R��">�a�̎R��</option>
<option value="�ޗǌ�">�ޗǌ�</option>
<option value="�O�d��">�O�d��</option>
<option value="�ΐ쌧">�ΐ쌧</option>
<option value="���䌧">���䌧</option>
<option value="�x�R��">�x�R��</option>
<option value="�򕌌�">�򕌌�</option>
<option value="���쌧">���쌧</option>
<option value="���m��">���m��</option>
<option value="�É���">�É���</option>
<option value="�R����">�R�`��</option>
<option value="�V����">�V����</option>
<option value="�Q�n��">�Q�n��</option>
<option value="��ʌ�">��ʌ�</option>
<option value="�����s">�����s</option>
<option value="�_�ސ쌧">�_�ސ쌧</option>
<option value="�Ȗ،�">�Ȗ،�</option>
<option value="��錧">��錧</option>
<option value="��t��">��t��</option>
<option value="������"������></option>
<option value="�R�`��">�R�`��</option>
<option value="�{�錧">�{�錧</option>
<option value="��茧">��茧</option>
<option value="�H�c��">�H�c��</option>
<option value="�X��">�X��</option>
<option value="�k�C��">�k�C��</option>
</select><br>
<input type="submit" name="d" value="�ύX��ۑ�����">
</form>';
}
?>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>�o�^�j�b�N�l�[��</h2></div>
<?php echo $_SESSION["name"];?><br>
<form action="mission_6-6.php" method="post">
<input type="submit" name="b" value="�ύX����">
</form>
<?php 
$submit1=$_POST["b"];
if($submit1=="�ύX����"){
echo "<form action='mission_6-6.php' method='post'>
<input type='text' name='nickname' placeholder='�V�����j�b�N�l�[��'><br>
<input type='submit' name='e' value='�ύX��ۑ�����'>
</form>";
}
?>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>�o�^���[���A�h���X</h2></div>
<?php echo $_SESSION["adress"];?><br>
<form action="mission_6-6.php" method="post">
<input type="submit" name="c" value="�ύX����">
</form>
<?php
$submit2=$_POST["c"];
if($submit2=="�ύX����"){
echo "<form action='mission_6-6.php' method='post'>
<input type='text' name='adress1' placeholder='�V�������[���A�h���X'><br>
<input type='text' name='adress2' placeholder='�m�F�p�i�ē��́j'><br>
<input type='submit' name='f' value='�ύX��ۑ�����'>
</form>";
}
?>
<?php 
if($f=="�ύX��ۑ�����"){
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
$title="���[���A�h���X�ύX�̂��m�点";
$message=$name."�l��"."\r\n"
."���[���A�h���X�ύX�͂܂��������Ă��܂���"."\r\n"
."���[�U�[�F�ؔԍ���".$random."�ł�"."\r\n"
."���[�U�[�F�ؔԍ�����͂��A���[���A�h���X�ύX�����������Ă�������";
mb_send_mail($newadress,$title,$message);
echo "�V�������[���A�h���X�Ƀ��[�U�[�F�ؔԍ��𑗐M���܂���<br>
<form action='mission_6-6.php' method='post'>
<input type='text' name='random' value=$random>
<input type='text' name='adress1' value='$newadress'>
<label for='check'>���[�U�[�F�ؔԍ�����͂��ĉ�����</label><br>
<input type='text' name='check' placeholder='����4���i���p�j'><br>
<input type='submit' name='pass' value='�m�F����'>
</form>";
}else{
echo "<font color='#ff0000'>���̃��[���A�h���X�͊��ɓo�^����Ă��܂�</font>";
}
}
if($newadress=="" 
or $newadress1==""){
echo "<font color='#ff0000'>�V�������[���A�h���X����͂��Ă�������</font>";
}
if($newadress!=$newadress1){
echo "<font color='#ff0000'>�Q�̃��[���A�h���X���قȂ�܂�</font>";
}
}
?>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>�p�X���[�h</h2></div>
******
<form action="mission_6-6.php" method="post">
<input type="submit" name="g" value="�ύX����">
</form>

<?php
$passbutton=$_POST["g"];
if($passbutton=="�ύX����"){
echo "���݂̃p�X���[�h����͂��Ă�������<br>
<form action='mission_6-6.php' method='post'>
<input type='text' name='passwordnow' placeholder='���݂̃p�X���[�h'><br>
<input type='submit' name='h' value='�m�F����'>
</form>";
}
?>

<?php 
$passwordnow=$_POST["passwordnow"];
$passbutton1=$_POST["h"];
if($passbutton1=="�m�F����"){
if($passwordnow==$password1){
echo "�V�����p�X���[�h����͂��Ă�������<br>
<form action='mission_6-6.php' method='post'>
<input type='text' name='newpassword' placeholder='�V�����p�X���[�h'><br>
<input type='text' name='newpassword1' placeholder='�m�F�p(�ē���)'><br>
<input type='submit' name='i' value='�ύX��ۑ�����'>
</form>";
}else{
echo "<font color='#ff0000'>�p�X���[�h���Ԉ���Ă��܂�</font>";
}
}
?>


<?php //�ymission_6-7.php�i�X���b�h�쐬���X���b�h������ʁj�z
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
if($submit=="�쐬����"){
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
echo "<font color='#ff0000'>�f���̖��O�����߂Ă�������</font><br>";
}
if($syoukai==""){
echo "<font color='#ff0000'>�Љ����͂��Ă�������</font>";
}
}
}
?>

<?php 
$topage=$_POST["topage"];
$keijinum2=$_POST["keijinum"];
if($topage=="���̃y�[�W�ɍs��"){
session_start();
$_SESSION["tablenum"]=$keijinum2;
header("location:http://tt-623.99sv-coco.com/mission_6-8.php");
}
?>


<div style="width: 100%; color:white; background-color:#afeeee;"><a href="http://tt-623.99sv-coco.com/mission_6-3.php
">�V�K���e�̓R�`������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>����f��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">�S���Ōf��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">�V�����f�����쐬����</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">�}�C�A�J�E���g</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">���O�A�E�g</a></div>

<div style="width:100%; color:black; background-color:#afeeee;"><h2>�V�K�f���쐬</h2></div>

<form action="mission_6-7.php" method="post">
<input type="text" name="keijiname" placeholder="�f����"><br>
<textarea name="syoukai" cols="50" rows="5" placeholder="�f���̏Љ����͂��Ă�������"></textarea><br>
<input type="submit" name="submit" value="�쐬����"><br>


<div style="width:100%; color:white; background-color:#afeeee;"><h2>�f���ꗗ</h2></div>
<span style="float:right;">
<div style="width:100%; background-color:#e6e6fa;">�f��������<br>
<form action="mission_6-7.php" method="post">
<input type="text" name="aaa" placeholder="�f����"><br>
<input type="submit" name="bbb" value="��������"></div>

<?php 
$aaa=$_POST["aaa"];
$bbb=$_POST["bbb"];
if($bbb=="��������"){
if($aaa!=""){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiname WHERE name LIKE '%$aaa%'";
$result=$pdo->query($sql);
foreach($result as $row){
$tablenum2=$row["id"];
$tablename2=$row["name"];
$syoukai2=$row["syoukai"];
echo "�y".$tablename2."�z<br>".$syoukai2."<br>
<form action='mission_6-7.php' method='post'>
<input type='text' name='keijinum' value='$tablenum2'>
<input type='submit' name='topage' value='���̃y�[�W�ɍs��'>
</form><br>";
}
}else{
if($aaa==""){
echo "<font color='#ff0000'>�f��������͂��Ă�������</font>";
}
}
}
?>
</span>

<?php
$dsn="�f�[�^�x�[�X��";
$user="tt-623.99sv-coco";
$password="Vw54kZC7";
$pdo=new PDO($dsn,$user,$password);
$sql="SELECT*FROM tt_623_99sv_coco_com.keijiname";
$result=$pdo->query($sql);
foreach($result as $row){
$tablename1=$row["name"];
$syoukai1=$row["syoukai"];
$tablenum1=$row["id"];
echo "�y".$tablename1."�z<br>".$syoukai1.
"<form action='mission_6-7.php' method='post'>
<input type='hidden' name='keijinum' value='$tablenum1'>
<input type='submit' name='topage' value='���̃y�[�W�ɍs��'>
</form><br>";
}
?>


<?php //�ymission_6-8.php�i�e�X���b�h�̐V�K���e��ʁj�z
session_start();
$tablenum=$_SESSION["tablenum"];
$name=$_SESSION["name"];
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
if($submit=="���e����"
and $tokumei!=""
and $comment!=""){
if($tokumei=="tokumei"){
$tokumei1="1";
}else{
$tokumei1="2";
}
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
if($comment=="" and $submit=="���e����"){
echo "<font color='#ff0000'>���e���e����͂��Ă�������</font><br>";
}
if($tokumei=="" and $submit=="���e����"){
echo "<font color='#ff0000'>������]�̗L����I��ł�������</font><br>";
}
}
?>	

<?php 
$reply=$_POST["reply"];
$to=$_POST["to"];
if($reply=="���ԐM"){
session_start();
$_SESSION["to"]=$to;
header("location:http://tt-623.99sv-coco.com/mission_6-9.php");
}
?>


<div style="width: 100%; color:white; background-color:#afeeee;"><a href="#a">�V�K���e�̓R�`������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>����f��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">�S���Ōf��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">�V�����f�����쐬����</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">�}�C�A�J�E���g</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">���O�A�E�g</a></div>

<div style="width:100%; color:black; background-color:#afeeee;">
<h2>�y<?php echo $keijiname;?>�z<br>
<?php echo $syoukai;?></h2></div>

<a id="a"></a><div style="width:100%; color:white; background-color:#90ee90;"><h2>�V�K���e�̓R�`������</h2></div>
<form action="mission_6-8.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="���e����͂��Ă�������"></textarea>
<input type="reset" value="������"><br>
<input type="radio" name="tokumei" value="tokumei">������]
<input type="radio" name="tokumei" value="notokumei">��������]���Ȃ�<br>
<input type="submit" name="submit" value="���e����">
</form>

<?php 
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
$tokumei3="������]";
}else{
$tokumei3=$name1;
}
if($hensin1!="0"){
$hensin2="to".$hensin1;
}else{
$hensin2="";
}
echo "<a id='$id'></a><a href='#$hensin1'>$hensin2</a><br>".
$id."<>".$tokumei3."���񂩂�̓��e<>".$date1."<br>".
$comment1."<br>";
echo "<form action='mission_6-8.php' method='post'>
<input type='submit' name='reply' value='���ԐM'style='background:white;border:none;'>
<input type='hidden' name='to' value='$id'>
</form><br>";
}
?>


<?php //�ymission_6-9.php�i�e�X���b�h�̓��e�ւ̕ԐM�t�H�[���j�z
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
if($submit=="�ԐM����"){
if($comment!=""
and $tokumei!=""){
$dsn="�f�[�^�x�[�X��";
$user="���[�U�[��";
$password="�p�X���[�h";
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
echo "�ԐM���������܂���";
}else{
if($comment==""){
echo "<font color='#ff0000'>�ԐM���e����͂��Ă�������</font><br>";
}
if($tokumei==""){
echo "<font color='#ff0000'>������]�̗L����I�����Ă�������</font><br>";
}
}
}
?>

<?php 
$a=$_POST["a"];
if($a=="�f���ɖ߂�"){
header("location:http://tt-623.99sv-coco.com/mission_6-8.php");
}
?>



<div style="width: 100%; color:white; background-color:#afeeee;"><a href="#a">�V�K���e�̓R�`������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php"><?php echo $SESSION['pre'];?>����f��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php">�S���Ōf��������</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-7.php">�V�����f�����쐬����</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-6.php">�}�C�A�J�E���g</a><br>
<a href="http://tt-623.99sv-coco.com/mission_6-3.php#111">���O�A�E�g</a></div>

<div style="width:100%; color:white; background-color:#90ee90;"><h2>�ԐM�t�H�[��</h2></div>
<form action="mission_6-9.php" method="post">
<textarea name="comment" cols="50" rows="5" placeholder="�ԐM����͂��Ă�������"></textarea>
<input type="reset" value="������"><br>
<input type="radio" name="tokumei" value="tokumei">������]
<input type="radio" name="tokumei" value="notokumei">��������]���Ȃ�<br>
<input type="submit" name="submit" value="�ԐM����">
</form>
<br>
<br>
<br>
<form action="mission_6-9.php" method="post">
<input type="submit" name="a" value="�f���ɖ߂�">
</form>


