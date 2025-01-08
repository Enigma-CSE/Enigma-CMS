@extends('layouts.app')

@section('title', 'Enigma Events')

@section('content')
     <!-- Start Breadcrumbs Area -->
     <div
     class="ep-breadcrumbs breadcrumbs-bg background-image"
     style="background-image: url('assets/images/breadcrumbs-bg.png')"
   >
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-lg-6 col-md-6 col-12">
           <div class="ep-breadcrumbs__content">
             <h3 class="ep-breadcrumbs__title">Event details</h3>
             <ul class="ep-breadcrumbs__menu">
               <li>
                 <a href="index.html">Home</a>
               </li>
               <li>
                 <i class="fi-bs-angle-right"></i>
               </li>
               <li class="active">
                 <a href="event-details.html">Event details</a>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End Breadcrumbs Area -->
   <!-- Start Event Details Area -->
   <section class="ep-event__details section-gap position-relative">
     <div class="container ep-container">
       <div class="row">
         <div class="col-lg-12 col-xl-8 col-12">
           <div class="ep-event__details-content">
             <div class="ep-event__widget">
               <h3 class="ep-event__widget-title">About The Event</h3>
               <p class="ep-event__widget-text">
                 Aliquam eros justo, posuere loborti vive rra laoreet
                 matti ullamc orper posu ere viverra .Aliquam eros the
                 justo, posuere lobo, vive rra laoreet augue mattis
                 fermentum ullamcorper viverra laoreet Aliquam eros a
                 justo, posuere loborti viverra laoreet mat ullamcorper
                 posue viverra .Aliquam
               </p>
               <br />
               <p class="ep-event__widget-text">
                 Education is a vital aspect of a child's development.
                 Preschools, elementary schools, and middle schools play
                 a significant role in providing quality education and
                 fostering growth in young minds Education is a vital
                 aspect of a child's development. Preschools, elementary
                 schools, and middle schools play a the a significant
                 role in providing quality education and fostering growth
                 in young minds
               </p>
               <br />
               <ul class="ep-event__widget-list">
                 <li>
                   <i class="fi-ss-check-circle"></i>Nurturing Young
                   Minds
                 </li>
                 <li>
                   <i class="fi-ss-check-circle"></i>Unlocking Potential
                 </li>
                 <li>
                   <i class="fi-ss-check-circle"></i>Through Education
                 </li>
                 <li>
                   <i class="fi-ss-check-circle"></i>Igniting Curiosity
                   Imagination
                 </li>
                 <li>
                   <i class="fi-ss-check-circle"></i>Nurturing Young Min
                 </li>
                 <li>
                   <i class="fi-ss-check-circle"></i>Foundation for
                   Success
                 </li>
               </ul>
             </div>
             <div class="ep-event__widget">
               <h3 class="ep-event__widget-title">Event Location</h3>
               <ul class="ep-event__widget-meta">
                 <li>
                   <i class="fi fi-rs-marker"></i>Mirpur Bangladesh
                 </li>
                 <li><i class="fi fi-rr-clock"></i>10Am To 3Pm</li>
               </ul>
               <div class="ep-event__location-map">
                 <div class="gmap_canvas">
                   <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7298.959613692403!2d90.36501104141328!3d23.83709017812546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c17cf9e11737%3A0x44c49aa5dd7c3f00!2sMirpur%20DOHS%20Cultural%20Center!5e0!3m2!1sen!2sbd!4v1721998237394!5m2!1sen!2sbd"
                     width="830"
                     height="320"
                     style="border: 0"
                   ></iframe>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-8 col-xl-4 col-12">
           <div class="ep-event__sidebar">
             <h4 class="ep-event__sidebar-title">Event Info</h4>
             <p class="ep-event__sidebar-text">
               Aliquam eros justo, posuere loborti vive rra laoreet matti
               ullamc orper posu.
             </p>
             <div class="ep-event__checkout">
               <ul>
                 <li>Cost: <span class="ep3-color">$250.00</span></li>
                 <li>Total Slot: <span>250</span></li>
                 <li>Booked Slot: <span>2</span></li>
               </ul>
               <div class="ep-event__checkout-btn">
                 <a href="#" class="ep-btn"
                   >Book Now <i class="fi-rs-arrow-small-right"></i>
                 </a>
               </div>
             </div>
             <div class="ep-event__time">
               <p class="ep-event__time-title">
                 Remaining Time For Event
               </p>
               <ul class="ep-event__time-list">
                 <li>302 Days</li>
                 <li>3 Hours</li>
                 <li>20 Min</li>
                 <li>25 Sec</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- End Event Details Area -->
@endsection