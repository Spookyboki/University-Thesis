@extends('layouts.app')

@section('title', 'My CV')

@section('content')
<section class="content" id="top">
    <div class="container">
      <div class="row">
        <div class="col col-3 col-6-t col-1-m left-side">
          <ul class="selected-click">
            <li><a href="/my-cv" class="bolded">MY CV</a></li>
            <li><a href="#personal-info">Personal Information</a></li>
            <li><a href="#education">Education and Training</a></li>
            <li><a href="#history">Employment History /<br> Practice and experience</a></li>
            <li><a href="#skills">Skills and Competence</a></li>
          </ul>
        </div>
        <div class="col col-9 col-6-t col-1-m right-side">
          <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li>My CV</li>
          </ul>
          <h1 class="orange title">My CV</h1>
          <div class="col col-12 cv-box">
            <div class="col col-6 col-3-t col-1-m">
              <div class="my-img">
                <img src="{{ asset('img/me.jpg') }}" alt="The picture of me">      
              </div>
            </div>
            <div class="col col-6 col-3-t col-1-m second">
              <h1 class="orange">Bojan Kolano</h1>
              <p>Address: Kaće Dejanović 3, Novi Sad</p>
              <p>E-Mail: bojan19941@hotmail.com</p>
              <a class="orange" href="https://www.linkedin.com/in/bojan-kolano-969735150/" target="_blank">LinkedIn page</a>
            </div>
            <div class="col col-12 col-6-t col-1-m">
              <a name="personal-info"><h3 class="orange">Personal Information</h3></a>
              <p>My name is Bojan Kolano and I am from Novi Sad , Serbia and I was born there in 22.12.1994 . At the moment , I am a university student and my major is IT , Information Technologies . I love computers , so my main focus is working with,  and on them . My main specializations are Front End development and Administration , but I am also interested in and studying Internet Marketing .
                One of my main interests , besides computers , is English , and languages in general. As I am fluent in English , I started studying German and Japanese. I am still a beginner , but I learn fast.
              </p>
            </div>
            <div class="col col-12 col-6-t col-1-m">
              <a name="education"><h3 class="orange">Education and Training</h3></a>
              <ul class="darker-grey">
                <li>- Diploma on secondary education
                  <br><span>Calling: Constuction Technician</span>
                </li>
                <li>- University Student, fourth year
                  <br><span>University of Singidunum: Information technology</span>
                </li>
              </ul>
            </div>
            <div class="col col-12 col-6-t col-1-m">
              <a name="history"><h3 class="orange">Employment History / Practice and experience</h3></a>
              <ul class="darker-grey">
                <li>- NIS d.o.o - Commision in the list of fixed assets
                  <br><span>This was a position available for 3 months , once a year. I worked here for two consecutive years.</span>
                </li>
                <li>- Vega IT Sourcing - Internship and Training
                  <br><span>I was an intern for 15 days and I was on a special training for two months.</span>
                </li>
                <li>- Online English teacher - Self Employed
                  <br><span>Working part-time as an English teacher online for 2 years.</span>
                </li>
              </ul>
            </div>
            <div class="col col-12 col-6-t col-1-m">
              <a name="skills"><h3 class="orange">Skills and Competence</h3></a>
              <ul class="darker-grey">
                <li>Main Language: Serbian</li>
                <li>Foreing Language: English</li>
                <li>Social skills and competence: Persistent ,Hard working , Recourseful , Good at team work , Communicative , Adjustable , Creative , Ready to learn and cooperate</li>
                <li>Computing skills: HTML, CSS, JavaScritp, Java, SAP ,Magento</li>
                <li>Other skills and competence: B2 Advanced English</li>
                <li>Interests: Sports, Computers and Computer technologies, Foreign languages, Computer Games, Manga, Books</li>
                <li>Driving licence: Categories AM, A1, B</li>
                <li>Sports and hobbies: Marshal arts , Gym , Guitar , Music , Movies , Anime</li>
                <ul class="moved">Certificates and Recommendations Coming with CV :
                  <li><a href="image link from database" target="_blank">Certificate of Advanced level in English B2</a></li>
                  <li><a href="#" target="_blank">Certificate of Java Tutorial Course</a></li>
                  <li><a href="#" target="_blank">Certificate of HTML Fundamentals Course</a></li>
                  <li><a href="#" target="_blank">Certificate of CSS Fundamentals Course</a></li>
                  <li><a href="#" target="_blank">Recommendation letter from company NIS d.o.o</a></li>
                  <li><a href="#" target="_blank">Certificate of Beginner SAP/ERP training course</a></li>
                </ul>
              </ul>
          </div>
          <a class="download" href="{{ asset('cv-bojan-kolano.pdf') }}">Download my CV in PDF</a>
        </div>
      </div>
    </div>
</section>
@endsection