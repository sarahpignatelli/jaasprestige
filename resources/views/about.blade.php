@extends('layouts.app')
@section('title', 'JAAS Prestige | About')
@section('content')

<!-- In-Page Styling -->
<style>
   .heading1{
        text-decoration: underline;   
        font-size:40px;
   } 
    
    img{
        float: right;
    }
</style>

<!-- Putting text on an image -->       
<div class="my-container">
    <img src="/images/aboutbanner.jpg" style="width:100%;" alt="JAAS Prestige">
        <div class="my-centered">
            <h1 style=" font-size: 5vw; font-weight: 600;"> No. 1 Prestige Car Share in Melbourne</h1>
            <h1 style="font-size: 30px; font-size: 2vw; font-weight: 600;"> Established in 2017, CEO Doug Dug had an idea to become the next best 
              car share company in Melbourne </h1>
        </div>
</div> 


<!-- Placing text and images in a grid format -->
<div class="container">
    <div class="row"> 
        <div class="col-sm-12">
            <br>
            <br>
            <h2 style="font-size:40px; ">  What we do </h2>
            <hr>
            <br>
        </div>
               
        <div class="col-sm-6">
            <p style="text-align:center">
                <br><br>
                
                Here at JAAS Prestige we pride ourselves on bringing the best quality service money 
                can buy. We offer a variety of luxurious cars that are at you finger tips within the Melbourne CBD.
                Our Company Mission is to provide a magnificent car hire service that allows people the 
                opportunity to drive incredible cars at a fraction of the price.  
            <p>
            <br>
        </div>
        
        <div class="col-sm-6">
            <img src="/images/aboutpic2.jpg" style="width:85%; float:right;" alt="JAAS Prestige"> 
        </div>
        <br><br><br>
        <div class="col-sm-12">
            <h2 style="font-size:40px;"> Our Cars </h2>
            <hr>
            <br>
        </div>
        
        <div class="col-sm-6">
            <p style="text-align:center">
                <br><br>
               
                The cars that we have on offer are a carefully curated selection of cars the offer the best in
                both comfortability, speed and ease of driving. With our Selection of vehicles, you can choose
                from a sporty coupe or a large and comfortable SUV. We offer a large selection of cars all within 
                the walking distance of the CBD, you will be spoilt for choice    
            </p>
            <br>
        </div>
        
        <div class="col-sm-6">
            <img src="/images/aboutpic3.jpg" style="width:85%;  float:right;" alt="JAAS Prestige"> 
        </div>
        <br><br><br>
        
         <div class="col-sm-12">
            <h2 style="font-size:40px; "> Our Pricing </h2>
            <hr>
            <br>
        </div>
        
        <div class="col-sm-6"> 
            <p style="text-align:center">
               <br><br>
                The pricing of the car hire reflects the premium cars that are on offer. Now the pricing 
                is not as expensive as one might think. With the cars you will be a premium price as that is 
                to be expected with a service such as this. Pricing does vary according to the model and make of the car.
            </p>
            <br>
        </div>
        
        <div class="col-sm-6">
           <img src="/images/aboutpic4.jpg" style="width:85%;  float:right;" alt="JAAS Prestige"> 
        </div>
    </div>    
    
    @include('layouts.footer')
    
        
@endsection
</div>