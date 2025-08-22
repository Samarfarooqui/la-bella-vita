<?php require_once('header.php')?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Book a Table</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
</br>
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
			<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Book a table</span>
		            <h2 class="mb-4">Reserve Your Table</h2>
		          </div>
	            <form action="#" method="post">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="full_name">Full Name :*</label>
	                    <input type="text" id="full_name" class="form-control" placeholder="Your Name" required/>
	                  </div>
	                </div>

	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="email">Email :*</label>
	                    <input type="email" id="email" class="form-control" placeholder="Your Email" required/>
	                  </div>
	                </div>

	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="phone">Phone :*</label>
	                    <input type="tel" id="phone" class="form-control" placeholder="Enter Phone no." pattern="[0-9+ -]{7,15}" required/>
	                  </div>
	                </div>
					
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="datetime">Date & Time :</label>
	                    <input type="datetime-local" class="form-control" id="datetime" placeholder="Enter Date and Time"/>
	                  </div>
	                </div>

	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">No. of Person :</label>
	                    <div class="select-wrap one-third">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="persons" id="persons" class="form-control">
							<option value="" disabled selected hidden>Select No. of Persons</option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4</option>
							<option value="5">5+</option>
	                      </select>
	                    </div>
	                  </div>
	                </div>

					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="additional_info">Additional Information :</label>
	                    <textarea class="form-control" id="additional" name="additional" placeholder="Provide Additional Info"></textarea>
	                  </div>
	                </div>

	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
          
		 
		  <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
			<div class="maps_embed"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7014.320945513962!2d0.016728329611263068!3d51.569389301033745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a76f9aebb4e9%3A0x6504710895ec1956!2sLa%20Bella%20Vita!5e0!3m2!1sen!2sin!4v1755772386644!5m2!1sen!2sin" width="900" height="700" style="border:#fff; margin-left:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>
		</div>
        </div>
		</div>
		</section>
	<!--- FOOTER-->	
<?php require_once('footer.php')?>