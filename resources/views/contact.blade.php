@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="contact">
            <div class = "row">
                <div class="container">
                    <div class="col col-12 col-6-t col-1-m proj">
                      <h1>Contact Us</h1>
                      <form method="POST" action="{{ route('send-emails') }}">
                        @csrf
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="mail">Your E-mail Adress</label>
                        <input type="mail" id="mail" name="email" placeholder="Your email adress..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                          <option value="australia">Australia</option>
                          <option value="canada">Canada</option>
                          <option value="usa">USA</option>
                          <option value="serbia">Serbia</option>
                          <option value="bosnia">Bosnia</option>
                          <option value="england">England</option>
                          <option value="germany">Germany</option>
                          <option value="france">France</option>
                          <option value="hungary">Hungary</option>
                          <option value="japan">Japan</option>
                          <option value="china">China</option>
                        </select>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                      </form>
                    </div>
                </div>  
            </div>
        </div>
@endsection