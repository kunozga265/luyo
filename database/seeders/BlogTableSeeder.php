<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title'             =>  "Statement From The Managing Director's",
            'slug'              =>  Str::slug("Statement From The Managing Director's")."-".date("Y-m-d"),
            'cover_photo'       =>  'images/blogs/logo.png',
            'body'              =>  "
            <p>Since its incorporation as a partnership in 2013 with my partner Atupele Lusinje, LUYO has been involved in many Civil, architectural, Building and electrical works in Malawi.</p>
            <p> In the past, the Company has been focused on developing its core competency in building and civil engineering works.</p>
            <p> Today, we are one of the leading companies in Civil Engineering and building construction works. We are well armed with a competent workforce, machinery and materials to deliver to our clients any kind of work in the best workmanship, speed and cost possible with the implementation of our selfdeveloped, successful formula in project management, together with our strong bond with our customers.</p>
            <p> In recent years, our Company has been diversifying its focus into nurturing its manpower and diverting its resources into specialising into all most all kinds of building and Civil Engineering works. These services can range from the basic underground building works such as construction of houses, office buildings, Classroom blocks, churches to civil engineering works such as, excavation works, pipe and cable laying works, road works, plumbing works and drainage works.</p>
            <p> As of date, I am proud to say that with our permanent team of 20 site and office personnel, and about at times 100 general workers and skilled personnel depending on a project, we are well equipped to handle any large scale project that is required of us, Industrial, Commercial or otherwise. Saying that, I hope that LUYO would be your contractor of choice for any sort of building or civil engineering work that you would require, as we would try our umpteem best to not only meet, but thoroughly supercede any standard that is asked of us.</p>
            <p> If there is any quality building that needs to be constructed, you can always count on LUYO to build it.</p>
            <p> Yours Sincerely, </p>
            <br>
            <p> Francis Yotamu</p>
            <p> Managing Director </p>
            "
        ]);

        Blog::create([
            'title'             =>  "Philosophy and Approach",
            'slug'              =>  Str::slug("Philosophy and Approach")."-".date("Y-m-d"),
            'cover_photo'       =>  'images/blogs/philosophy.jpg',
            'body'              =>  "
            <h4>Philosophy and Approach</h4>
            <p>LUYO Contractors is well placed to assist in resolving problems in the developing world. Through application of modern construction techniques and technologies, LUYO Contractors believes that an integrated technical and socioeconomic development can be achieved and sustained. Such developments include a wide range of engineering and technical activities related to achievement of effective national economic growth with acceptable philosophical and cultural dimensions. LUYO is backed by personnel with far-reaching practical development training and experience in buildings, civil works and electrical works.</p>
            <p>The firm also recognizes that understanding of local cultures, of physical and technical environment, and of subtle issues and problems of development are essential to ensure project success. LUYO understands and respects the different philosophies and socio-economic systems that provide the basis for policy guidance and formulation of good construction principles.</p>
            <p> The firm has members who have in the individual capacity been successful on a number of construction projects by carefully considering cultural and political sensitivity with the ultimate concern of working efficiently to complete projects on time and economically. This ability to perform efficiently sensitively as well as effectively in a competitive market, makes LUYO the obvious choice to provide high quality construction works.</p>
            <p>The basic objective of LUYO is to enhance development efforts among the various sectors of the economy with special attention to civil engineering, environment and planning.</p>
             <h4>Our Approach</h4>
            <p> LUYO recognizes the comprehensive nature of engineering and planning problems and therefore offers its services through a multi-disciplinary team of managers, engineers and specialized personnel with considerable experience in the construction industry. This enables the company to undertake its services for various Clients with such expertise that makes it one of the to be leading companies in Malawi.</p>
            <p>On a particular project, personnel are specially selected to constitute a strong team to address the requirements of the project. The blending of a multi-disciplinary team not only brings a project to fulfilment, but also addresses the problems that might have been discovered at a later date.</p>
            <p>On a particular project, the Company mobilizes the relevant equipment and financial resources to address the requirements of the Project so that the Client’s requirements are realized within the specified time and budget.</p>
            "
        ]);
    }
}
