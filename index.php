<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Barang</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<table>
<tr>
<td><?php include "banner.php" ?></td>
</tr>

<tr>
<td height="320" align="center" valign="middle" bgcolor="cyan">
<form role="form" class="form-inline" method="post" action="ceklogin.php">
<div class="form-group has-success">
<div class="col-md-4">
<input type="text" class="form-control input-md" placeholder="Masukkan Username" name="username" required>
<br>
<input type="password" class="form-control input-md" placeholder="Masukkan Password" name="password" required>
<br>
<button type="submit" name="login" class="btn btn-primary">
<span class="glyphicon glyphicon-user"></span>
Login
</button>
</div>
</div>
</td>
</tr>
<tr>
<td align="center">
<?php include "footer.php" ?></td>
</tr>
</table>
</form>
</body>
</html>