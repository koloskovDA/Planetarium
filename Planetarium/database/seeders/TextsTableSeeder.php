<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Text::create([
            'title_en' => 'OBSERVATION',
            'title_ru' => 'НАБЛЮДЕНИЯ',
        ]);
        Text::create([
            'title_en' => 'OF DEEP SKY OBJECTS',
            'title_ru' => 'ОБЪЕКТОВ ГЛУБОКОГО КОСМОСА',
        ]);
        Text::create([
            'title_en' => 'AT «GLUBOKAYA» STATION',
            'title_ru' => 'НА ГЛУБОКОЙ',
        ]);
        Text::create([
            'title_en' => 'About us',
            'title_ru' => 'О нас',
            'text_en'  => 'The Irkutsk Planetarium has been conducting deep sky observations through a telescope near the village of Glubokaya since August 2015',
            'text_ru'  => 'Иркутский планетарий проводит выездные наблюдения в телескоп в районе села Глубокая с августа 2015 года',
        ]);
        Text::create([
            'title_en' => 'About us #2',
            'title_ru' => 'О нас #2',
            'text_en'  => 'We need a dark sky without light and the Moon: observations are conducted in a few days before and after the empty Moon period.',
            'text_ru'  => 'Нам нужно тёмное небо без фонарей и Луны: наблюдения проводятся за несколько дней до новолуния и несколько дней после.',
        ]);
        Text::create([
            'title_en' => 'What do we observe*',
            'title_ru' => 'Что мы наблюдаем*',
            'text_en'  => 'We observe galaxies, nebulae, star clusters, double stars, as well as planets of the solar system and comets.',
            'text_ru'  => 'Мы наблюдаем: галактики, туманности, звёздные скопления, двойные звёзды, а также планеты Солнечной системы и кометы.',
        ]);
        Text::create([
            'title_en' => 'How to participate',
            'title_ru' => 'Как поучаствовать',
            'text_en'  => 'Meeting place: "Karetnyi dvor" cafe, "Bolshaya Glubokaya" village. Observations are carried out on the observation deck in the taiga.',
            'text_ru'  => 'Место встречи: кафе "Каретный двор", Култукский тракт, Большая Глубокая. Наблюдения проводятся на площадке в тайге.',
        ]);
        Text::create([
            'title_en' => 'Observation participation fees:',
            'title_ru' => 'Стоимость участия в наблюдениях:',
            'text_en'  => 'Adults - 1000 RUB <br> Schoolchildren - 500 RUB',
            'text_ru'  => 'Взрослый - 1000 рублей <br> Школьник - 500 рублей',
        ]);
        Text::create([
            'title_en' => 'Discounts',
            'title_ru' => 'Скидки',
            'text_en'  => 'Discount for groups of 4 peoples or more - 20%',
            'text_ru'  => 'Группам от 4 человек скидка - 20%',
        ]);
    }
}
