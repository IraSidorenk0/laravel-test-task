<div class="stripe">
    <div class="{{ $rowClass ?? 'row' }} align-items-center">
        <div class="{{ $columnClasses[0] ?? 'col-md-5 col-sm-12' }} d-flex align-items-center">
            <img class="komek-img" src="{{ asset('images/komek.png') }}" alt="">
            <div class="adress ms-3">
                <h6>Казахстан</h6>
                <p>Улица тестовая</p>
            </div>
        </div>
        <div class="{{ $columnClasses[1] ?? 'col-md-3 col-sm-12' }}">
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
        <div class="{{ $columnClasses[2] ?? 'col-md-4 col-sm-12' }}">
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
