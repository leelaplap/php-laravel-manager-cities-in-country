<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new \App\City();
        $city->city_name = "Hà Nội";
        $city->city_desc = "Hanoi is located in the center of the Red River Delta. It is one of the major economic, cultural and political centers of Vietnam. 
                            When you come here, you will be surprised by the youthful and dynamic pace. The infrastructure is very morden and magnificent . 
                            Along the avenues, there are many buildings, shopping malls, administrative offices. 
                            Hanoi is also home to many prestigious and well-known universities in the country such as Foreign Trade university, Hanoi university of science and technology, National Economics university, etc. 
                            During the day, roads are full with vehicles and traffic congestion, especially is at rush hours, when students go to school and adults go to work. 
                            However, at night, Hanoi is more bustling than ever. All the way, the roof are in brightly colorful light, restaurants are on display. 
                            At this time, almost everyone has returned home from work, gathering at the edge of the family. 
                            After that, they together go shopping, to entertaiment centers and parks to relax after a hard-working day. 
                            With me, Hanoi is a great place to live and work. At night wandering in the streets of Hanoi, the smell of milk flowers along the roads makes the soul become strangely peaceful. 
                            In the near future, I will build up my own beautiful house there.";
        $city->city_image = "image/hanoi.jpg";
        $city->country_id = 1;
        $city->save();

        $city = new \App\City();
        $city->city_name = "London";
        $city->city_desc = "London is especially famous for its graveyards, parks and monuments. 
                            Highgate Cemetery is currently the repository for the remains of Karl Marx, Sir Ralph Richardson and Alexander Litvinenko. 
                            The Litvinenko plot is readily recognisable at night because, uncannily, a family of glowworms have made it their home. 
                            Hyde Park, which is contiguous to Kensington Gardens, was the site of the Great Exhibition of 1851 (where a Crystal Palace was erected to depict the brittleness of the monarchy).
                            As if to reinforce Donne's message that \"sceptre and crown must tumble down and in the dust be equal made with the poor crooked scythe and spade\",
                            Hyde Park currently houses the Princess Diana Memorial, a living echo of the most vulnerable woman since Mariah Carey. 
                            In March 2009, the former Blue Peter presenter, Konnie Huq, is due to ignite the \"Eternal Flame\" (currently under construction in the Diana garden) as a tribute to the late Princess. 
                            There have already been pledges from Tibetan activist groups that they will not disrupt the ceremony. 
                            The late Jim Morrison is to travel over from Pere Lachaise cemetery to join Konnie to sing \"Come on Baby, Light my Fire\".";
        $city->city_image = "image/london.jpg";
        $city->country_id = 2;
        $city->save();

        $city = new \App\City();
        $city->city_name = "Ottawa";
        $city->city_desc = "Ottawa is Canada’s capital, in the east of southern Ontario, 
                            near the city of Montréal and the U.S. border. 
                            Sitting on the Ottawa River, it has at its centre Parliament Hill, 
                            with grand Victorian architecture and museums such as the National Gallery of Canada, 
                            with noted collections of indigenous and other Canadian art. 
                            The park-lined Rideau Canal is filled with boats in summer and ice-skaters in winter.";
        $city->city_image = "image/ottawa.jpg";
        $city->country_id = 3;
        $city->save();

    }
}
