'use strict'

//slide
$(document).ready(function(){

  var wrapp = $('#block .wrapp');
  var maxheight = 0;

  wrapp.each(function() {
    var divHeight = $(this).height();

    if (divHeight > maxheight) {
        maxheight = divHeight;
    }

    wrapp.css('height', maxheight);
  })

  var prevB = $('.prev');
  var nextB = $('.next');


  var current = $('.pagination .bg-orange');
  var slides = $('.image-b');
  var currentTxt = $('.hero-txt .show');

  var sOne = $('.slide-one');
  var tOne = $('.txt-one');

  var sTwo = $('.slide-two');
  var tTwo = $('.txt-two');

  var sThree = $('.slide-three');
  var tThree = $('.txt-three');

  

  nextB.unbind('click').on('click', function(event) {
    
    event.preventDefault();
    var next = current.next();

    var cur = next.index();

    
    
    if (current.is(':last-child')){
      next = $('.pagination li:first-child');
    }

    current.removeClass('bg-orange');
    current = next.addClass('bg-orange');
   
    if (cur == -1) {
      tThree.removeClass('show');
      sOne.addClass('selected');
      tOne.addClass('show');

      if (window.matchMedia('(max-width: 768px)').matches){
        firstBttn.addClass('show');
        secondBttn.removeClass('show');
        thirdBttn.removeClass('show');
      }
    }
    
    if (cur == 1) {
      tOne.removeClass('show');
      sOne.removeClass('selected');
      sTwo.addClass('selected');
      tTwo.addClass('show');

      if (window.matchMedia('(max-width: 768px)').matches){
        firstBttn.removeClass('show');
        secondBttn.addClass('show');
        thirdBttn.removeClass('show');
      }
    }

    if (cur == 2) {
      tTwo.removeClass('show');
      sTwo.removeClass('selected');
      sThree.addClass('selected');
      tThree.addClass('show');

      if (window.matchMedia('(max-width: 768px)').matches){
        firstBttn.removeClass('show');
        secondBttn.removeClass('show');
        thirdBttn.addClass('show');
      }
    }

    return false;
  });


  prevB.unbind('click').on('click', function(event){
    event.preventDefault();
    var next = current.prev();

    var bur = next.index();
    
    if (current.is(':first-child')) {
      next = $('.pagination li:last-child');
    }

    current.removeClass('bg-orange');
    current = next.addClass('bg-orange');

    if (bur == 0) {
      tTwo.removeClass('show');
      sTwo.removeClass('selected');
      sOne.addClass('selected');
      tOne.addClass('show');

      if (window.matchMedia('(max-width: 768px)').matches){
        firstBttn.addClass('show');
        secondBttn.removeClass('show');
        thirdBttn.removeClass('show');
      }

    }
    
    if (bur == 1) {
      tThree.removeClass('show');
      sThree.removeClass('selected');
      sTwo.addClass('selected');
      tTwo.addClass('show');

      if (window.matchMedia('(max-width: 768px)').matches){
        firstBttn.removeClass('show');
        secondBttn.addClass('show');
        thirdBttn.removeClass('show');
      }
    }

    if (bur == -1) {
      tOne.removeClass('show');
      sOne.removeClass('selected');
      sThree.addClass('selected');
      tThree.addClass('show');

      if (window.matchMedia('(max-width: 768px)').matches){
        firstBttn.removeClass('show');
        secondBttn.removeClass('show');
        thirdBttn.addClass('show');
      }
    }

    return false;
  });
  
  
  var firstBttn = $('.first-bttn');
  var secondBttn = $('.second-bttn');
  var thirdBttn = $('.third-bttn');

  if (window.matchMedia('(max-width: 768px)').matches){
    firstBttn.addClass('show');
  }

  firstBttn.unbind('click').on('click', function(event){
    event.preventDefault();
    current = $(this);

    firstBttn.addClass('bg-orange');
    secondBttn.removeClass('bg-orange');
    thirdBttn.removeClass('bg-orange');

    tOne.addClass('show');
    sOne.addClass('selected');

    tTwo.removeClass('show');
    sTwo.removeClass('selected');

    tThree.removeClass('show');
    sThree.removeClass('selected');
  })

  secondBttn.unbind('click').on('click', function(event){
    event.preventDefault();

    current = $(this);

    firstBttn.removeClass('bg-orange');
    secondBttn.addClass('bg-orange');
    thirdBttn.removeClass('bg-orange');

    tOne.removeClass('show');
    sOne.removeClass('selected');

    tTwo.addClass('show');
    sTwo.addClass('selected');
    
    tThree.removeClass('show');
    sThree.removeClass('selected');
  })

  thirdBttn.unbind('click').on('click', function(event){
    event.preventDefault();

    current = $(this);

    firstBttn.removeClass('bg-orange');
    secondBttn.removeClass('bg-orange');
    thirdBttn.addClass('bg-orange');

    tOne.removeClass('show');
    sOne.removeClass('selected');

    tTwo.removeClass('show');
    sTwo.removeClass('selected');
    
    tThree.addClass('show');
    sThree.addClass('selected');
  })

  

  var rightHeight = $('.right-side').height();
  var leftBox = $('.left-box');
  leftBox.css({'height':rightHeight + 'px'});


  var leftSide = $('.left-side');
  var rightSide = $('.right-side');

  if (window.matchMedia('(min-width: 768px) and (max-width: 1024px)').matches) {
    rightSide.css({'padding-top':leftSide.height()+ 30 + 'px'});
  }

  //Dropdown
  var clickable = $('.clickable');
  var dropdown = $('.dropdown');

  var close = $('.s-close');

  clickable.unbind('click').on('click', function(){
    clickable.toggleClass('show');
    var col = $(this).parent().eq(0).children('.dropdown');

    if ($(this).hasClass('show')) {

      if (window.matchMedia('(min-width: 1025px)').matches) {

        if (col.length > 0) {

          dropdown.css({'display':'block'});
          $(this).css({
            'padding':'23px 19.5px 27px', 'background-color': '#de812f'});
        }
      }

      if (window.matchMedia('(max-width: 1024px)').matches) {

        if (col.length > 0) {
          dropdown.stop().slideDown();

          close.unbind('click').on('click' ,function(e){
            dropdown.stop().slideUp()
            clickable.removeClass('show');
          })
        }
      }
    }
    else {
      dropdown.css({'display':'none'});
      $(this).css({'padding':'23px 19.5px 20px', 'background-color': 'transparent'});
    }
  })

  var hamburger = $('.hamburger');
  var navItems = $('.nav-items');

  if (hamburger.css('display') == 'block') {
    clickable.append('<span class="s s-play white"><span class="hide">right arrow</span></span>');
  }

  hamburger.unbind('click').on('click' ,function() {
    hamburger.toggleClass('show');

    if ($(this).hasClass('show')) {
      navItems.css({'display':'block'});
    }
    else {
      navItems.css({'display':'none'});
    }
  })

  var searching = $('.searching');
  var search = $('.search');

  search.unbind('click').on('click' ,function() {
    search.toggleClass('sr');

    if ($(this).hasClass('sr')) {
      searching.css({'display':'block'});
    }
    else {
      searching.css({'display':'none'});
    }
  })

  //seethru-bg
  var popups = $('.seethru-bcg');

  popups.unbind('click').click(function(event) {
    if(event.target === event.currentTarget) {
      const popup = '#popup-box-' + event.currentTarget.getAttribute('id');
      $(popup).toggleClass('popup-box--show');
      $(popup).toggleClass('popup-box--hide');
    }
  });

  var projects = $('.show-project-popup');

  projects.unbind('click').on('click', event => {
    const popup = '#popup-box-' + event.currentTarget.getAttribute('id');
    $(popup).toggleClass('popup-box--show');
    $(popup).toggleClass('popup-box--hide');
  });


  //login
  var changeBtn = $('.login-btn');
  var logForm = $('.login-form');
  
  changeBtn.unbind('click').on('click',function(){
    changeBtn.toggleClass('pop');

    if ($(this).hasClass('pop')){
      logForm.css({"display": "block"});
    }
    else {
      logForm.css({"display": "none"});
    }
  })

  var addForm = $('.add-form');
  var removeForm = $('.remove-form');
  var changeFom = $('.change-form');

  var forms = $('.forms');
  var pmenu = $('.project-menu');

  var i;
  var pnum;
  
  pmenu.unbind('click').on('click', function(){
    console.log('clciked');
    
    for (i = 0; i < pmenu.length; i++) {
      pnum = ($(this).index());
      $(this).addClass('pop');

      if (pnum == 1 ){
        forms.css({'display':'none'});
        addForm.css({'display':'block'});
      }
      else if (pnum == 2){
        forms.css({'display':'none'});
        changeFom.css({'display':'block'});
      }
      else {
        forms.css({'display':'none'});
        removeForm.css({'display':'block'});
      }
    }
  })


  // Update projects
  $('.project-list-item').unbind('click').on('click', event => {
    event.preventDefault();
    const popup = '#project-' + event.currentTarget.getAttribute('id');
    $('.project--show').toggleClass('project--show');
    $(popup).toggleClass('project--show');
  });

  

});
