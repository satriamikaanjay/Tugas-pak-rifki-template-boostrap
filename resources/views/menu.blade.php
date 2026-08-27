@extends('layouts.app')



@section('content')

    <!-- MENU SECTION -->

    <section id="menu">

      <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">

               <span class="slbl">What's Cooking</span>

               <h2 class="stitle">Our Delicious <span>Menu</span></h2>

               <div class="sline"></div>

            </div>

            <!-- FIX 3 � filter buttons -->

            <div class="text-center mb-4" data-aos="fade-up">

               <button class="filtbtn active" data-f="all">All</button>

               <button class="filtbtn" data-f="burger">Burger</button>

               <button class="filtbtn" data-f="pizza">Pizza</button>

               <button class="filtbtn" data-f="chicken">Chicken</button>

               <button class="filtbtn" data-f="french fries">french Fries</button>

               <button class="filtbtn" data-f="onion rings">Onion Rings</button>

               <button class="filtbtn" data-f="burrito">Burrito</button>

            </div>

            <div class="row g-4" id="mgrid">

               <!-- CARD 1: Burgers -->

               <div class="col-sm-6 col-lg-4 mwrap" data-c="burgers" data-aos="fade-up">

                  <div class="mcard"

                     data-img="img/menu/1.jpg"

                     data-title="Classic Burger"

                     data-cat="Burgers"

                     data-price="$14.99" data-old="$18.99"

                     data-rating="4.9" data-reviews="128"

                     data-cal="620" data-time="12"

                     data-desc="Classic Burger adalah sajian burger khas ala Amerika yang berfokus pada kelezatan daging sapi asli dan kombinasi rasa klasik yang seimbang."
                     data-tags="Spicy,Bestseller,Beef">

                     <div class="mimg">

                        <img src="img/menu/1.jpg" alt="Smash Burger"/>

                        <div class="mbdg hot"><i class="fas fa-star"></i> Hot</div>

                        <div class="mhrt"><i class="far fa-heart"></i></div>

                     </div>

                     <div class="mbody">

                        <div class="mcat">Burgers</div>

                        <div class="mtit">Classic Burger</div>

                        <div class="mdesc">Classic Burger adalah sajian burger khas ala Amerika yang berfokus pada kelezatan daging sapi asli dan kombinasi rasa klasik yang seimbang.</div>

                        <div class="mfoot">

                           <div>

                              <div class="mprice">$14.99 <small>$18.99</small></div>

                              <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(128)</span></div>

                           </div>

                           <button class="madd" title="View Details"><i class="fas fa-plus"></i></button>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- CARD 2: Pizza -->

               <div class="col-sm-6 col-lg-4 mwrap" data-c="pizza" data-aos="fade-up" data-aos-delay="80">

                  <div class="mcard"

                     data-img="img/menu/2.jpg"

                     data-title="Classic Pizza"

                     data-cat="Pizza"

                     data-price="$17.99" data-old="$26.99"

                     data-rating="4.8" data-reviews="95"

                     data-cal="480" data-time="18"

                     data-desc="Classic Pizza adalah hidangan pizza gaya artisan Italia yang memadukan keaslian bumbu tradisional khas Italia dengan sentuhan premium modern."
                     data-tags="Vegetarian,New,Italian">

                     <div class="mimg">

                        <img src="img/menu/2.jpg" alt="Pizza"/>

                        <div class="mbdg new"><i class="fas fa-star"></i> New</div>

                        <div class="mhrt"><i class="far fa-heart"></i></div>

                     </div>

                     <div class="mbody">

                        <div class="mcat">Pizza</div>

                        <div class="mtit">Classic Pizza</div>

                        <div class="mdesc">Classic Pizza adalah hidangan pizza gaya artisan Italia yang memadukan keaslian bumbu tradisional khas Italia dengan sentuhan premium modern.</div>

                        <div class="mfoot">

                           <div>

                              <div class="mprice">$17.99 <small>$26.99</small></div>

                              <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(95)</span></div>

                           </div>

                           <button class="madd" title="View Details"><i class="fas fa-plus"></i></button>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- CARD 3: Chicken -->

               <div class="col-sm-6 col-lg-4 mwrap" data-c="chicken" data-aos="fade-up" data-aos-delay="160">

                  <div class="mcard"

                     data-img="img/menu/chiken.jpg"

                     data-title="Nashville Chicken"

                     data-cat="Chicken"

                     data-price="$14.99" data-old="$18.99"

                     data-rating="5.0" data-reviews="210"

                     data-cal="710" data-time="15"

                     data-desc="Nashville Chicken adalah hidangan ayam goreng renyah ala kota Nashville yang terkenal dengan perpaduan rasa pedas membakar dan sensasi manis gurih yang menggugah selera."
                     data-tags="Spicy,Bestseller,Crispy">

                     <div class="mimg">

                        <img src="img/menu/chiken.jpg" alt="Chicken"/>

                        <div class="mbdg"><i class="fas fa-star"></i> Best Seller</div>

                        <div class="mhrt"><i class="far fa-heart"></i></div>

                     </div>

                     <div class="mbody">

                        <div class="mcat">Chicken</div>

                        <div class="mtit">Nashville Chicken</div>

                        <div class="mdesc">Nashville Chicken adalah hidangan ayam goreng renyah ala kota Nashville yang terkenal dengan perpaduan rasa pedas membakar dan sensasi manis gurih yang menggugah selera.</div>

                        <div class="mfoot">

                           <div>

                              <div class="mprice">$14.99 <small>$18.99</small></div>

                              <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(210)</span></div>

                           </div>

                           <button class="madd" title="View Details"><i class="fas fa-plus"></i></button>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- CARD 4: French Fries -->

               <div class="col-sm-6 col-lg-4 mwrap" data-c="French Fries" data-aos="fade-up">

                  <div class="mcard"

                     data-img="img/menu/French Fries.jpg"

                     data-title="Loaded Cheese Fries"

                     data-cat="French Fries"

                     data-price="$9.99" data-old=""

                     data-rating="4.5" data-reviews="74"

                     data-cal="520" data-time="10"

                     data-desc="Loaded Cheese Fries adalah hidangan kentang goreng renyah bergaya camilan gurih modern yang menyajikan perpaduan tekstur krispi dengan paduan topping berlimpah."
                     data-tags="Grilled,Fresh,Mexican">

                     <div class="mimg">

                        <img src="img/menu/French Fries.jpg" alt="French Fries"/>

                        <div class="mhrt"><i class="far fa-heart"></i></div>

                     </div>

                     <div class="mbody">

                        <div class="mcat">French Fries</div>

                        <div class="mtit">Loaded Cheese Fries</div>

                        <div class="mdesc">Loaded Cheese Fries adalah hidangan kentang goreng renyah bergaya camilan gurih modern yang menyajikan perpaduan tekstur krispi dengan paduan topping berlimpah.</div>

                        <div class="mfoot">

                           <div>

                              <div class="mprice">$9.99</div>

                              <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(74)</span></div>

                           </div>

                           <button class="madd" title="View Details"><i class="fas fa-plus"></i></button>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- CARD 5: Onion Rings -->

               <div class="col-sm-6 col-lg-4 mwrap" data-c="Onion Rings" data-aos="fade-up" data-aos-delay="80">

                  <div class="mcard"

                     data-img="img/menu/onion rings.jpg"

                     data-title="Crispy Golden Onion Rings"

                     data-cat="Onion Rings"

                     data-price="$8.99" data-old="$11.99"

                     data-rating="4.9" data-reviews="56"

                     data-cal="390" data-time="8"

                     data-desc="Crispy Golden Onion Rings adalah camilan klasik berupa cincin bawang bombay goreng renyah yang menyajikan perpaduan tekstur krispi di luar dan manis lembut di dalam."

                     data-tags="Sweet,New,Chocolate">

                     <div class="mimg">

                        <img src="img/menu/onion rings.jpg" alt="Onion Rings"/>

                        <div class="mbdg new"><i class="fas fa-star"></i> New</div>

                        <div class="mhrt"><i class="far fa-heart"></i></div>

                     </div>

                     <div class="mbody">

                        <div class="mcat">Onion Rings</div>

                        <div class="mtit">Crispy Golden Onion Rings</div>

                        <div class="mdesc">Crispy Golden Onion Rings adalah camilan klasik berupa cincin bawang bombay goreng renyah yang menyajikan perpaduan tekstur krispi di luar dan manis lembut di dalam.</div>

                        <div class="mfoot">

                           <div>

                              <div class="mprice">$8.99 <small>$11.99</small></div>

                              <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(56)</span></div>

                           </div>

                           <button class="madd" title="View Details"><i class="fas fa-plus"></i></button>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- CARD 6: Burrito -->

               <div class="col-sm-6 col-lg-4 mwrap" data-c="Burrito" data-aos="fade-up" data-aos-delay="160">

                  <div class="mcard"

                     data-img="img/menu/burrito.jpg"

                     data-title="Loaded Beef Burrito"

                     data-cat="Burrito"

                     data-price="$16.99" data-old=""

                     data-rating="4.9" data-reviews="88"

                     data-cal="560" data-time="20"

                     data-desc="Loaded Beef Burrito adalah hidangan khas Meksiko berupa gulungan tortilla hangat yang padat dengan isian daging sapi cincang berbumbu serta paduan rasa gurih, segar, dan creamy."

                     data-tags="Vegetarian,Chef's Pick,Italian">

                     <div class="mimg">

                        <img src="img/menu/burrito.jpg" alt="Burrito"/>

                        <div class="mbdg hot">Chef's Pick</div>

                        <div class="mhrt"><i class="far fa-heart"></i></div>

                     </div>

                     <div class="mbody">

                        <div class="mcat">Burrito</div>

                        <div class="mtit">Loaded Beef Burrito</div>

                        <div class="mdesc">Loaded Beef Burrito adalah hidangan khas Meksiko berupa gulungan tortilla hangat yang padat dengan isian daging sapi cincang berbumbu serta paduan rasa gurih, segar, dan creamy.</div>

                        <div class="mfoot">

                           <div>

                              <div class="mprice">$16.99</div>

                              <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(88)</span></div>

                           </div>

                           <button class="madd" title="View Details"><i class="fas fa-plus"></i></button>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <!-- end #mgrid -->

            <div class="text-center mt-5"><a href="#" class="btn-red"><i class="fas fa-th-large"></i>View Full Menu</a></div>

         </div>

    </section>



    <!-- MENU DETAIL POPUP MODAL (Wajib dimasukkan jika ada interaksi JS di menu) -->

    <div id="menuPop">

     <div id="menuPop">

         <div class="mpbox">

            <button class="mpclose" id="mpClose"><i class="fas fa-times"></i></button>

            <div class="mpimg"><img id="mpImg" src="" alt=""/></div>

            <div class="mpbody">

               <div id="mpCat"></div>

               <div id="mpTitle"></div>

               <div id="mpStars"></div>

               <div id="mpDesc"></div>

               <div id="mpPrice"></div>

               <div class="mpmeta" id="mpMeta"></div>

               <div class="mpqty">

                  <button class="mpqbtn" id="mpMinus">-</button>

                  <span class="mpqnum" id="mpQnum">1</span>

                  <button class="mpqbtn" id="mpPlus">+</button>

                  <span style="font-size:.82rem;color:#aaa;margin-left:9px;">portion</span>

               </div>

               <div class="mptags" id="mpTags"></div>

               <button class="mpaddcart" id="mpAddCart"><i class="fas fa-shopping-cart"></i>Add to Cart</button>

            </div>

         </div>

      </div>

    </div>

@endsection

