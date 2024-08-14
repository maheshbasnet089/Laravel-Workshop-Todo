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
 
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
  
        <div class="article">
          <h2><span>{{$product->name}}</h2>
          <div class="clr"></div>
          <p>Posted on {{$product->created_at}}</p>
          <img src="{{asset('images/'.$product->image)}}" width="613" height="179" alt="" />
          <div class="clr"></div>
          <p>{{$product->description}}</p>
          <p>Price : {{$product->price}}</p>
          <p>Stock : {{$product->stock}}</p>
          <p>Color : {{$product->color}}</p>
          <p>Size : {{$product->size}}</p>
          <p>Category : {{$product->category_id}}</p>
          <p>Brand : {{$product->brand_id}}</p>
          <p><a href="/user/product/{{$product->id}}" >Read more </a></p>
        </div>
      
  
      </div>
   
      <div class="clr"></div>
    </div>
  </div>

</div>
</body>
</html>
