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
                <x-header-stripe :rowClass="$rowClass" :columnClasses="$columnClasses" />
            </section>  
            <section>
                <x-navigation-tabs>
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
                                <x-movie-card :film="$film" :imagePath="$imagePath" />
                            @endif
                        @endforeach
                    </div>
                </x-navigation-tabs>
            </section>
            <section>
                <x-bottom-stripe :rowClass="$rowClass" :columnThreeClasses="$columnThreeClasses" />
            </section>      
            <x-footer />
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
