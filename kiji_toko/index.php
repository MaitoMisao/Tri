<?php require "header.php"; ?>


<body>
<div id="main">
<div class="uk-container">
<?php require "class.php"; ?>
<h1>FORUM</h1>
<h2>NOTICE BOARD</h2>
<form action="index.php" method="post">
<div class="uk-form-row">
<label class="uk-form-label">PostContent</label>
<input class="uk-search-input" type="text" name="content">
</div>
<div class="uk-form-row">
<label class="uk-form-label">PostPerson</label>
<input class="uk-search-input" type="text" name="user_name">
</div>
<div class="trnsmit">
<button class="uk-button-primary" type="submit">Transmit</button>
</div>
</form>


<h2>REMARK</h2>
<?php require "get.php"; ?>
<?php require "footer.php"; ?>

</div>
</div>
</body>
</html>
