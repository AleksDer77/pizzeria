<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /*
     * кол-во продуктов ()
     */
    public function run(): void
    {
        $data = [
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Черри Чиз 24см',
                'description' => 'Изысканные помидорки Черри, насыщенный сыр Филадельфия и тягучая Моцарелла.',
                'price'       => 590,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Чиккен Комбо',
                'description' => 'Три наши топовые пиццы (23 см) - Чикен Рэнч, Чикен Барбекю и Куриный Жульен + литр клюквенного морса в одном комбо.',
                'price'       => 1920,
                'available'   => false,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Пицца-мен 24см',
                'description' => 'Наша фирменная пицца – тягучая моцарелла, сочная куриная грудка и пепперони, поджаристый бекон, спелые томаты, шампиньоны, красный лук и ароматный чеснок. Посыпается пармезаном и свежей зеленью.',
                'price'       => 590,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Пицца-мен 36см',
                'description' => 'Наша фирменная пицца – тягучая моцарелла, сочная куриная грудка и пепперони, поджаристый бекон, спелые томаты, шампиньоны, красный лук и ароматный чеснок. Посыпается пармезаном и свежей зеленью.',
                'price'       => 590,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Пепперони',
                'description' => 'Классический рецепт пиццы пепперони – пикантные колбаски пепперони со свежими шампиньонами и сыром моцарелла.',
                'price'       => 530,
                'available'   => false,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Классика',
                'description' => 'Классическое сочетание пикантных колбасок пепперони и ветчины, свежих шампиньонов с сырами моцарелла и пармезан.',
                'price'       => 600,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Мясная',
                'description' => 'Изысканное сочетание куриной грудки, свинины, ветчины, поджаристого бекона и колбасок пепперони в сочетании с сыром моцарелла.',
                'price'       => 580,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Гавайская 24см',
                'description' => 'Сочетание сладкого ананаса, ветчины и сыра моцарелла.',
                'price'       => 530,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Гавайская 36см',
                'description' => 'Сочетание сладкого ананаса, ветчины и сыра моцарелла.',
                'price'       => 530,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Маргарита',
                'description' => 'Сочные тепличные томаты и нежный сыр моцарелла.',
                'price'       => 490,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Домашняя',
                'description' => 'Спелые томаты, шампиньоны, ветчина и сыр моцарелла, посыпается пармезаном и ароматной свежей зеленью.',
                'price'       => 630,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Куриный жульен',
                'description' => 'Пряный горчичный соус, сыр моцарелла, ароматный чеснок и красный лук, куриная грудка и свежие шампиньоны.',
                'price'       => 610,
                'available'   => true,
                'category_id' => 1,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Морс из клюквы 250мл',
                'description' => 'Освежающий натуральный морс из клюквы',
                'price'       => 80,
                'available'   => true,
                'category_id' => 2,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Сок яблочный 250мл',
                'description' => 'Натуральный фруктовый сок',
                'price'       => 65,
                'available'   => true,
                'category_id' => 2,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Чай зеленый',
                'description' => 'Крепкий тонизирующий чай',
                'price'       => 90,
                'available'   => true,
                'category_id' => 2,
            ],
            [
                'created_at'  => fake()->dateTimeBetween('-6 months', '-3 months'),
                'name'        => 'Кофе американо',
                'description' => 'Натуральный молотый кофе средней обжарки',
                'price'       => 90,
                'available'   => true,
                'category_id' => 2,
            ],
        ];
        DB::table('products')->insert($data);
    }
}
