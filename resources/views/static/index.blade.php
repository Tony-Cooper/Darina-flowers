@extends ('../layouts/app')

@section('title')
    Главная
@endsection

@section('content')
    <h1>Главная страница сайта</h1>
    <ul class="plans"><h2>Реализовать:</h2>
        <li class="completed">Структура, шаблоны, динамические блоки</li>
        <li class="not-completed">Рекламный банер на главной</li>
        <li class="not-completed">Популярные товары на главной</li>
        <li class="completed">Категории(many to many)</li>
        <li class="completed">Характеристики товаров</li>
        <li class="completed">Сортировка товаров</li>
        <li class="completed">Пагинация</li>
        <li class="not-completed">фильтры для товаров</li>
        <li class="not-completed">Корзина</li>
        <li class="not-completed">Поиск товаров</li>
        <li>
            <ul class="sub-list not-completed">Личный кабинет
                <li class="not-completed">Авторизация</li>
                <li class="not-completed">Авторизация через гугл, фейсбук, и т.д.</li>
                <li class="not-completed">Информация о статусе заказа</li>
                <li class="not-completed">Список всех заказов</li>
            </ul>
        </li>
        <li class="not-completed">Отслеживание заказа по номеру заказа</li>
        <li class="not-completed">Форма обратной связи(SMTP)</li>
        <li class="not-completed">Система оплаты</li>
        <li class="not-completed">Страница с товаром, описание, характеристики, система фотографий</li>
        <li>
            <ul class="sub-list not-completed">Админка
                <li class="not-completed">Добавление товаров</li>
                <li class="not-completed">Удаление товаров</li>
                <li class="not-completed">Редактирование товаров</li>
                <li class="not-completed">Система редактирования фотографий</li>
                <li class="not-completed">Управление статусом заказа</li>
                <li class="not-completed">Управление рекламными банерами</li>
                <li class="not-completed">Управление категориями(is_active, добавление, удаление, изменение)</li>
            </ul>
        </li>
        <li class="not-completed">Уведомления о новых заказах(Продавец, SMTP)</li>
        <li class="not-completed">Уведомления об изменении статуса заказа(Покупатель, SMTP)</li>
        <li class="not-completed">Статические страницы</li>

    </ul>
@endsection
