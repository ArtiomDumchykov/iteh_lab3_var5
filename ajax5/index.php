<?php require "download/bal.php"; ?>
<?php require "download/cli.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Var 5</title>
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>
<form action="vendor.php">
    <p><b>товары выбранного производителя</b></p>
    <select name="vendor" id="">
        <?php
        foreach ($fuc as $vendor) {
            echo "<option value=\"$vendor\">$vendor</option>";
        }
        ?>
    </select>
    <p><input type="button" value="Нажми сюда" onclick="getVendor();"></p>
</form>
<ul id="result1"></ul>



<form action="catefory.php">
    <p><b>товары выбранной категории</b></p>
    <select name="category" id="">
        <?php
        foreach ($cat as $category) {
            echo "<option value=\"$category\">$category</option>";
        }
        ?>
    </select>
    <p><input type="button" value="Нажми сюда" onclick="getCat();"></p>
</form>
<ul id="result2"></ul>



<form action="price.php">
    <p><b>товары в выбранном ценовом диапазоне</b></p>
    <label for="myRange"></label><input type="range" min="1" max="250" value="1" class="slider" id="myRange" name="test">
    <p>Значение: <span id="demo"></span></p>
    <p><input type="button" value="Нажми сюда" onclick="getPrice();"></p>
</form>
<ul id="result3"></ul>


<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>
</body>
</html>