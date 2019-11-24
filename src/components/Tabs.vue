<template>
    <div class="col-md-6">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#" v-on:click="setActive1" v-bind:class="{ active: tabs[0].active }">Описание</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" v-on:click="setActive2" v-bind:class="{ active: tabs[1].active }">Технические характеристики</a>
            </li>
        </ul>

        <p v-if="tabs[0].active" class="tab-content">Ноутбук Lenovo V130 15 отличается высокой производительностью, которая скрыта в стильном текстурированном корпусе. Данный ноутбук - вариант для тех, кто привык окружить себя качественными и практичными устройствами.</p>

        <div v-if="tabs[1].active" class="tab-content">
            <dl class="row">
                <dt class="col-sm-6">Разрешение экрана</dt>
                <dd class="col-sm-6">1366x768, 1920x1080</dd>

                <dt class="col-sm-6">Процессор</dt>
                <dd class="col-sm-6">Celeron, Core i3, Core i5, Core i7, Pentium</dd>

                <dt class="col-sm-6">Количество ядер процессора</dt>
                <dd class="col-sm-6">2, 4</dd>

                <dt class="col-sm-6">Оперативная память</dt>
                <dd class="col-sm-6">2 ГБ, 4 ГБ, 8 ГБ, 12 ГБ</dd>

                <dt class="col-sm-6">Тип видеокарты</dt>
                <dd class="col-sm-6">встроенная</dd>

                <dt class="col-sm-6">Видеокарта</dt>
                <dd class="col-sm-6">Intel HD Graphics 610, Intel HD Graphics 620, Intel UHD Graphics 605, Intel UHD Graphics 620</dd>

                <dt class="col-sm-6">Установленная ОС</dt>
                <dd class="col-sm-6">Windows 10</dd>

                <dt class="col-sm-6">Тип накопителя</dt>
                <dd class="col-sm-6">HDD, SSD</dd>

                <dt class="col-sm-6">Вес</dt>
                <dd class="col-sm-6">1.8 кг</dd>
            </dl>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Tabs",
        data() {
            return {
                tabs: [
                    {
                        caption: 'tab 1',
                        active: true,
                        text: 'content of tab1'
                    },
                    {
                        caption: 'tab 2',
                        active: false,
                        text: 'content of tab2'
                    },
                ]
            }
        },
        methods: {
            setActive1() {
                this.tabs[0].active = true;
                this.tabs[1].active = false;
            },
            setActive2() {
                this.tabs[1].active = true;
                this.tabs[0].active = false;
            },
        },
    }
</script>

<style scoped>
    .tab-content {
        margin-top: 25px;
    }
</style>
