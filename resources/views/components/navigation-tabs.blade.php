<div class="main">
    <div class="tabs-panel">
        <div class="tabs-container">
            <div class="tabs">
                <div class="tab active" data-tab="afisha">Афиша</div>
                <div class="tab" data-tab="sessions">Сеансы</div>
                <div class="tab" data-tab="cinema">Кинотеатр</div>
                <div class="tab" data-tab="contacts">Контакты</div>
            </div>
            <div class="tab-buttons">
                <button>Войти</button>
                <button>Написать отзыв</button>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="afisha">
                {{ $slot }}
            </div>
            <div class="tab-pane" id="sessions">
                <h3>Сеансы</h3>
                <p>Расписание сеансов на сегодня</p>
                <div class="sessions-list">
                    <div class="session-item">
                        <span>10:00</span>
                        <span>Название фильма 1</span>
                        <span>Зал 1</span>
                    </div>
                    <div class="session-item">
                        <span>13:00</span>
                        <span>Название фильма 2</span>
                        <span>Зал 2</span>
                    </div>
                    <div class="session-item">
                        <span>16:00</span>
                        <span>Название фильма 1</span>
                        <span>Зал 1</span>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="cinema">
                <h3>Кинотеатр</h3>
                <p>Информация о нашем кинотеатре</p>
                <div class="cinema-info">
                    <h4>О кинотеатре</h4>
                    <p>Современный кинотеатр с комфортными залами и последним оборудованием.</p>
                    <h4>Услуги</h4>
                    <ul>
                        <li>3D-сеансы</li>
                        <li>VIP-залы</li>
                        <li>Бар и попкорн</li>
                        <li>Парковка</li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane" id="contacts">
                <h3>Контакты</h3>
                <p>Наши контактные данные</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <h4>Адрес</h4>
                        <p>Улица Тестовая 1, Казахстан</p>
                    </div>
                    <div class="contact-item">
                        <h4>Телефон</h4>
                        <p>+7 700 123 45 67</p>
                    </div>
                    <div class="contact-item">
                        <h4>Email</h4>
                        <p>admin@example.com</p>
                    </div>
                    <div class="contact-item">
                        <h4>Время работы</h4>
                        <p>08:00 - 22:00 с пн.-пт.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
