<?php
session_start();
$products = ['Яблуко', 'Банан', 'Апельсин'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product'])) {
    $_SESSION['cart'][] = $_POST['product'];

    if(isset($_COOKIE['previous'])){
        $prev = explode(',', $_COOKIE['previous']);
    }
    else{
        $prev = [];
    }
    $prev[] = $_POST['product'];
    setcookie('previous', implode(',', array_unique($prev)), time() + (7 * 24 * 60 * 60));
}

?>

<form method="post">
    <select name="product">
        <?php foreach ($products as $item){ ?>
            <option value="<?= $item ?>"><?= $item ?></option>
        <?php } ?>
    </select>
    <button type="submit">Додати</button>
</form>

<h3>Поточна корзина:</h3>
<ul>
    <?php foreach ($_SESSION['cart'] ?? [] as $item){ ?>
        <li><?= $item ?></li>
    <?php } ?>
</ul>

<h3>Попередні покупки:</h3>
<ul>
    <?php foreach (explode(',', $_COOKIE['previous'] ?? '') as $item){ ?>
        <?php if ($item){ ?><li><?= $item ?></li><?php } ?>
    <?php } ?>
</ul>