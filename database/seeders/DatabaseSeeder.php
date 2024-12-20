<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motive;
use App\Models\Type;
use App\Models\SymbolType;
use App\Models\NationType;
use App\Models\MotiveNation;
use App\Models\MotiveInterlacing;
use App\Models\MotiveSymbol;
use App\Models\MotiveType;
use App\Models\InterlacingType;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1=User::create(array(
            'name'=>'Polina',
            'email'=>'brr0blyazzzzz@gmail.com',
            'password'=>Hash::make('1234'),
            'status'=>'admin'
        ));
        $user2=User::create(array(
            'name'=>'Anna',
            'email'=>'anna@gmail.com',
            'password'=>Hash::make('12345678'),
            'status'=>'user'
        ));
      $motive1 =Motive::create(array(
            'motive_title'=>'Облаковидный',
            'motive_source'=>'Бурятский народный орнамент. Сост. Балдаев Ф.И. – Улан-Удэ, 1972.',
            'motive_date'=>'Не определена',
            'motive_notes'=>'Облака ассоциируются также с небесными водами и плодородием.',
            'motive_img'=>'cloud.jpeg',
            'creator_id'=>'1'
       ));
       $motive2 =Motive::create(array(
        'motive_title'=>'Tрискеле',
        'motive_source'=>'Бурятский народный орнамент. Сост. Балдаев Ф.И. – Улан-Удэ, 1972.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'Арбагар переводится с бурятского как "растопыренный, лохматый". Арбагай эбэр – "ветвистые рога", «рога оленя», солнечного животного. "Трискеле" в переводе с греческого - «треножник».',
        'motive_img'=>'triskele.jpeg',
        'creator_id'=>'1'
   ));
    $motive3 =Motive::create(array(
        'motive_title'=>' Г-образный',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'G.jpeg',
        'creator_id'=>'1'
    ));
    $motive4 =Motive::create(array(
        'motive_title'=>'T-образный',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>' II тыс. до н.э.',
        'motive_notes'=>'Самый распространенный вид монгольского геометрического орнамента. В монгольских легендах прообразом Т-образного узора считаются веревки для привязи жеребят и телят и молоточки - орудия труда, "Алхан хээ" буквально означает "орнамент - молоточек".',
        'motive_img'=>'T.jpeg',
        'creator_id'=>'1'
    ));
    $motive5 =Motive::create(array(
        'motive_title'=>'Pомб',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'Ромб – земное начало, женственность, плодовитость, плодородие.Может быть образован соединением рядом стоящих Х-образных крестов. "Дурбэлжэн" по-бурятски означает четырехугольник, этим словом обозначают как ромб, так и квадрат.',
        'motive_img'=>'rhomb.jpeg',
        'creator_id'=>'1'
    ));
    $motive5 =Motive::create(array(
        'motive_title'=>'Монетовидный',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'coiny.jpeg',
        'creator_id'=>'1'
    ));
    $motive6 =Motive::create(array(
        'motive_title'=>'Спираль',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'spiral.jpeg',
        'creator_id'=>'1'
    ));
    $motive7 =Motive::create(array(
        'motive_title'=>'Спираль',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'spiral.jpeg',
        'creator_id'=>'1'
    ));
    $motive8 =Motive::create(array(
        'motive_title'=>'Pоговидный',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'hornlike.jpeg',
        'creator_id'=>'1'
    ));
    $motive9 =Motive::create(array(
        'motive_title'=>'Рога барана',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'ramhorns.jpeg',
        'creator_id'=>'1'
    ));
    $motive10 =Motive::create(array(
        'motive_title'=>'Волна',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'wave.jpeg',
        'creator_id'=>'1'
    ));
    $motive11 =Motive::create(array(
        'motive_title'=>'Сердечко',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>' Возможно, подобные завитки относятся к зооморфным или растительным узорам.',
        'motive_img'=>'heart.jpeg',
        'creator_id'=>'1'
    ));
    $motive12 =Motive::create(array(
        'motive_title'=>'Квадрат',
        'motive_source'=>'Хороших П.П. Орнамент северных бурят. - Вып. 2. Узоры на шитых работах. - Иркутск, 1927.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'"Дурбэлжэн" по-бурятски означает четырехугольник, этим словом обозначают как ромб, так и квадрат.',
        'motive_img'=>'square.jpeg',
        'creator_id'=>'1'
    ));
    $motive13 =Motive::create(array(
        'motive_title'=>'S-образный завиток',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'s-shaped.jpeg',
        'creator_id'=>'1'
    ));
    $motive14 =Motive::create(array(
        'motive_title'=>'Завиток',
        'motive_source'=>'Бурятский народный орнамент. Сост. Балдаев Ф.И. – Улан-Удэ, 1972.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'tendril.jpeg',
        'creator_id'=>'1'
    ));
    $motive15 =Motive::create(array(
        'motive_title'=>'Круг',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х',
        'motive_date'=>'Не определена',
        'motive_notes'=>' Круг часто изображали на оружии, талисманах и семейных (родовых) печатях.',
        'motive_img'=>'circle.jpeg',
        'creator_id'=>'1'
    ));
    $motive16 =Motive::create(array(
        'motive_title'=>'Крест',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'В древности его носили на груди египтяне, ассирийцы, этруски, греки, американские индейцы. Существует гипотеза происхождения креста как идеограммы солнца: этот знак восходит к схематическому изображению летящей птицы. В древней мифологии солнце уподобляло',
        'motive_img'=>'cross.jpeg',
        'creator_id'=>'1'
    ));
    $motive17 =Motive::create(array(
        'motive_title'=>'Миндалевидный',
        'motive_source'=>'Бурятский народный орнамент. Сост. Балдаев Ф.И. – Улан-Удэ, 1972.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'Vesica piscis (лат. рыбий пузырь) - фигура, образованная пересечением двух кругов с одинаковым радиусом, наложенных так, что центр одного лежит на окружности другого.',
        'motive_img'=>'almond-shaped.jpeg',
        'creator_id'=>'1'
    ));
    $motive18 =Motive::create(array(
        'motive_title'=>'Царские браслеты',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х',
        'motive_date'=>'Не определена',
        'motive_notes'=>'Царские браслеты - спаренные круги. Круг - мужской знак.',
        'motive_img'=>'kingly-bracelets.jpeg',
        'creator_id'=>'1'
    ));
    $motive19 =Motive::create(array(
        'motive_title'=>'Серьги царицы',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х',
        'motive_date'=>'Не определена',
        'motive_notes'=>'Спаренные ромбы - символ женский.',
        'motive_img'=>'queen-earrings.jpeg',
        'creator_id'=>'1'
    ));
    $motive20 =Motive::create(array(
        'motive_title'=>'Петля',
        'motive_source'=>'',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'turn.jpeg',
        'creator_id'=>'1'
    ));
    $motive21 =Motive::create(array(
        'motive_title'=>'Вечный узел',
        'motive_source'=>'',
        'motive_date'=>'Не определена',
        'motive_notes'=>'В высшей степени благоприятный символ. Поскольку все явления взаимосвязаны, размещение бесконечного узла, например, на подарке, воспринимается как установление благоприятной связи между дарителем и получателем.',
        'motive_img'=>'endless-knot.jpeg',
        'creator_id'=>'1'
    ));
    $motive22 =Motive::create(array(
        'motive_title'=>'Капля',
        'motive_source'=>'',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'drop.jpeg',
        'creator_id'=>'1'
    ));
    $motive23 =Motive::create(array(
        'motive_title'=>'Зигзаг',
        'motive_source'=>'Иванов С.В. Орнамент народов Сибири как исторический источник. - М., 1963.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'Повторение зигзагов друг над другом образуют узор шеврон. Б.Э. Петри рассматривает мотив "зигзаг" как контур мотива "зубцы".',
        'motive_img'=>'zigzag.jpeg',
        'creator_id'=>'1'
    ));
    $motive24 =Motive::create(array(
        'motive_title'=>'Инь-ян',
        'motive_source'=>'Ядамжав Ц. Монгол ардын хээ угалзын эх дурсууд. - Улаанбаатар, 1985. – 96 х.',
        'motive_date'=>'Не определена',
        'motive_notes'=>'',
        'motive_img'=>'yin-yang.jpeg',
        'creator_id'=>'1'
    ));

    $type1 =Type::create(array(
        'type_title'=>'Космологический',
        'creator_id'=>'1'
    ));
    $type2 =Type::create(array(
        'type_title'=>'Геометрический',
        'creator_id'=>'1'
    ));
    $type3 =Type::create(array(
        'type_title'=>'Зооморфный',
        'creator_id'=>'1'
    ));
    $type4 =Type::create(array(
        'type_title'=>'Растительный',
        'creator_id'=>'1'
    ));
    $type5 =Type::create(array(
        'type_title'=>'Культорогический',
        'creator_id'=>'1'
    ));


    $nation1 = NationType::create(array(
        'nation_title'=>'Буряты',
        'creator_id'=>'1'
    ));
    $nation2 = NationType::create(array(
        'nation_title'=>'Монголы',
        'creator_id'=>'1'
    ));
    $nation3 = NationType::create(array(
        'nation_title'=>'Тувинцы',
        'creator_id'=>'1'
    ));

    $symbol1 = SymbolType::create(array(
        'symbol_title'=>'Бытовой',
        'creator_id'=>'1'
    ));
    $symbol2 = SymbolType::create(array(
        'symbol_title'=>'Культурологический',
        'creator_id'=>'1'
    ));
    $interlacing1 = InterlacingType::create(array(
        'interlacing_title'=>'Обособление',
        'creator_id'=>'1'
    ));
    $interlacing2 = InterlacingType::create(array(
        'interlacing_title'=>'Наложение',
        'creator_id'=>'1'
    ));
    
    $MotiveNation1_1 =MotiveNation::create(array(
            'motive_id'=>'1',
            'nation_id'=>'1',
            'creator_id'=>'1'
        ));    
    $MotiveNation1_2 =MotiveNation::create(array(
        'motive_id'=>'1',
        'nation_id'=>'2',
        'creator_id'=>'1'
    ));    
    $MotiveNation2 =MotiveNation::create(array(
            'motive_id'=>'2',
            'nation_id'=>'1',
            'creator_id'=>'1'
        ));
    $MotiveNation3_1 =MotiveNation::create(array(
            'motive_id'=>'3',
            'nation_id'=>'1',
            'creator_id'=>'1'
        ));        
    $MotiveNation3_2 =MotiveNation::create(array(
            'motive_id'=>'3',
            'nation_id'=>'2',
            'creator_id'=>'1'
        ));
    $MotiveNation3_3 =MotiveNation::create(array(
            'motive_id'=>'3',
            'nation_id'=>'3',
            'creator_id'=>'1'
        ));
    $MotiveNation4_1 =MotiveNation::create(array(
            'motive_id'=>'4',
            'nation_id'=>'1',
            'creator_id'=>'1'
        ));        
    $MotiveNation4_2 =MotiveNation::create(array(
            'motive_id'=>'4',
            'nation_id'=>'2',
            'creator_id'=>'1'
        )); 
    $MotiveNation4_3 =MotiveNation::create(array(
            'motive_id'=>'4',
            'nation_id'=>'3',
            'creator_id'=>'1'
        ));       
    $MotiveNation5_1 =MotiveNation::create(array(
            'motive_id'=>'5',
            'nation_id'=>'1',
            'creator_id'=>'1'
        )); 
    $MotiveNation5_2 =MotiveNation::create(array(
        'motive_id'=>'5',
        'nation_id'=>'2',
        'creator_id'=>'1'
    ));           
    $MotiveNation5_3 =MotiveNation::create(array(
        'motive_id'=>'5',
        'nation_id'=>'3',
        'creator_id'=>'1'
    )); 
    $MotiveNation6_1 =MotiveNation::create(array(
        'motive_id'=>'6',
        'nation_id'=>'1',
        'creator_id'=>'1'

    )); 
    $MotiveNation6_2 =MotiveNation::create(array(
        'motive_id'=>'6',
        'nation_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveNation7_1 =MotiveNation::create(array(
        'motive_id'=>'7',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation7_2 =MotiveNation::create(array(
        'motive_id'=>'7',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation7_3 =MotiveNation::create(array(
        'motive_id'=>'7',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation8_1 =MotiveNation::create(array(
        'motive_id'=>'8',
        'nation_id'=>'1',
         'creator_id'=>'1'

    ));
    $MotiveNation8_2 =MotiveNation::create(array(
        'motive_id'=>'8',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation9_1 =MotiveNation::create(array(
        'motive_id'=>'9',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation9_2 =MotiveNation::create(array(
        'motive_id'=>'9',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation10_1 =MotiveNation::create(array(
        'motive_id'=>'10',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation10_2 =MotiveNation::create(array(
        'motive_id'=>'10',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation11_1 =MotiveNation::create(array(
        'motive_id'=>'11',
        'nation_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveNation11_2 =MotiveNation::create(array(
        'motive_id'=>'11',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation12_1 =MotiveNation::create(array(
        'motive_id'=>'12',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation12_2 =MotiveNation::create(array(
        'motive_id'=>'12',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation13_1 =MotiveNation::create(array(
        'motive_id'=>'13',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation13_2 =MotiveNation::create(array(
        'motive_id'=>'13',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation13_3 =MotiveNation::create(array(
        'motive_id'=>'13',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation14_1 =MotiveNation::create(array(
        'motive_id'=>'14',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation14_2 =MotiveNation::create(array(
        'motive_id'=>'14',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation15_1 =MotiveNation::create(array(
        'motive_id'=>'15',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation15_2 =MotiveNation::create(array(
        'motive_id'=>'15',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation16_1 =MotiveNation::create(array(
        'motive_id'=>'16',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation16_2 =MotiveNation::create(array(
        'motive_id'=>'16',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
$MotiveNation16_3 =MotiveNation::create(array(
        'motive_id'=>'16',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation17_1 =MotiveNation::create(array(
        'motive_id'=>'17',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation17_2 =MotiveNation::create(array(
        'motive_id'=>'17',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation18_1 =MotiveNation::create(array(
        'motive_id'=>'18',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation18_2 =MotiveNation::create(array(
        'motive_id'=>'18',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveNation19_1 =MotiveNation::create(array(
        'motive_id'=>'19',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation19_2 =MotiveNation::create(array(
        'motive_id'=>'19',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation19_3 =MotiveNation::create(array(
        'motive_id'=>'19',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation20_1 =MotiveNation::create(array(
        'motive_id'=>'20',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation20_2 =MotiveNation::create(array(
        'motive_id'=>'20',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation20_3 =MotiveNation::create(array(
        'motive_id'=>'20',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation21_1 =MotiveNation::create(array(
        'motive_id'=>'21',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation21_2 =MotiveNation::create(array(
        'motive_id'=>'21',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation21_3 =MotiveNation::create(array(
        'motive_id'=>'21',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation22_1 =MotiveNation::create(array(
        'motive_id'=>'22',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation22_2 =MotiveNation::create(array(
        'motive_id'=>'22',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation22_3 =MotiveNation::create(array(
        'motive_id'=>'22',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation23_1 =MotiveNation::create(array(
        'motive_id'=>'23',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation23_2 =MotiveNation::create(array(
        'motive_id'=>'23',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));           
    $MotiveNation23_3 =MotiveNation::create(array(
        'motive_id'=>'23',
        'nation_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveNation24_1 =MotiveNation::create(array(
        'motive_id'=>'24',
        'nation_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveNation24_2 =MotiveNation::create(array(
        'motive_id'=>'24',
        'nation_id'=>'2',
         'creator_id'=>'1'
    ));

$MotiveType1 =MotiveType::create(array(
        'motive_id'=>'1',
        'type_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveType2_1 =MotiveType::create(array(
        'motive_id'=>'2',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType2_2 =MotiveType::create(array(
        'motive_id'=>'2',
        'type_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveType3 =MotiveType::create(array(
        'motive_id'=>'3',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType4 =MotiveType::create(array(
        'motive_id'=>'4',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType5_1 =MotiveType::create(array(
        'motive_id'=>'5',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType5_2 =MotiveType::create(array(
        'motive_id'=>'5',
        'type_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveType6 =MotiveType::create(array(
        'motive_id'=>'6',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType7_1 =MotiveType::create(array(
        'motive_id'=>'7',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType7_2 =MotiveType::create(array(
        'motive_id'=>'7',
        'type_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveType8 =MotiveType::create(array(
        'motive_id'=>'8',
        'type_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveType9 =MotiveType::create(array(
        'motive_id'=>'9',
        'type_id'=>'3',
         'creator_id'=>'1'
    ));
    $MotiveType10 =MotiveType::create(array(
        'motive_id'=>'10',
        'type_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveType11 =MotiveType::create(array(
        'motive_id'=>'11',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType12 =MotiveType::create(array(
        'motive_id'=>'12',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType13 =MotiveType::create(array(
        'motive_id'=>'13',
        'type_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveType14_1 =MotiveType::create(array(
        'motive_id'=>'14',
        'type_id'=>'4',
        'creator_id'=>'1'
    ));
    $MotiveType14_2 =MotiveType::create(array(
        'motive_id'=>'14',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType14_3 =MotiveType::create(array(
        'motive_id'=>'14',
        'type_id'=>'3',
        'creator_id'=>'1'
    ));
    $MotiveType15_1 =MotiveType::create(array(
        'motive_id'=>'15',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType15_2 =MotiveType::create(array(
        'motive_id'=>'15',
        'type_id'=>'5',
        'creator_id'=>'1'
    ));
    $MotiveType16_1 =MotiveType::create(array(
        'motive_id'=>'16',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType16_2 =MotiveType::create(array(
        'motive_id'=>'16',
        'type_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveType16_3 =MotiveType::create(array(
        'motive_id'=>'16',
        'type_id'=>'5',
        'creator_id'=>'1'
    ));
    $MotiveType17 =MotiveType::create(array(
        'motive_id'=>'17',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType18_1 =MotiveType::create(array(
        'motive_id'=>'18',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType18_2 =MotiveType::create(array(
        'motive_id'=>'18',
        'type_id'=>'5',
        'creator_id'=>'1'
    ));
    $MotiveType19_1 =MotiveType::create(array(
        'motive_id'=>'19',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType19_2 =MotiveType::create(array(
        'motive_id'=>'19',
        'type_id'=>'5',
        'creator_id'=>'1'
    ));
    $MotiveType20 =MotiveType::create(array(
        'motive_id'=>'20',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType21_1 =MotiveType::create(array(
        'motive_id'=>'21',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType21_2 =MotiveType::create(array(
        'motive_id'=>'21',
        'type_id'=>'5',
        'creator_id'=>'1'
    ));
    $MotiveType22_1 =MotiveType::create(array(
        'motive_id'=>'22',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType22_2 =MotiveType::create(array(
        'motive_id'=>'22',
        'type_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveType23 =MotiveType::create(array(
        'motive_id'=>'23',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType24_1 =MotiveType::create(array(
        'motive_id'=>'24',
        'type_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveType24_2 =MotiveType::create(array(
        'motive_id'=>'24',
        'type_id'=>'5',
        'creator_id'=>'1'
    ));

$MotiveSymbol1_1 =MotiveSymbol::create(array(
        'motive_id'=>'1',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol1_2 =MotiveSymbol::create(array(
        'motive_id'=>'1',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveSymbol2 =MotiveSymbol::create(array(
        'motive_id'=>'2',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol3 =MotiveSymbol::create(array(
        'motive_id'=>'3',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol4 =MotiveSymbol::create(array(
        'motive_id'=>'4',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol5 =MotiveSymbol::create(array(
        'motive_id'=>'5',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol6 =MotiveSymbol::create(array(
        'motive_id'=>'6',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol7 =MotiveSymbol::create(array(
        'motive_id'=>'7',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol8 =MotiveSymbol::create(array(
        'motive_id'=>'8',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol9 =MotiveSymbol::create(array(
        'motive_id'=>'9',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol10 =MotiveSymbol::create(array(
        'motive_id'=>'10',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol11 =MotiveSymbol::create(array(
        'motive_id'=>'11',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol12 =MotiveSymbol::create(array(
        'motive_id'=>'12',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol13 =MotiveSymbol::create(array(
        'motive_id'=>'13',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol14 =MotiveSymbol::create(array(
        'motive_id'=>'14',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol15_1 =MotiveSymbol::create(array(
        'motive_id'=>'15',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol15_2 =MotiveSymbol::create(array(
        'motive_id'=>'15',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveSymbol16_1 =MotiveSymbol::create(array(
        'motive_id'=>'16',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol16_2 =MotiveSymbol::create(array(
        'motive_id'=>'16',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveSymbol17_1 =MotiveSymbol::create(array(
        'motive_id'=>'17',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol17_2 =MotiveSymbol::create(array(
        'motive_id'=>'17',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveSymbol18_1 =MotiveSymbol::create(array(
        'motive_id'=>'18',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol18_2 =MotiveSymbol::create(array(
        'motive_id'=>'18',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveSymbol19_1 =MotiveSymbol::create(array(
        'motive_id'=>'19',
        'symbol_id'=>'1',
        'creator_id'=>'1'
    ));
    $MotiveSymbol19_2 =MotiveSymbol::create(array(
        'motive_id'=>'19',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));
    $MotiveSymbol20 =MotiveSymbol::create(array(
        'motive_id'=>'20',
        'symbol_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveSymbol21_1 =MotiveSymbol::create(array(
        'motive_id'=>'21',
        'symbol_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveSymbol21_2 =MotiveSymbol::create(array(
        'motive_id'=>'21',
        'symbol_id'=>'2',
         'creator_id'=>'1'
    ));
    $MotiveSymbol22 =MotiveSymbol::create(array(
        'motive_id'=>'22',
        'symbol_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveSymbol23 =MotiveSymbol::create(array(
        'motive_id'=>'23',
        'symbol_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveSymbol24_1 =MotiveSymbol::create(array(
        'motive_id'=>'24',
        'symbol_id'=>'1',
         'creator_id'=>'1'
    ));
    $MotiveSymbol24_2 =MotiveSymbol::create(array(
        'motive_id'=>'24',
        'symbol_id'=>'2',
        'creator_id'=>'1'
    ));

$motive_instance1 =MotiveInterlacing::create(array(
        'motive_id'=>'1',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance2 =MotiveInterlacing::create(array(
        'motive_id'=>'2',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance3 =MotiveInterlacing::create(array(
        'motive_id'=>'3',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance4 =MotiveInterlacing::create(array(
        'motive_id'=>'4',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance5 =MotiveInterlacing::create(array(
        'motive_id'=>'5',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance6 =MotiveInterlacing::create(array(
        'motive_id'=>'6',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance7 =MotiveInterlacing::create(array(
        'motive_id'=>'7',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance8 =MotiveInterlacing::create(array(
        'motive_id'=>'8',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance9 =MotiveInterlacing::create(array(
        'motive_id'=>'9',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance10 =MotiveInterlacing::create(array(
        'motive_id'=>'10',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance11 =MotiveInterlacing::create(array(
        'motive_id'=>'11',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance12 =MotiveInterlacing::create(array(
        'motive_id'=>'12',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance13 =MotiveInterlacing::create(array(
        'motive_id'=>'13',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance14_1 =MotiveInterlacing::create(array(
        'motive_id'=>'14',
        'interlacing_id'=>'2',
        'creator_id'=>'1'

    ));
    $motive_instance14_2 =MotiveInterlacing::create(array(
        'motive_id'=>'14',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance15 =MotiveInterlacing::create(array(
        'motive_id'=>'15',
        'interlacing_id'=>'1',
        'creator_id'=>'1'

    ));
    $motive_instance16_1 =MotiveInterlacing::create(array(
        'motive_id'=>'16',
        'interlacing_id'=>'2',
        'creator_id'=>'1'
    ));
    $motive_instance16_2 =MotiveInterlacing::create(array(
        'motive_id'=>'16',
        'interlacing_id'=>'1',
        'creator_id'=>'1'
    ));
    $motive_instance17 =MotiveInterlacing::create(array(
        'motive_id'=>'17',
        'interlacing_id'=>'1',
        'creator_id'=>'1'
    ));
    $motive_instance18 =MotiveInterlacing::create(array(
        'motive_id'=>'18',
        'interlacing_id'=>'2',
        'creator_id'=>'1'
    ));
    $motive_instance19 =MotiveInterlacing::create(array(
        'motive_id'=>'19',
        'interlacing_id'=>'2',
        'creator_id'=>'1'
    ));
    $motive_instance20 =MotiveInterlacing::create(array(
        'motive_id'=>'20',
        'interlacing_id'=>'1',
        'creator_id'=>'1'
    ));
    $motive_instance21 =MotiveInterlacing::create(array(
        'motive_id'=>'21',
        'interlacing_id'=>'2',
        'creator_id'=>'1'
    ));
    $motive_instance22 =MotiveInterlacing::create(array(
        'motive_id'=>'22',
        'interlacing_id'=>'1',
        'creator_id'=>'1'
    ));
    $motive_instance23 =MotiveInterlacing::create(array(
        'motive_id'=>'23',
        'interlacing_id'=>'1',
        'creator_id'=>'1'
    ));
    $motive_instance24 =MotiveInterlacing::create(array(
        'motive_id'=>'24',
        'interlacing_id'=>'1',
        'creator_id'=>'1'
    ));
    }
}
