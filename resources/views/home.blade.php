@extends('layouts.web')
    
@section('content')
<div class="container">   
<!-- Hero Section -->
<div class="hero">
    <h1>Welcome to Cocoon Cafe</h1>
    <p>"Where Comfort Brews and Flavors Bloom"</p>
</div>

<p class="intro">
    "Welcome to Cocoon Cafe, your sanctuary of warmth and flavor in the midst of the bustling city. We blend the comfort of a homey retreat with the aroma of freshly brewed coffee and a menu of artisanal delights. Whether it’s for a quiet moment of relaxation, a vibrant chat with friends, or a quick escape from the routine, Cocoon Cafe is here to bring you an experience worth savoring."
</p>

<!-- About Section -->
<div class="section" style="transition: transform 0.3s, box-shadow 0.3s; padding: 20px; border: 1px solid #e7e7e7; border-radius: 8px; box-shadow: 0 0 8px rgba(0,0,0,0.1); background-color:rgb(198, 197, 193);">
    <h2 style="margin-bottom: 10px;">About Us</h2>
    <p>Experience the cozy atmosphere and delicious food of Cocoon Cafe. <br>We offer the best coffee and desserts in town.</p>
</div>

<!-- Our Story Section -->
<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Text Section -->
        <div class="col-lg-6 mb-4">
            <h2 class="content-heading">Our Story: Crafted with Passion</h2>
            <p>
                Cocoon Cafe was born out of a love for creating an experience that goes beyond just serving food and drinks. We started with a vision to offer more than just a cafe—a welcoming space that feels like a <strong>home away from home</strong>. Inspired by the timeless charm of European cafes, we focus on bringing <strong>authentic flavors and a sense of togetherness</strong> to our community.
            </p>
            <p>
                From the design of the cafe to the selection of our ingredients, every aspect reflects our commitment to bringing you a <strong>cozy and welcoming environment</strong>. Our journey began with the desire to offer more than just food and beverages; we wanted to create an experience that lingers long after your visit. Our journey is built on the belief that good coffee and delicious food have the power to connect people, create memories, and make each moment special.
            </p>
        </div>
        <!-- Image Section -->
        <div class="col-lg-6">
            <img src="https://caffepraha.com/wp-content/uploads/2024/09/Untitled-1-600x600.jpg" class="img-fluid rounded" alt="Breakfast Image" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>
</div>

<!-- What We Serve Section -->
<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-lg-6">
            <img src="https://i.pinimg.com/564x/3c/d6/45/3cd645eab4c31432b94ef0a41c035147.jpg" class="img-fluid rounded" alt="Breakfast Image">
        </div>
        <!-- Text Section -->
        <div class="col-lg-6 mb-4">
            <h2 class="content-heading">What We Serve: Savor Every Bite</h2>
            <p>
                At Cocoon Cafe, we believe that the best experiences come from the finest ingredients, combined with <strong>passion and precision</strong>. Our menu is a thoughtfully curated selection of both traditional favorites and innovative flavors, offering something to <strong>please every palate</strong>.
            </p>
            <p>
                Start your day with a rich, aromatic espresso or a <strong>creamy latte</strong>, prepared by skilled baristas who take pride in each pour. For tea lovers, our selection ranges from refreshing green tea to exotic blends like Earl Grey lavender and spiced chai, each steeped to perfection.
            </p>
            <p>
                Our bakery delights include <strong>freshly baked croissants, fluffy muffins, and our signature cheese chimneys</strong>, each crafted with love and attention to detail. We are particularly proud of our decadent desserts, featuring treats like the <strong>velvety Nutella-stuffed pancakes and the classic New York cheesecake</strong>—perfect to satisfy any sweet tooth.
            </p>
        </div>
    </div>
</div>

