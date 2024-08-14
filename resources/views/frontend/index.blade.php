<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>WideCommerce</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{asset('frontend/js/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/arial.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/cuf_run.js')}}"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="#"><span>wide</span>commerce</a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Blog</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="header_img"><img src="images/header_img.jpg" alt="" width="351" height="229" />
        <h2>More <span>best</span> Proposition </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac magna a turpis ornare aliquam id hendrerit nisl. Pellentesque adipiscing blandit mollis. Curabitur varius est et sem rhoncus et pretium massa molestie. </p>
      </div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        @foreach($products as $product)
        <div class="article">
          <h2><span>Template</span> License</h2>
          <div class="clr"></div>
          <p>Posted on 18. Sep, 2015 by Sara in Filed under templates, internet, with Comments 18</p>
          <img src="images/img_1.jpg" width="613" height="179" alt="" />
          <div class="clr"></div>
          <p>This is a free CSS website template by RocketWebsiteTemplates.com. This work is distributed under the Creative Commons Attribution 3.0 License, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to RocketWebsiteTemplates.com.</p>
          <p><a href="#">Read more </a></p>
        </div>
        @endforeach
  
      </div>
      <div class="sidebar">
        <div class="search">
          <form id="form" name="form" method="post" action="#">
            <span>
            <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
            </span>
            <input name="b" type="image" src="images/search.gif" class="button" />
          </form>
        </div>
        <!--/search -->
        <div class="gadget">
          <h2>Sidebar Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2><span>Sponsors</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#">Lorem ipsum dolor</a><br />
              Donec libero. Suspendisse bibendum</li>
            <li><a href="#">Donec mattis</a><br />
              Phasellus suscipit, leo a pharetra</li>
            <li><a href="#">Dui pede condimentum</a><br />
              Tellus eleifend magna eget</li>
            <li><a href="#">Condimentum lorem</a><br />
              Curabitur vel urna in tristique</li>
            <li><a href="#">Fringilla velit magna</a><br />
              Cras id urna orbi tincidunt orci ac</li>
            <li><a href="#">Suspendisse bibendum</a><br />
              purus nec placerat bibendum</li>
          </ul>
        </div>
        <div class="gadget">
          <h2>Wise Words</h2>
          <div class="clr"></div>
          <p> <img src="images/test_1.gif" alt="" width="19" height="20" /> <em>We can let circumstances rule us, or we can take charge and rule our lives from within </em>.<img src="images/test_2.gif" alt="" width="19" height="20" /></p>
          <p style="float:right;"><strong>Earl Nightingale</strong></p>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image Gallery</span></h2>
        <a href="#"><img src="images/gallery_1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/gallery_6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
      </div>
      <div class="col c3">
        <h2><span>Contact</span></h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui. Nulla pharetra, mauris vitae interdum dignissim, justo nunc suscipit ipsum. <a href="#">mail@example.com</a><br />
          <a href="#">+1 (123) 444-5677</a></p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="footer">
      <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.rocketwebsitetemplates.com/">RocketWebsiteTemplates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
