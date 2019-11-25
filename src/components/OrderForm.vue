<template>
    <div class="col-md-7">
        <p>Закажите сейчас</p>
        <form action="php/send.php" method="post">
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Ваш телефон в формате +х-ххх-ххх-хх-хх" pattern="[\+]\d{1}d{3}\d{3}\d{2}\d{2}" required>
            </div>
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "OrderForm"
    }
</script>

<style scoped>

</style>
