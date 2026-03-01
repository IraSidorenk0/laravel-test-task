<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body class="antialiased">
        @php
            $rowClass = 'row';
            $columnClasses = ['col-md-5 col-sm-12', 'col-md-3 col-sm-12', 'col-md-4 col-sm-12'];
            $columnThreeClasses = ['col-md-3 col-sm-6', 'col-md-3 col-sm-6', 'col-md-3 col-sm-6', 'col-md-3 col-sm-6'];
        @endphp
        <div class="container">
            <header></header>
            <section>
                <div class="stripe">
                    <div class="{{ $rowClass }} align-items-center">
                        <div class="{{ $columnClasses[0] }} d-flex align-items-center">
                            <img class="komek-img" src="{{ asset('images/komek.png') }}" alt="">
                            <div class="adress ms-3">
                                <h6>Казахстан</h6>
                                <p>Улица тестовая</p>
                            </div>
                        </div>
                        <div class="{{ $columnClasses[1] }}">
                            <select aria-label="Telephone numbers" class="w-auto mx-auto">
                                <option value="+77001234567">+7 700 123 45 67</option>
                                <option value="+77012345678">+7 701 234 56 78</option>
                                <option value="+77023456789">+7 702 345 67 89</option>
                                <option value="+77034567890">+7 703 456 78 90</option>
                                <option value="+77045678901">+7 704 567 89 01</option>
                                <option value="+77056789012">+7 705 678 90 12</option>
                                <option value="+77067890123">+7 706 789 01 23</option>
                                <option value="+77078901234">+7 707 890 12 34</option>
                            </select>
                            <p class="mt-2">Касса</p>
                        </div>
                        <div class="{{ $columnClasses[2] }}">
                            <div class="links h-100 d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex gap-3">
                                    <img src="{{ asset('images/social-links/Facebook.svg') }}" alt="">
                                    <img src="{{ asset('images/social-links/Instagram.svg') }}" alt="">
                                    <img src="{{ asset('images/social-links/Youtube.svg') }}" alt="">
                                    <img src="{{ asset('images/social-links/Vkontakte (VK).svg') }}" alt="">
                                </div>
                                <button>Мне пришел билет</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
            <section>
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
                                <div class="date-buttons">
                                    <button class="date-btn active">Сегодня</button>
                                    <button class="date-btn">Завтра</button>
                                    @php
                                        $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
                                        $months = ['', 'янв.', 'февр.', 'марта', 'апр.', 'мая', 'июня', 'июля', 'авг.', 'сент.', 'окт.', 'нояб.', 'дек.'];
                                        
                                        for($i = 2; $i <= 4; $i++) {
                                            $date = new DateTime('+' . $i . ' days');
                                            $dayName = $days[$date->format('w')];
                                            $dayNumber = $date->format('j');
                                            $monthName = $months[$date->format('n')];
                                    @endphp
                                            <button class="date-btn">{{ $dayName }}, {{ $dayNumber }} {{ $monthName }}</button>
                                        @php
                                        }
                                    @endphp
                                </div>
                                <div class="movie-grid">
                                    @php
                                        $filmsPath = public_path('images/films');
                                        
                                        // Sample film data - in real app this would come from database
                                        $filmData = [
                                            
                                            'image 4.png' => [
                                                'name' => 'Праздники',
                                                'badges' => ['экшн', 'триллер'],
                                                'sessions' => [
                                                    ['time' => '11:00', 'format' => '2D', 'price' => '1300 ₸', 'hall' => 'Зал 2'],
                                                    ['time' => '15:00', 'format' => '3D', 'price' => '1600 ₸', 'hall' => 'Зал 1'],
                                                    ['time' => '19:00', 'format' => '2D', 'price' => '1300 ₸', 'hall' => 'Зал 3']
                                                ]
                                            ],
                                            'image 5.png' => [
                                                'name' => 'Заложники',
                                                'badges' => ['экшн', 'триллер'],
                                                'sessions' => [
                                                    ['time' => '12:00', 'format' => '2D', 'price' => '1233 ₸', 'hall' => 'Зал 3'],
                                                    ['time' => '16:00', 'format' => '3D', 'price' => '1533 ₸', 'hall' => 'Зал 2'],
                                                    ['time' => '20:00', 'format' => '2D', 'price' => '1233 ₸', 'hall' => 'Зал 1']
                                                ]
                                            ],
                                            'image 6.png' => [
                                                'name' => 'Мег 2: Бездна',
                                                'badges' => ['2D', 'дубляж'],
                                                'sessions' => [
                                                    ['time' => '10:30', 'format' => '2D', 'price' => '1233 ₸', 'hall' => 'Зал 3'],
                                                    ['time' => '14:30', 'format' => '2D', 'price' => '1233 ₸', 'hall' => 'Зал 1'],
                                                    ['time' => '18:30', 'format' => '3D', 'price' => '1533 ₸', 'hall' => 'Зал 2']
                                                ]
                                            ],
                                            'image 7.png' => [
                                                'name' => 'Леди Баг и Супер-Кот: Пробуждение силы',
                                                'badges' => ['анимауионное приключение'],
                                                'sessions' => [
                                                    ['time' => '11:30', 'format' => '2D', 'price' => '1100 ₸', 'hall' => 'Зал 1'],
                                                    ['time' => '15:30', 'format' => '3D', 'price' => '1400 ₸', 'hall' => 'Зал 3'],
                                                    ['time' => '19:30', 'format' => '2D', 'price' => '1100 ₸', 'hall' => 'Зал 2']
                                                ]
                                            ],
                                            'No images' => [
                                                'name' => 'Когда не загрузилась афиша',
                                                'badges' => ['комедия'],
                                                'sessions' => [
                                                    ['time' => '15:35', 'format' => '2D', 'price' => '1233 ₸', 'hall' => 'Зал 3']
                                                ]
                                            ],
                                            'image 10.png' => [
                                                'name' => 'Руслан и Людмила. Больше, чем сказка',
                                                'badges' => ['комедия'],
                                                'sessions' => [
                                                    ['time' => '10:00', 'format' => '2D', 'price' => '1200 ₸', 'hall' => 'Зал 1'],
                                                    ['time' => '13:30', 'format' => '3D', 'price' => '1500 ₸', 'hall' => 'Зал 2'],
                                                    ['time' => '17:00', 'format' => '2D', 'price' => '1200 ₸', 'hall' => 'Зал 3'],
                                                    ['time' => '20:30', 'format' => '2D', 'price' => '2000 ₸', 'hall' => 'Зал 1']
                                                ]
                                            ]
                                        ];
                                        
                                        // Get existing image files
                                        $existingImages = [];
                                        if (is_dir($filmsPath)) {
                                            $filmFiles = glob($filmsPath . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                            $existingImages = array_map('basename', $filmFiles);
                                        }
                                    @endphp
                                    
                                    @foreach($filmData as $imageFile => $film)
                                        @php
                                            // Check if this film should be displayed (either has existing image or is 'No images')
                                            $shouldDisplay = ($imageFile === 'No images') || in_array($imageFile, $existingImages);
                                            $imagePath = ($imageFile === 'No images') ? null : $imageFile;
                                        @endphp
                                        
                                        @if($shouldDisplay)
                                            <div class="movie-card">
                                                <div class="film-image">
                                                    @if($imagePath)
                                                        <img src="{{ asset('images/films/' . $imagePath) }}" alt="{{ $film['name'] }}">
                                                    @else
                                                        <img src="{{ asset('images/films/no-image.png') }}" alt="{{ $film['name'] }}">
                                                    @endif
                                                </div>
                                                <div class="film-content">
                                                    <h4 class="film-name">{{ $film['name'] }}</h4>
                                                    <div class="film-badges">
                                                        @foreach($film['badges'] as $badge)
                                                            <span class="badge">{{ $badge }}</span>
                                                        @endforeach
                                                    </div>
                                                    <div class="film-data">
                                                        <div class="film-sessions">
                                                            @foreach($film['sessions'] as $session)
                                                                <div class="session-col">
                                                                    <div class="session-time-col">
                                                                        <span class="session-time">{{ $session['time'] }}</span>
                                                                        <div class="session-col session-format-price-col">
                                                                            <span>{{ $session['format'] }}</span>
                                                                            <span>{{ $session['price'] }}</span>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="session-hall-col">
                                                                        <span >{{ $session['hall'] }}</span>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
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
            </section>
            <section>
                <div class="stripe">
                    <div class="{{ $rowClass }} align-items-center">
                        <div class="{{ $columnThreeClasses[0] }} d-flex justify-content-center">
                            <img class="komek-img" src="{{ asset('images/komek.png') }}" alt="">
                        </div>
                        <div class="{{ $columnThreeClasses[1] }}">
                            <div class="emails">
                                <h6>admin@example.com</h6>
                                <h6>ticket@example.com</h6>
                                <p>улица Тестовая 1</p>
                            </div>
                        </div>
                        <div class="{{ $columnThreeClasses[2] }}">
                            <select aria-label="Telephone numbers" class="w-auto mx-auto">
                                <option value="+77001234567">+7 700 123 45 67</option>
                                <option value="+77012345678">+7 701 234 56 78</option>
                                <option value="+77023456789">+7 702 345 67 89</option>
                                <option value="+77034567890">+7 703 456 78 90</option>
                                <option value="+77045678901">+7 704 567 89 01</option>
                                <option value="+77056789012">+7 705 678 90 12</option>
                                <option value="+77067890123">+7 706 789 01 23</option>
                                <option value="+77078901234">+7 707 890 12 34</option>
                            </select>
                            <p class="mt-2">Касса</p>
                        </div>
                        <div class="{{ $columnThreeClasses[3] }}">
                            <div class="schedule text-center">
                                <h6>08:00 - 22:00 с пн.-пт.</h6>
                                <p>График работы</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>      
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
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.tab');
                const tabPanes = document.querySelectorAll('.tab-pane');
                const dateButtons = document.querySelectorAll('.date-btn');
                
                // Main tabs functionality
                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        const targetTab = this.getAttribute('data-tab');
                        
                        // Remove active class from all tabs and panes
                        tabs.forEach(t => t.classList.remove('active'));
                        tabPanes.forEach(pane => pane.classList.remove('active'));
                        
                        // Add active class to clicked tab and corresponding pane
                        this.classList.add('active');
                        document.getElementById(targetTab).classList.add('active');
                    });
                });
                
                // Date buttons functionality
                dateButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Remove active class from all date buttons
                        dateButtons.forEach(b => b.classList.remove('active'));
                        
                        // Add active class to clicked button
                        this.classList.add('active');
                    });
                });
            });
        </script>
</html>
