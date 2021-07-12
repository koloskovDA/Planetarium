<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [51.880849, 103.843803],
                zoom: 13
            });

            DG.marker([51.880849, 103.843803]).addTo(map);
        });
    </script>
    <title>Планетарий</title>
</head>
<body>

<section class="section section--top">
    <div class="container">
        <div class="row">
            <div class="col col--event">
                @if ($current_stage !== NULL)
                <div class="text--event ru"><img class="ellips" src="/images/ellips.svg" alt="">Идёт {{$current_stage->id}} серия наблюдений
                </div>
                <div class="text--event en"><img class="ellips" src="/images/ellips.svg" alt="">{{$current_stage->id}}'th series of observations in progress
                </div>
                    @endif
            </div>
            <div class="col col--event">
                <div class="text--event text-right"><a href="#" id="en">EN</a> | <a href="#" id="ru">RU</a></div>
            </div>
        </div>

        <div class="col welcome--information">
            <div class="information--text--tight en">OBSERVATION</div>
            <div class="information--text--tight ru">НАБЛЮДЕНИЯ</div>
            <div class="information--text--bold en">OF DEEP SPACE OBJECTS</div>
            <div class="information--text--bold ru">ОБЪЕКТОВ ГЛУБОКОГО КОСМОСА</div>
            <div class="information--text--tight en">AT «GLUBOKAYA» STATION</div>
            <div class="information--text--tight ru">НА ГЛУБОКОЙ</div>

            <button class="btn--other en" type="button" onclick="window.location='https://telegram.me/PNikiforov'">Sign up</button>
            <button class="btn--other ru" type="button" onclick="window.location='https://telegram.me/PNikiforov'">Записаться</button>
        </div>

        <div class="col">
            <img class="next" src="/images/next.svg" alt="">
        </div>
    </div>
</section>

<section class="section section--about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xl-6">
                <img class="img--about" src="/images/Glubokaya_2 1.png" alt="">
            </div>

            <div class="col-md-12 col-sm-12 col-xl-6">
                <div class="about--text--bold en">About us</div>
                <div class="about--text--bold ru">О нас</div>

                <div class="about--text--tight en">The Irkutsk Planetarium has been conducting field observations with a
                    telescope near the village of Glubokaya since August 2015
                </div>
                <div class="about--text--tight ru">Иркутский планетарий проводит выездные наблюдения в телескоп в районе
                    села Глубокая с августа 2015 года
                </div>


                <img class="telescope" src="/images/telescope.svg" alt="">

                <div class="about--text--tight en">We need a dark sky without lanterns and the moon: observations are
                    made a few days before the new moon and a few days after.
                </div>
                <div class="about--text--tight ru">Нам нужно тёмное небо без фонарей и Луны: наблюдения проводятся за
                    несколько дней до новолуния и несколько дней после.
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section section--what">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="what--text--bold en">What do we observe*</div>
                <div class="what--text--bold ru">Что мы наблюдаем*</div>

                <div class="what--text--tight en">We observe: galaxies, nebulae, star clusters, double stars, as well as
                    planets of the solar system and comets.
                </div>
                <div class="what--text--tight ru">Мы наблюдаем: галактики, туманности, звёздные скопления, двойные
                    звёзды, а так же планеты Солнечной системы и кометы.
                </div>
            </div>
        </div>

        <div class="row justify-content-between mt-3 ml-3">
            <div class="col-6 col-md-6 col-lg-2 col-sm-6">
                <div class="anim-img"><img class="img--what" src="/images/1.svg" alt=""></div>
            </div>

            <div class="col-6 col-md-6 col-lg-2 col-sm-6">
                <div class="anim-img"><img class="img--what" src="/images/3.svg" alt=""></div>
            </div>

            <div class="col-6 col-md-6 col-lg-2 col-sm-6">
                <div class="anim-img"><img class="img--what img--media" src="/images/4.svg" alt=""></div>
            </div>

            <div class="col-6 col-md-6 col-lg-2 col-sm-6">
                <div class="anim-img"><img class="img--what img--media" src="/images/5.svg" alt=""></div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="what--text--mini en">
                    *depending on the season, the observation program changes, check the current one by phone.
                </div>
                <div class="what--text--mini ru">
                    *в зависимости от сезона, программа наблюдений меняется, уточняйте актуальную по телефону.
                </div>

                <button class="btn--what en" type="button" onclick="window.location='https://telegram.me/PNikiforov'">Sign up</button>
                <button class="btn--what ru" type="button" onclick="window.location='https://telegram.me/PNikiforov'">Записаться</button>
            </div>
        </div>
    </div>
</section>

