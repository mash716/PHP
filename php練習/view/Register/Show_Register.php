<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<title>ユーザー登録結果</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<form method="POST" action="Register_Result.php">
<input type="hidden" name="name" value=<?php echo($_POST['name']);?>>
<input type="hidden" name="kana" value=<?php echo($_POST['kana']);?>>
<input type="hidden" name="age" value=<?php echo($_POST['age']);?>>
<input type="hidden" name="address" value=<?php echo($_POST['address']);?>>
<input type="hidden" name="juusho" value=<?php echo($_POST['juusho']);?>>
<input type="hidden" name="birthday" value=<?php echo($_POST['birthday']);?>>
<input type="hidden" name="tel" value=<?php echo($_POST['tel']);?> >
<input type="hidden" name="password" value=<?php echo($_POST['password']);?>>
<input type="hidden" name="password2" value=<?php echo($_POST['password2']);?>>

<?php echo($_POST['name']);?><br>
<?php echo($_POST['kana']);?><br>
<?php echo($_POST['age']);?><br>
<?php echo($_POST['address']);?><br>
<?php echo($_POST['juusho']);?><br>
<?php echo($_POST['birthday']);?><br>
<?php echo($_POST['tel']);?><br>
<p>
    <input type="submit" class="id_3" value="登録" />
</p>

</form>
</html>