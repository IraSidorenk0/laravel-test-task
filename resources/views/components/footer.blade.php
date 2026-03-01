<footer>
    <div class="main-footer">
        <div>
            <p>Меню</p>
            <ul>
                <li>Афиша</li>
                <li>Сеансы</li>
                <li>Пушкинская карта</li>
                <li>Кинотеатр </li>
                <li>Контакты</li>
            </ul>
        </div>
        <div>
            <p>Способы оплаты:</p>
            <div class="payment-method">
                <img src="{{ asset('images/payments/MasterCard.svg') }}" alt="">
                <img src="{{ asset('images/payments/Visa.svg') }}" alt="">
            </div>
        <div class="little-texts">
            Все сеансы начинаются с рекламно-информационного блока.
            Точную продолжительность сеансов можно уточнить в кинотеатре.
        </div>
    </div>
</div>
<hr>
<div class="links">
    <div>
        <img src="{{ asset('images/social-links/Facebook.svg') }}" alt="">
        <img src="{{ asset('images/social-links/Instagram.svg') }}" alt="">
        <img src="{{ asset('images/social-links/Youtube.svg') }}" alt="">
        <img src="{{ asset('images/social-links/Vkontakte (VK).svg') }}" alt="">
    </div>
    <div>© {{ date('Y') }} Все права защищены</div>
</div>
</footer>
