<?php require_once $_SERVER['DOCUMENT_ROOT']. '/core/head.php'; ?>


<div>

    <form action="/modules/authentication/authentication.php" method="post">

        <input type="text" name="email" placeholder="E-mail"> <br> <br>

        <input type="password" name="password" placeholder="Password"> <br> <br>

        <button type="submit">Login</button>

    </form>

</div>


<?php require_once $_SERVER['DOCUMENT_ROOT']. '/core/foot.php'; ?>

