<?php
$page_title = "Контакты";
require("components/header.php");
session_start();

?>
<?php
if (isset($_SESSION['success_mail'])) {
    echo "<div class='alert alert-success'>
    <i class='far fa-check-circle mr-10'></i>
     Сообщение успешно отправлено
    </div>";
}
?>


<div class="container-sm" style="max-width: 500px">
    <div class="mb-4 card">
        <h1 class="card-header"><?= $page_title ?></h1>
        <div class="card-body">

            <form class="row g-3 needs-validation" action="check_contact.php" method="post" novalidate>
                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="text" id="name" name="name" autocomplete="name" class="form-control" required
                               value="<?= $_SESSION['user_name'] ?? '' ?>"/>
                        <label class="form-label" for="name">Имя</label>
                        <div class="invalid-feedback">Введите имя</div>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="email" id="email" name="email" class="form-control" autocomplete="email" required
                               value="<?= $_SESSION['email'] ?? '' ?>"/>
                        <label class="form-label" for="email">Email</label>
                        <div class="invalid-feedback">Введите корректный email</div>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-outline">
                        <input type="text" name="theme" id="theme" class="form-control" required
                               value="<?= $_SESSION['theme'] ?? '' ?>" minlength="5"/>
                        <label class="form-label" for="theme">Тема</label>
                        <div class="invalid-feedback">Тема сообщения не менее 5-ти символов</div>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-outline">
                    <textarea class="form-control" name="message" id="message"
                              rows="4" minlength="15" required><?= $_SESSION['message'] ?? '' ?></textarea>
                        <label class="form-label" for="message">Сообщение</label>
                        <div class="invalid-feedback">Сообщения не менее 15-ти символов</div>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                </div>

                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="send-copy" name="send-copy"
                           checked/>
                    <label class="form-check-label" for="send-copy">
                        Отправить мне копию сообщения
                    </label>
                </div>

                <!-- Submit button -->
                <button class="btn btn-primary btn-block mb-4">Отправить</button>
            </form>
        </div>
    </div>
</div>
<script>
    (() => {
        'use strict';

        const forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
<?php
require('components/footer.php');
?>
