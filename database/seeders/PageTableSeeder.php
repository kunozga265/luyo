<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            "code"          =>  "home",
            'cover_photo'   =>  "images/cover_photo/home.jpg",
            "title"         =>  "From Concept to Quality Construction",
            "body"          =>  "
            <p>LUYO Contractors is a registered company in Malawi, and provides civil engineering and building construction services to various institutions, organizations and individuals. The company is registered with the Registrar General and the National Construction Industry Council to provide civil engineering, construction and maintenance services. </p>
            <p>LUYO is currently operating in the 100 Million Civil Engineering Category and 200 million for the Building Category. Due to good management as well as the experience of the management and technical team, the firm envisages growing into the unlimited category for both Civil and Building works in the near future. </p>
            ",
            "contents"      =>  json_encode([
                'construction'=>[
                    'caption'   =>  "Construction plant for hire",
                    'title'      =>  "Consists of top of the range equipment and machinery, including heavy and Light weight Machinery",
                    'body'      =>  "We believe in and promote quality delivery"
                ]
            ]),
        ]);

        Page::create([
            "code"          =>  "projects",
            'cover_photo'   =>  "images/cover_photo/projects.jpg",
            "title"         =>  null,
            "body"          =>  null,
            "contents"      =>  json_encode([]),
        ]);

        Page::create([
            "code"          =>  "services",
            'cover_photo'   =>  "images/cover_photo/services.jpg",
            "title"         =>  "What do we do?",
            "body"          =>  "
            <p>LUYO Construction provides services in the following areas;</p>
            ",
            "contents"      =>  json_encode([
                'services'=>[
                    [
                        'image'     =>  "images/services/building.jpg",
                        'title'     =>  "Building Construction Works",
                        'body'      =>  "Such as school blocks, warehouses, houses and office buildings."
                    ],
                    [
                        'image'     =>  "images/services/painting.jpg",
                        'title'     =>  "Painting Infrastructure",
                        'body'      =>  "Such as buildings and steel structures."
                    ],
                    [
                        'image'     =>  "images/services/telecommunications.jpg",
                        'title'     =>  "Telecommunication Cable Laying",
                        'body'      =>  "Trench digging, manhole construction, pipe laying etc."
                    ],
                    [
                        'image'     =>  "images/services/roads.jpg",
                        'title'     =>  "Roads",
                        'body'      =>  "Design, construction, rehabilitation and maintenance."
                    ],
                    [
                        'image'     =>  "images/services/concrete.jpg",
                        'title'     =>  "Concrete Structures",
                        'body'      =>  "Design and construction."
                    ],
                    [
                        'image'     =>  "images/services/steel.jpg",
                        'title'     =>  "Steel Structures",
                        'body'      =>  "Design and construction."
                    ],
                    [
                        'image'     =>  "images/services/water.jpg",
                        'title'     =>  "Water Supply Schemes",
                        'body'      =>  "Design, construction, rehabilitation and maintenance."
                    ],
                    [
                        'image'     =>  "images/services/irrigation.jpg",
                        'title'     =>  "Irrigation Schemes",
                        'body'      =>  "Design, construction, rehabilitation and maintenance."
                    ],
                    [
                        'image'     =>  "images/services/bridge.jpg",
                        'title'     =>  "Bridges",
                        'body'      =>  "Design, construction, rehabilitation and maintenance."
                    ],
                ]
            ]),
        ]);

        Page::create([
            "code"          =>  "construction_plant",
            'cover_photo'   =>  "images/cover_photo/construction.jpg",
            "title"         =>  "Our Capacity",
            "body"          =>  "
            <p>Consists of top of the range equipment and machinery, including heavy and Light weight Machinery. Below is a list of equipment available for hire.</p>
            ",
            "contents"      =>  json_encode([
                'plants'=>[
                    [
                        'image'     =>  "images/construction/tipper.jpeg",
                        'name'      =>  "26 Tonne Tipper",
                        'price'     =>  "K150,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/lorry.jpg",
                        'name'      =>  "2 Tonne Lorry",
                        'price'     =>  "K50,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/backhoe.jpg",
                        'name'      =>  "Backhoe Loader",
                        'price'     =>  "K200,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/genset.jpg",
                        'name'      =>  "7.5kV Genset",
                        'price'     =>  "K25,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/vibrator.jpg",
                        'name'      =>  "Poker Vibrator",
                        'price'     =>  "K25,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/compactor.jpg",
                        'name'      =>  "Plate Compactor",
                        'price'     =>  "K45,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/mixer.jpg",
                        'name'      =>  "Concrete Mixers",
                        'price'     =>  "K25,000/day"
                    ],
                    [
                        'image'     =>  "images/construction/other.jpg",
                        'name'      =>  "Welding Machines, Grinders and Drilling Machines",
                        'price'     =>  ""
                    ],
                ]
            ]),
        ]);

        Page::create([
            "code"          =>  "blog",
            'cover_photo'   =>  "images/cover_photo/blog.jpg",
            "title"         =>  null,
            "body"          =>  null,
            "contents"      =>  json_encode([]),
        ]);

        Page::create([
            "code"          =>  "about_us",
            'cover_photo'   =>  "images/cover_photo/about.jpg",
            "title"         =>  "We build your dreams!",
            "body"          =>  "
            <p>We are a government registered and recognized organization. We offer quality and Excellent service to the public and private sectors. From concept to reality, sharing your vision, and addressing your key objectives.</p>
            ",
            "contents"      =>  json_encode([
                'info'      =>  [
                    'mission'   =>  'Provide superior civil engineering and building construction services by providing quality, on time and on budget construction and technical services to our customers. We will strive to implement a long term relationship with our clients, based on safety, quality, timely service and an anticipation of their needs. To help fulfil this mission, we will involve all our employees in the quality improvement process to insure responsiveness and cost',
                    'vision'    =>  'To become a preeminent Engineering Company in the Construction industry in Malawi and be recognized as a top Professional and quality Service Provider in Engineering.',
                    'values'    =>  [
                        'Reliable',
                        'Quality',
                        'Efficiency',
                        'Honest and trustworthiness',
                        'Availability',
                        'Empowerment',
                    ]
                ],
                'partners'  =>  [
                    [
                        'image'     =>  "images/partners/atupele.jpg",
                        'name'      =>  'Atupele Lusinje',
                        'body'      =>  '
                        <p>
                            Atupele is a hardworking and driven Electrical Engineer with over 5 years’ experience in Solar Power is a hardworking and driven
                            Technology, SCADA, Electrical System
                            Protection, Switchgear, Transmission and
                            Distribution Lines, Electrical Installations and
                            Maintenance.
                        </p>
                        <p>
                            He started his career as a
                            student Electrical Engineer with Arkay
                            Plastics Limited and Toleza Farm. After
                            completing his Bachelor’s Degree in
                            Electrical Engineering, he joined SunPower
                            Solar Technologies Limited and then
                            Siemens Mobility on the Nacala Railway
                            Signalling Project.
                        </p>
                        <p>
                            He is a Senior Authorised
                            Person with ESCOM Limited, authorised to
                            carry out operation of Low, Medium and High
                            Voltage Apparatus.
                        </p>
                        ',
                    ],
                    [
                        'image'     =>  "images/partners/francis.jpg",
                        'name'      =>  'Francis Yotamu',
                        'body'      =>  '
                        <p>
                                        Francis who possess a comprehensive understanding of the technical is a highly capable individual
                                        elements of civil engineering. My passion has
                                        always been to become a civil engineer as
                                        this makes me a professional who has the
                                        opportunity to work on projects that not only
                                        change our physical surroundings but also at
                                        the same time improve the lives of literally
                                        millions of people through various good
                                        infrastructure built by civil engineers.
                                    </p>
                                    <p>
                                        He is a holder of Bachelor of science in civil
                                        Engineering from University of Malawi and
                                        currently pursuing towards Master of science
                                        infrastructure development management.
                                        Professionally he is a Prince 2 practitioner in
                                        Project management.
                                    </p>
                                    <p>
                                        Currently he is a Civil Engineer for the Malawi
                                        Housing Cooperation.
                                    </p>
                        ',
                    ],

                ]
            ]),
        ]);
    }
}
