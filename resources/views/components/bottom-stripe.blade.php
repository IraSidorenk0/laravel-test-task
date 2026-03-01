<div class="stripe">
    <div class="{{ $rowClass ?? 'row' }} align-items-center">
        <div class="{{ $columnThreeClasses[0] ?? 'col-md-3 col-sm-6' }} d-flex justify-content-center">
            <img class="komek-img" src="{{ asset('images/komek.png') }}" alt="">
        </div>
        <div class="{{ $columnThreeClasses[1] ?? 'col-md-3 col-sm-6' }}">
            <div class="emails">
                <h6>admin@example.com</h6>
                <h6>ticket@example.com</h6>
                <p>улица Тестовая 1</p>
            </div>
        </div>
        <div class="{{ $columnThreeClasses[2] ?? 'col-md-3 col-sm-6' }}">
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
        <div class="{{ $columnThreeClasses[3] ?? 'col-md-3 col-sm-6' }}">
            <div class="schedule text-center">
                <h6>08:00 - 22:00 с пн.-пт.</h6>
                <p>График работы</p>
            </div>
        </div>
    </div>
</div>
