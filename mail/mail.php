<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>CONTACT</title>
<link rel="stylesheet" href="./css/validationEngine.jquery.css" type="text/css"/>
<script type="text/javascript" src="./valid/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="./valid/jquery.validationEngine.js"></script>
<script type="text/javascript" src="./valid/jquery.validationEngine-ja.js"></script>
<script type="text/javascript">
$(function(){
   jQuery("#contact-form").validationEngine();
});
</script>

</head>

<body>
  <form id="contact-form" action="./check.php" method="post">
					<input type="hidden" name="sub_actions" value="confirm">
					<table>
					<tbody>
					<tr>
					<th>Name</th>
    					<td><input type="text" class="validate[required]" name="name" value=""required></td>
					</tr>
					<tr>
					<th>Mail</th>
					<td><input type="text" class="validate[required,custom[email]]" name="e_mail" value=""required></td>
					</tr>
					<tr>
					<th style="vertical-align:top;">Comment</th>
					<td><textarea name="comment" rows="30" cols="40" maxlength="1200" class="[required,maxSize[1200]]"required></textarea>
					</td>
					</tr>
					</tbody>
					</table>
  <div class="bt">
  <input type="submit" value="Confirm" name="submit">
  </div>
  </form>
</body>
</html>
