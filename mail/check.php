<?php
//不正アクセスチェック。
//!$_POSTで　$_POSTがSetされているかをチェックし、セットされていなければリダイレクト
if(!$_POST || !isset($_POST["name"]) || !isset($_POST["e_mail"]) || !isset($_POST["comment"])){
	header('Location:http://localhost/develop/mail/mail/mail.php');//リダイレクト処理、テスト用アドレス
		}

session_start();
$_SESSION = $_POST;//to do：正規表現によるチェック等

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>CONFIRM</title>
</head>

<body>
	<form id="form-check" action="./send.php" method="post">
					<input type="hidden" name="sub_actions" value="confirm">
					<table>
					<tbody>
					<tr>
					<th>Name</th>
					<td><?php echo htmlspecialchars($_POST['name']);?></td>
					</tr>
					<tr>
					<th>Mail</th>
					<td><?php echo htmlspecialchars($_POST['e_mail']);?></td>
					</tr>
					<tr>
					<th style="vertical-align:top;">Comment</th>
					<td><?php echo htmlspecialchars($_POST['comment']);?>
					</td>
					</tr>
					</tbody>
					</table>

	<div class="bt">
	<input type="button" value="Back" onclick="history.back()">
	<input type="submit" value="Submit" name="submit">
	</div>
</form>
</body>
</html>