<section class="section section--join">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="join--text--bold en">How to participate</div>
                <div class="join--text--bold ru">Как поучаствовать</div>
            </div>
        </div>

        <div class="row">
            <div class="col-7 col-md-6 col-sm-12 col-xs-12">
                <div class="more--text">
                    <div class="join--text--tight en">Observation participation fee:</div>
                    <div class="join--text--tight ru">Стоимость участия в наблюдениях:</div>
                    <div class="join--text--tight en">Adult - 1000 RUB <br> Student - 500 RUB</div>
                    <div class="join--text--tight ru">Взрослый - 1000 рублей <br> Школьник - 500 рублей</div>
                    <div class="join--text--tight en">Discount for groups of 4 people - 20%</div>
                    <div class="join--text--tight ru">Группам от 4 человек скидка - 20%</div>
                </div>
            </div>

            <div class="col-5 col-md-6 col-sm-12 col-xs-12">
                <div class="img--map" id="map"></div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="join--text--normal en">ACTUAL DATES UNTIL {{\Carbon\Carbon::now()->format('Y')}}:</div>
                <div class="join--text--normal ru">АКТУАЛЬНЫЕ ДАТЫ ДО КОНЦА {{\Carbon\Carbon::now()->format('Y')}}
                    ГОДА:
                </div>
            </div>
        </div>

        <div class="row text--bl">
            <div class="col">
                <div class="textcols">
                    @if ($stages->count() != 0)
                        <div class="textcols-left">
                            @foreach($stages[0] as $stage)
                                <div class="join--text--tight en">{{$stage->starts_at->format('d F')}} - {{$stage->ends_at->format('d F')}}</div>
                                <div class="join--text--tight ru">{{$stage->starts_at->translatedFormat('d F')}} - {{$stage->ends_at->translatedFormat('d F')}}</div>
                            @endforeach
                        </div>
                        <div class="textcols-right">
                            @if ($stages->count() > 1)
                                @foreach($stages[1] as $stage)
                                    <div class="join--text--tight en">{{$stage->starts_at->format('d F')}} - {{$stage->ends_at->format('d F')}}</div>
                                    <div class="join--text--tight ru">{{$stage->starts_at->translatedFormat('d F')}} - {{$stage->ends_at->translatedFormat('d F')}}</div>
                                @endforeach
                            @endif
                        </div>
                    @else
                        <div class="textcols-left">
                            <div class="join--text--tight">НЕТ ДОСТУПНЫХ ДАТ</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">

    <div class="container">

        <div class="row">
            <div class="col">
                <div class="mobile--text"><a href="tel:89149480464">+7 914 948 04 64</a></div>
            </div>
        </div>


        <div class="row justify-content-evenly mt-3 ml-3">
            <div class="col">
                <a href="https://api.whatsapp.com/send?phone=79149480464">
                    <img class="img--int--1" src="/images/whatsapp.svg" alt="">
                </a>
            </div>

            <div class="col">
                <a href="https://telegram.me/PNikiforov">
                    <img class="img--int" src="/images/telegram.svg" alt="">
                </a>
            </div>

            <div class="col">
                <a href="viber://chat?number=%2B79149480464">
                    <img class="img--int--3" src="/images/viber.svg" alt="">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="footer--text en">You can read the reviews and leave yours:</div>
                <div class="footer--text ru">Ознакомиться с отзывами и оставить свой вы можете:</div>
            </div>
        </div>

        <div class="row align-items-center justify-content-between mt-3 ml-3">
            <div class="col-xl-3 col-xs-6 col-sm-6">
                <a href="https://irkplanetarium.com/">
                    <img class="img--footer" src="/images/irk.svg" alt="">
                </a>
            </div>

            <div class="col-xl-2 col-xs-6 col-sm-6">
                <a href="https://2gis.ru/irkutsk/firm/70000001017536519/tab/reviews?floor=1&m=104.289833%2C52.273768%2F18.19">
                    <img class="img--footer" src="/images/gis.svg" alt="">
                </a>
            </div>

            <div class="col-xl-2 col-xs-6 col-sm-6">
                <a href="https://yandex.ru/search/?lr=213&text=%D0%9F%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0%D1%80%D0%B8%D0%B9%20%D0%98%D1%80%D0%BA%D1%83%D1%82%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0%D1%80%D0%B8%D0%B9%20%D0%B8%20%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BE%D0%B1%D1%81%D0%B5%D1%80%D0%B2%D0%B0%D1%82%D0%BE%D1%80%D0%B8%D1%8F&oid=b%3A1386617611&noreask=1&intent=reviews">
                    <img class="img--footer" src="/images/yan.svg" alt="">
                </a>
            </div>

            <div class="col-xl-2 col-xs-6 col-sm-6">
                <a href="https://www.google.com/search?q=%D0%B8%D1%80%D0%BA%D1%83%D1%82%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0%D1%80%D0%B8%D0%B9&sxsrf=ALeKk01JO5UdQi-t-USEBb-koYAEr-t2Ag%3A1626055946704&source=hp&ei=CqXrYK_WKLqM9u8P0Oy6sAk&iflsig=AINFCbYAAAAAYOuzGprlVbsgynGAvdUKfFjW8PhNvgev&oq=%D0%B8%D1%80%D0%BA%D1%83%D1%82%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D0%B0%D1%80%D0%B8%D0%B9&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAgjECcyBAgjECcyCAguEMcBEK8BMgIIADICCAAyBggAEBYQHjoICAAQsQMQgwE6CgguEMcBEK8BEEM6DgguELEDEIMBEMcBEKMCOgUIABCxAzoFCC4QsQM6CAguELEDEIMBOgoILhCxAxCDARBDOg4ILhCxAxCDARDHARCvAToCCC46CwguELEDEMcBEK8BOgUIABDJAzoJCAAQyQMQFhAeUMoLWIgfYJQgaABwAHgAgAGRAYgB1RSSAQQwLjIwmAEAoAEBqgEHZ3dzLXdpeg&sclient=gws-wiz&ved=0ahUKEwivg9i4utzxAhU6hv0HHVC2DpYQ4dUDCAc&uact=5#lrd=0x5da83b5010342cb3:0x7907748a6214ae96,1,,,">
                    <img class="img--footer" src="/images/google.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{asset('js/vendor/jquery.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