<!-- Our Ambiance Section -->
<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Text Section -->
        <div class="col-lg-6 mb-4">
            <h2 class="content-heading">Our Ambiance: Your Cozy Retreat</h2>
            <p>
                Step inside Cocoon Cafe, and you’ll instantly feel the blend of <strong>warmth and elegance</strong>. The cafe’s interior is thoughtfully designed with soft lighting, cozy seating, and rustic decor that creates a <strong>calming atmosphere</strong>. We’ve added touches of greenery and artistic elements that invite you to <strong>linger longer</strong>, whether you’re reading a book, working on a creative project, or simply enjoying a cup of coffee.
            </p>
            <p>
                Every corner of the cafe is crafted to be <strong>Instagram-worthy</strong>. Whether you're here for a solo coffee break or a catch-up with friends, Cocoon Cafe offers a <strong>tranquil escape</strong> from the fast-paced city life.
            </p>
            <p>
                We’ve also added <strong>cozy nooks</strong> for book lovers, communal tables for group gatherings, and window-side seating for those who love to watch the world go by. Our outdoor patio is perfect for sunny days, offering a refreshing open-air vibe with comfortable seating and lush plants. No matter where you choose to sit, Cocoon Cafe is designed to make you feel <strong>embraced by warmth, peace, and the aroma of freshly brewed coffee</strong>.
            </p>
        </div>
        <!-- Image Section -->
        <div class="col-lg-6">
            <img src="https://i.pinimg.com/564x/12/9c/5a/129c5a18cad208c91e3f0709bb504ab3.jpg" class="img-fluid rounded" alt="Ambiance Image" style="width: 500px; height: auto; border-radius: 8px;">
        </div>
    </div>
</div>

<div style="height: 20px;"></div>

<!-- Visit Us Section -->
<div class="visit-section text-center">
    <h2 class="visit-heading">
        <span style="color: #d96682;">Visit Us</span> <span style="font-weight: bold;">Today</span>
    </h2>
    <div class="visit-line mx-auto"></div>
    <p class="visit-description">
        Karachi, get ready to be enchanted by the flavors and ambiance of Cocoon Cafe. We invite you to join us for a journey through the streets of Prague, one delicious bite at a time. Whether you’re stopping by for a quick treat or spending a leisurely afternoon, we promise an experience that will leave you craving more. Visit us today and indulge in the finest Eastern European delights right here in the heart of Karachi.
    </p>
    <a href="/contact" class="btn btn-custom">Contact Us</a>
</div>

<!-- Carousel Section -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i.pinimg.com/564x/c6/7a/ca/c67acafa70b7ef2debc1fb21e65f2ef8.jpg" class="d-block w-100" alt="..." height="400px">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
                <h5>CUSTOMER FEEDBACK</h5>
                <p>Lily S. - ⭐⭐⭐⭐⭐</p>
                <p>"Cocoon Cafe is my new favorite spot! The rustic yet elegant decor, combined with the aroma of freshly brewed coffee, is just magical. I had their Matcha Latte along with the Berry Tart, and it was a match made in heaven! Highly recommend it!"</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/564x/ad/61/3d/ad613d12c2b1c348b7d24a61d17ff5f4.jpg" class="d-block w-100" alt="..." height="400px">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
                <h5>CUSTOMER FEEDBACK</h5>
                <p>Emma T. - ⭐⭐⭐⭐⭐</p>
                <p>"Cocoon Cafe feels like a warm hug in the heart of the city! The cozy atmosphere and charming decor made me feel right at home. I tried their Hazelnut Latte paired with a slice of their Chocolate Croissant—it was absolutely divine. Can’t wait to be back!"</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/564x/6a/cc/9e/6acc9ee4f6692e79531dd23adf458b38.jpg" class="d-block w-100" alt="..." height="400px">
            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
                <h5>CUSTOMER FEEDBACK</h5>
                <p>Jason K. - ⭐⭐⭐⭐⭐</p>
                <p>"If you’re looking for comfort food with a twist, Cocoon Cafe is the place to be! I ordered the Classic Pancakes with maple syrup, and it was a fluffy dream come true. A great spot to start the morning or unwind after a busy day!"</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div> 

@endsection


