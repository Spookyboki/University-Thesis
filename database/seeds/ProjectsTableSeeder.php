<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'slug' => ' dr-norman-borlaug',
            'title' => 'DR. Norman Borlaug - The man who saved a billion lives',
            'content' => 'This project served as a practise for basics when I started studying and working with HTML . </br></br>
            This is one of my first projects . It is not my original web site as I copied it from the web site https://learn.freecodecamp.org . </br></br>
            This site was one of many sites for practicing and learning about basic programming . It is free and anyone can start . </br></br>
            I used HTML and CSS for this project .',
            'url' => 'https://github.com/Spookyboki/Dr.-Norman-Borlaug-Project',
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'slug' => 'survey-form',
            'title' => 'Survey Form',
            'content' => 'As some other projects that you will see here , this was also one of my first projects that I worked on . </br></br>
            I used it only for practise and it is not my original work . U can check out the instructions and requirements for this web site .</br></br>
            The site I used was https://learn.freecodecamp.org . </br></br>
            On this site I learned a lot of usefull tips for making formes wich many people have difficulties with . I used HTML and CSS and a little bit of JavaScript . ',
            'url' => 'https://github.com/Spookyboki/Survey-From-Project',
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'slug' => 'technical-documentation',
            'title' => 'Technical Documentation',
            'content' => 'This web page is a presentation of basic JavaScript language . It has many information about this language , such as variables , constants , data types , etc . 
            This was the first project where I used not only HTML and CSS , but I also experimented with Sass . </br></br>
            This project was an eye opener . After working with Sass , I found out about how useful and what an upgrade Sass is . Since than , I have been working with Sass on all of my projets . 
            This page consists mainly of text and lists . I used the simplicity of the page to focus on positioning .</br></br>
            Even if it looks easy , it was very difficult for me as a beginner , and I think I learned a lot from it . ',
            'url' => 'https://github.com/Spookyboki/TechnicalDocumentationPageProject',
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'slug' => 'dark-web',
            'title' => 'Dark Web as a Cyber medium for organizing criminal activities',
            'content' => 'What is Dark Web ? If you actively use internet , chances are , you have probably heard about "Deep Web" and "Dark Web" . This fun "Word" document is not a programming project . This is a research paper on hidden things on internet that everyone is afraid of .</br></br>
            I used this project to explore the forbiden side of internet . I tried not to dig to deep , but , even after searching for a little bit , I was surprised how much information about this matter exists . There are many texts on internet , many videos showing exactly what Deep or Dark Web is .</br></br>
            You will be able to read about this on my paper .
            My research work is on Serbian Language , as I did it for a project for one of my subjects at my university . If you have any questions , please contact me , and we can discuss as much as we want . </br></br>
            For this paper I only used "Word" . You will be able to see the references on the last page of the project . ' ,
            'url' => 'https://github.com/Spookyboki/Dark-Web-as-a-Cyber-medium-for-organizing-criminal-activities',
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'slug' => 'distributed-data-base',
            'title' => 'Distributed data bases',
            'content' => "Distributed data bases are relatively new and complex parts of softwares that depend on many distributed algorithms that most of the programmers didn't have much contact with , like vector clocks and Raft/Paxos . 
            This research paper was another paper I wrote for one of my subjects . </br></br>
            Here , you can go deaper into databases and learn more about them because 90 % of us only know basics and we barerly scrached the surface . There is so much more . 
            If you are interested in databases , please check out this work . I would like to hear your opininon on it .</br></br>
            This project was done on Serbian languge , my native language . If you have any questions about it , please contact me .",
            'url' => 'https://github.com/Spookyboki/DistribuiraneBazePodataka',
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'slug' => 'copmuter-store',
            'title' => 'Computer store',
            'content' => 'This was a project that I had to do on the begining of my studies . As a programmer , in my first year of the university , I  had to learn a little bit of everything . So , even if now I focus on Front-End and I learn HTML , CSS , and JavaScript , this project was done in pure Java . </br></br>
            As this project was very simple , it served as a practice for Encapsulation , Polymorphism , Abstraction and Inheritance . </br></br>
            This can serve as a very good example if you are just a beginner , or you have difficulties understanding these concepts . </br></br>
            Even if I do not use Java much at the moment , I brought this knowledge to the programming languages I use now .',
            'url' => 'https://github.com/Spookyboki/ComputerStore',
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'slug' => 'furniture-store',
            'title' => 'Furniture store',
            'content' => 'This was a fun project that I worked on in my second year of studies . I had a task to make a Web site in Wordpress . </br></br>
            As Wordpress is simple and easy to learn , I did it very fast , with no major problems . It was than that I realised , Wordpress is really useful ! It can do simple design in no time . 
            You can literally make a web site in a matter of hours . </br></br>
            As I worked with Wordpress , I also found out that one can work as a programmer to not only design web pages , but to also design and work on plug-ins . This is much more difficult , but also very interesting .',
            'url' => 'https://github.com/Spookyboki/FurnitureStore',
            'created_at' => Carbon::now(),
        ]);
    }
}
