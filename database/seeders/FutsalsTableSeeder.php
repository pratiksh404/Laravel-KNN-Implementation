<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class FutsalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('adminetic:dummy');

        \DB::table('futsals')->delete();

        \DB::table('futsals')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Bhaktapur Futsal',
                'address' => 'Araniko Highway, Sallaghari',
                'phone' => '984-0252869',
                'map' => 'https://www.google.com/maps/place/Bhaktapur+Futsal/@27.6691502,85.4092893,17z/data=!4m5!3m4!1s0x39eb1a9bbc09c757:0xb8ced197e65b16d1!8m2!3d27.669269!4d85.410094',
                'latitude' => 27.669425755529,
                'longitude' => 85.410147606839,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Shooters Futsal',
                'address' => 'Araniko Highway, Sallaghari',
                'phone' => '01-6610744',
                'map' => 'https://www.google.com/maps/place/Shooters+Futsal/@27.6661096,85.4255328,16z/data=!4m5!3m4!1s0x39eb1aa622994845:0x36b146be461d1063!8m2!3d27.6665039!4d85.4266915',
                'latitude' => 27.666793755621,
                'longitude' => 85.426777344917,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Khwopa Futsal Pvt. Ltd',
                'address' => 'Libali-2, Jagati',
                'phone' => '01-5122051',
                'map' => 'https://www.google.com/maps/place/Khwopa+Futsal+Pvt.+Ltd/@27.671214,85.4363884,16z/data=!4m5!3m4!1s0x39eb0553ad627ac7:0x7b4af6d7486a97c9!8m2!3d27.6712092!4d85.4407658',
                'latitude' => 27.671537058931,
                'longitude' => 85.440679934196,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Khwopa Futsal and Training Center',
                'address' => 'Sundarbasti, Jagati',
                'phone' => '01-5177177',
                'map' => 'https://www.google.com/maps/place/Khwopa+Futsal+and+Training+Center/@27.6455476,85.4404018,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb0fe3f8dcdc0d:0x5b7a97b3e26e5a2e!8m2!3d27.6455429!4d85.4425905',
                'latitude' => 27.645761474109,
                'longitude' => 85.442633412843,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'S. Glory Futsal',
                'address' => 'Radhe-Radhe, Thimi',
                'phone' => '984-0252869',
                'map' => 'https://www.google.com/maps/place/S.+Glory+Futsal/@27.6718021,85.3967918,16z/data=!4m5!3m4!1s0x39eb1b6e5c096cb7:0xa00ea77564cc4fb7!8m2!3d27.6717974!4d85.4011692',
                'latitude' => 27.67220117051,
                'longitude' => 85.401297910906,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Imperial Rulz Futsal',
                'address' => 'Kausaltar, Bhaktapur',
                'phone' => '01-6636833',
                'map' => 'https://www.google.com/maps/place/Imperial+Rulz+Futsal/@27.6734545,85.3643328,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1a106a926cb5:0xad06351bbdcfcd78!8m2!3d27.6734498!4d85.3665215',
                'latitude' => 27.673677819837,
                'longitude' => 85.366564412843,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'BG Brothers Health Club Futsal',
                'address' => 'Near Town Planning, Kadhaghari',
                'phone' => '984-3505050',
                'map' => 'https://www.google.com/maps/search/BG+Brothers+Health+Club+Futsal,+Pepsi+planning+-35,+Kathmandu,+Pepsi+Planning/@27.6905628,85.3599173,15z',
                'latitude' => 27.691550802205,
                'longitude' => 85.368972437154,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Easy Futsal Pvt LTD',
                'address' => 'Pepsicola',
                'phone' => '01-4990648',
                'map' => 'https://www.google.com/maps/place/Easy+Futsal+Pvt+LTD/@27.6905628,85.3599173,15z/data=!4m5!3m4!1s0x0:0xb58a3928c0114800!8m2!3d27.6912742!4d85.362011',
                'latitude' => 27.692234798494,
                'longitude' => 85.362277643808,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Baijanti Futsal Town Planning',
                'address' => 'Thimi',
                'phone' => '9801057185',
                'map' => 'https://www.google.com/maps/place/Baijanti+Futsal+Town+Planning/@27.6905628,85.3599173,15z/data=!4m5!3m4!1s0x0:0xba22b05103d35497!8m2!3d27.6888183!4d85.369492',
                'latitude' => 27.689840792734,
                'longitude' => 85.369487421257,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Wembley Goals Futsal Arena',
                'address' => 'Lokanthali',
                'phone' => '986-0675627',
                'map' => 'https://www.google.com/maps/place/Wembley+Goals+Futsal+Arena/@27.6757589,85.3570988,16z/data=!4m5!3m4!1s0x39eb1a1b9559b4c5:0x26e3b2a434b5a000!8m2!3d27.6760195!4d85.3614137',
                'latitude' => 27.676442995206,
                'longitude' => 85.361540537893,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Bode Futsal & Training Centre',
                'address' => 'Bodhe, Bhaktapur',
                'phone' => '981-3401628',
                'map' => 'https://www.google.com/maps/place/Bode+Futsal+%26+Training+Centre/@27.6883691,85.3855259,16z/data=!4m5!3m4!1s0x39eb1a5cc01bf38b:0x3601c736a5cd9398!8m2!3d27.6885734!4d85.3872211',
                'latitude' => 27.688996115034,
                'longitude' => 85.38728542902,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Healthy Futsal',
                'address' => 'Itabu, Suryabinayak',
                'phone' => '986-1613399',
                'map' => 'https://www.google.com/maps/place/Healthy+Futsal+Pvt.ltd./@27.6648076,85.421381,15z/data=!4m5!3m4!1s0x39eb1b97817d614f:0xc91aa469f97cb3dd!8m2!3d27.6636863!4d85.429771',
                'latitude' => 27.664617553748,
                'longitude' => 85.429663660998,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Premier Futsal',
                'address' => 'Tokha',
                'phone' => '01-4365122',
                'map' => 'https://www.google.com/maps/place/Premier+Futsal/@27.7469857,85.3181301,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb192bf38e32f5:0x4e14d4c239dcb2dd!8m2!3d27.7469857!4d85.3203188',
                'latitude' => 27.747223061264,
                'longitude' => 85.320318796789,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Shankhamul Futsal',
                'address' => 'Shankhamul, Baneshwor',
                'phone' => '01-4782088',
                'map' => 'https://www.google.com/maps/place/Shankhamul+Futsal/@27.6826021,85.3301356,17z/data=!4m5!3m4!1s0x39eb19bf862d3f39:0xa9ca471e0a5ad27!8m2!3d27.6826021!4d85.3323243',
                'latitude' => 27.682792114971,
                'longitude' => 85.33232428244,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Buddhanagar Futsal',
                'address' => 'Buddhanagar',
                'phone' => '01-4792002',
                'map' => 'https://www.google.com/maps/place/Buddhanagar+Futsal/@27.6826021,85.3301356,17z/data=!4m12!1m6!3m5!1s0x39eb19bf862d3f39:0xa9ca471e0a5ad27!2sShankhamul+Futsal!8m2!3d27.6826021!4d85.3323243!3m4!1s0x0:0xf917acef432ae517!8m2!3d27.684365!4d85.3320198',
                'latitude' => 27.684587740121,
                'longitude' => 85.332013146211,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Goalz Futsal',
                'address' => 'Kathmandu Fun Park, Bhrikuti',
                'phone' => '9803641222',
                'map' => 'https://www.google.com/maps/place/Kathmandu+Funpark/@27.701377,85.3203981,15z/data=!4m5!3m4!1s0x0:0x3eb124f4579db875!8m2!3d27.7013919!4d85.3202898',
                'latitude' => 27.702250915818,
                'longitude' => 85.3203981,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Royal Futsal',
                'address' => 'Thapa Gaun, Anamnagar',
                'phone' => '01-5244436',
                'map' => 'https://www.google.com/maps/place/Royal+Futsal/@27.6929477,85.3278506,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19bcb9515531:0xc0739c4ac010c73f!8m2!3d27.6929477!4d85.3300393',
                'latitude' => 27.693156679444,
                'longitude' => 85.330017839831,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Samakhushi Futsal',
                'address' => 'Samakhusi',
                'phone' => '01-4363834',
                'map' => 'https://www.google.com/maps/place/Samakhushi+Futsal/@27.7346991,85.3183795,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1924762ad4af:0xe831551cda1f7252!8m2!3d27.7346944!4d85.3205682',
                'latitude' => 27.734814895846,
                'longitude' => 85.320517184009,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Badminton Hall G4 Futsal',
                'address' => 'Tarkeroshwor, Manamaiju',
                'phone' => '980-3259660',
                'map' => 'https://www.google.com/maps/place/Badminton+Hall+G4+Futsal/@27.7415217,85.3108086,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb18d7ea716a39:0x18bb6180ed2bc5a4!8m2!3d27.7415217!4d85.3129973',
                'latitude' => 27.741749577568,
                'longitude' => 85.313040212845,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Manang Marshyangdi Futsal',
                'address' => 'Samakhusi',
                'phone' => '01-6200126',
                'map' => 'https://www.google.com/maps/place/Manang+Marshyangdi+Futsal/@27.7330432,85.3128883,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1920c1d536a1:0x90b946acf428d4f6!8m2!3d27.7329223!4d85.3150652',
                'latitude' => 27.733138146391,
                'longitude' => 85.315098455174,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Dhuku Futsal Hub Pvt Ltd. Swimming pool',
                'address' => 'Sital Marg, Maharajgunj',
                'phone' => '01-4435832',
                'map' => 'https://www.google.com/maps/place/Dhuku+Futsal/@27.7313926,85.3327841,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb194064836059:0x8bcb772d8306a3d0!8m2!3d27.7313926!4d85.3349728',
                'latitude' => 27.731611002269,
                'longitude' => 85.334951339832,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'White Horse Futsal',
                'address' => 'Dhumbarahi',
                'phone' => '01-4015067',
                'map' => 'https://www.google.com/maps/place/White+Horse+Futsal/@27.7329848,85.3472307,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb195e9237b699:0x52f1348d663d6c37!8m2!3d27.7329848!4d85.3494194',
                'latitude' => 27.733212695428,
                'longitude' => 85.349408668667,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Surya Futsal',
                'address' => 'Dhumbarahi',
                'phone' => '01-4371660',
                'map' => 'https://www.google.com/maps/place/Surya+Futsal/@27.7314603,85.3431953,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x8b83de78f5281227!8m2!3d27.7314603!4d85.345384',
                'latitude' => 27.73164071619,
                'longitude' => 85.345426912845,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Dhanwantari Futsal',
                'address' => 'Dhanawantari Marg, Chabahil',
                'phone' => '01-4009635',
                'map' => 'https://www.google.com/maps/place/Dhanwantari+Futsal/@27.7199666,85.3386647,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb196e42c2727b:0xd4f58abde7a271c2!8m2!3d27.7201139!4d85.3409431',
                'latitude' => 27.720298994932,
                'longitude' => 85.340949957022,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Maitidevi futsal',
                'address' => 'Maitidevi',
                'phone' => '980-3129270',
                'map' => 'https://www.google.com/maps/place/Maitidevi+futsal/@27.703436,85.3346633,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb199facab96cb:0x9c60832de9276b2d!8m2!3d27.703436!4d85.336852',
                'latitude' => 27.703635460431,
                'longitude' => 85.33680908216,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Bhotebahal Futsal',
                'address' => 'Tripureshwor',
                'phone' => '982-3325282',
                'map' => 'https://www.google.com/maps/place/Bhotebahal+Futsal/@27.6962796,85.3084392,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb18525337ca7b:0xce6896a0b9d052b6!8m2!3d27.6962796!4d85.3106279',
                'latitude' => 27.696488573064,
                'longitude' => 85.310681541679,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Hardik Futsal Club 2',
                'address' => 'Koteshwor',
                'phone' => '986-2580880',
                'map' => 'https://www.google.com/maps/place/Hardik+Futsal+Club+2/@27.678342,85.3335803,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19ea41015c8b:0x838f468aa093bce4!8m2!3d27.678342!4d85.335769',
                'latitude' => 27.678513002963,
                'longitude' => 85.335736810995,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Shantinagar Futsal',
                'address' => 'Tinkune, Kathmandu',
                'phone' => '9851188182',
                'map' => 'https://www.google.com/maps/place/Shantinagar+Futsal/@27.6919685,85.3456122,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb198f03394b37:0xcd7712094f490bf2!8m2!3d27.6919685!4d85.3478009',
                'latitude' => 27.692148981545,
                'longitude' => 85.347800897502,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'X-cel Futsal',
                'address' => 'Baluwatar',
                'phone' => '01-4440857',
                'map' => 'https://www.google.com/maps/place/X-cel+Futsal/@27.7233797,85.3325496,15z/data=!4m5!3m4!1s0x0:0x96502974af57596a!8m2!3d27.7233797!4d85.3325496',
                'latitude' => 27.724291428063,
                'longitude' => 85.332592515342,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Kirtipur Futsal',
                'address' => 'Kirtipur,Nagaun',
                'phone' => '9818149835',
                'map' => 'https://www.google.com/maps/place/Kirtipur+Futsal/@27.6715435,85.2702489,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1809d36f3e7f:0x26f08d5252043ab!8m2!3d27.6715435!4d85.2724376',
                'latitude' => 27.671743018716,
                'longitude' => 85.272394682159,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Rave Futsal Center',
                'address' => 'Ekatabasti, Sukedhara',
                'phone' => '01-4374343',
                'map' => 'https://www.google.com/maps/place/Rave+Futsal+Center/@27.735436,85.349528,15z/data=!4m5!3m4!1s0x0:0xfac93f6338d4d094!8m2!3d27.735436!4d85.349528',
                'latitude' => 27.736271658576,
                'longitude' => 85.349528,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Green Wish Futsal Center',
                'address' => 'Budhanilkantha',
                'phone' => '01-4822420',
                'map' => 'https://www.google.com/maps/place/Green+Wish+Fitness+Club+%26+Futsal+Center/@27.7352081,85.3500859,15z/data=!4m12!1m6!3m5!1s0x0:0xfac93f6338d4d094!2sRave+Futsal+Center!8m2!3d27.735436!4d85.349528!3m4!1s0x0:0x935c5f134768fb82!8m2!3d27.7382206!4d85.3583739',
                'latitude' => 27.73904447975,
                'longitude' => 85.358668967867,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Highway Futsal',
                'address' => 'Jorpati-3, Newbasti',
                'phone' => '9808675143',
                'map' => 'https://www.google.com/maps/place/Highway+Futsal/@27.7117492,85.3668165,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1bcdcbc593c9:0x8594b1a7f98ff1f4!8m2!3d27.7117492!4d85.3690052',
                'latitude' => 27.712005634428,
                'longitude' => 85.369015926338,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Harisiddhi Futsal',
                'address' => 'Harisiddhi',
                'phone' => '01-5251068',
                'map' => 'https://www.google.com/maps/place/Harisiddhi+Futsal/@27.6393515,85.3364782,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb174124556673:0x8b4e7726a408afe6!8m2!3d27.6393858!4d85.3386695',
                'latitude' => 27.639589095477,
                'longitude' => 85.338741999349,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Futsal Village',
                'address' => 'Satdobato',
                'phone' => '9808390866',
                'map' => 'https://www.google.com/maps/place/Futsal+Village/@27.6442904,85.3166461,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb17772cb20041:0xf99b62d469bc4728!8m2!3d27.6442437!4d85.3189174',
                'latitude' => 27.644499472544,
                'longitude' => 85.31893135702,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Champions Futsal',
                'address' => 'Imadol',
                'phone' => '01-5203998',
                'map' => 'https://www.google.com/maps/place/Champions+Futsal/@27.6550627,85.3347229,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb175ef5f22b57:0x27eded62c0f8667d!8m2!3d27.6551001!4d85.3369508',
                'latitude' => 27.655309764472,
                'longitude' => 85.336965241678,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'The best futsal pvt. Ltd.',
                'address' => 'Mahalaxmisthan',
                'phone' => '981-8195806',
                'map' => 'https://www.google.com/maps/place/The+best+futsal+pvt.+Ltd./@27.6612939,85.3172704,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19d66328729b:0xa9486f299f2f8473!8m2!3d27.6612939!4d85.3194591',
                'latitude' => 27.661502940027,
                'longitude' => 85.31943763983,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Mahalaxmisthan Futsal',
                'address' => 'Mahalaxmisthan',
                'phone' => '01-2298542',
                'map' => 'https://www.google.com/maps/place/Mahalaxmisthan+Futsal/@27.6614125,85.3169543,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19d67de68ce7:0xf14f89a5c4c3c6b2!8m2!3d27.6614125!4d85.319143',
                'latitude' => 27.661574026883,
                'longitude' => 85.319153726336,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            38 =>
            array(
                'id' => 39,
                'name' => '5A side indoor futsal',
                'address' => 'Sanepa',
                'phone' => '01-5535453',
                'map' => 'https://www.google.com/maps/place/5A+side+indoor+futsal,+Tribeni+Marga,+Lalitpur+44600/@27.6897484,85.3017825,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb184f707d7bd5:0x487d65130a742da0!8m2!3d27.6897348!4d85.3039678',
                'latitude' => 27.689966935687,
                'longitude' => 85.304014062844,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Field Futsal',
                'address' => 'Sanepa',
                'phone' => '01-5528361',
                'map' => 'https://www.google.com/maps/place/Field+Futsal/@27.6859935,85.3000912,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1846142dce83:0xd9fc72f388ee688b!8m2!3d27.6860094!4d85.3022804',
                'latitude' => 27.686202492759,
                'longitude' => 85.302258439831,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Prismatic Futsal & Recreation Center',
                'address' => 'Sanepa',
                'phone' => '01-5521587',
                'map' => 'https://www.google.com/maps/place/Prismatic+Futsal+%26+Recreation+Center/@27.6813167,85.3044445,16z/data=!4m5!3m4!1s0x39eb1836293c19a9:0x25f1733fa58e5fa1!8m2!3d27.6809509!4d85.306601',
                'latitude' => 27.681354703468,
                'longitude' => 85.306590267098,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Kathmandu Futsal',
                'address' => 'Ekantakuna',
                'phone' => '980-2115981',
                'map' => 'https://www.google.com/maps/place/Kathmandu+Futsal/@27.6704283,85.3017181,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb1836f2af7779:0x4f329fb3e511ccfa!8m2!3d27.6704283!4d85.3039068',
                'latitude' => 27.670675329734,
                'longitude' => 85.303971170514,
                'created_at' => '2022-03-27 13:52:31',
                'updated_at' => '2022-03-27 13:52:31',
            ),
        ));
    }
}
