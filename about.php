<?php
$page_title = "О нас";
require("components/header.php");
?>
<div class="container mb-4">
<h1><?= $page_title ?></h1>

    <form action="check_post.php" method="post">
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" name="firstName" id="firstName" class="form-control" autocomplete="given-name" required />
                    <label class="form-label" for="firstName">Имя</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" name="lastName" id="lastName" class="form-control" autocomplete="family-name" />
                    <label class="form-label" for="lastName">Фамилия</label>
                </div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input type="email" name="email" id="email" class="form-control" autocomplete="email" required />
            <label class="form-label" for="email">Email</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" id="password" class="form-control" autocomplete="new-password" required />
            <label class="form-label" for="password">Пароль</label>
        </div>

        <div class="form-outline">
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            <label class="form-label" for="message">Обо себе:</label>
        </div>

        <button class="btn btn-success btn-block mt-4 mb-4">Зарегистрироваться</button>

    </form>
</div>
<?php
require('components/footer.php');
?>



