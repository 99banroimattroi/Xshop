@include('widget.header')
@include('widget.dropdown')
	 <div id="contact-page" class="container">
    	<div class="bg" style="margin-bottom: 50px;">    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" >
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					
							<p class="fa fa-map-marker" > 122 Vĩnh Tuy, Hai Bà Trưng, Hà Nội</p>
							<p class="fa fa-home" > Class: TH22_04 | CREW 1 - Hanoi University of Business and Technology (HUBT)</p>
							<p class="fa fa-phone-square"> Phone: 0979964366</p>
							<p class="fa fa-envelope"> Email: 99banroimattroi@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/thanhthai.uy"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/TrnhnhHng13"><i class="fa fa-twitter"></i></a>
								</li>
								<!-- <li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li> -->
								<li>
									<a href="https://www.youtube.com/channel/UCY2M9X6SEmCyzv2ITJmY0Eg/videos?view_as=subscriber"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>  			
	    	</div>
	    	<div>
    				<h2 class="title text-center">Member</h2>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="#mem1" data-toggle="collapse">
                                    <img src="../admin_asset/images/member/trinhdinhhung.jpg" class="img-circle person" alt="Random Name" width="150" height="150">
                                    </a>
                                    <div id="mem1" class="collapse">
                                        <p>Trịnh Đình Hùng</p>
                                        <p>MSV 17104056 - TH2204</p>
                                        <p><a href="https://www.facebook.com/thanhthai.uy">Facebook</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#mem2" data-toggle="collapse">
                                    <img src="../admin_asset/images/member/dinhquocviet.jpg" class="img-circle person" alt="Random Name" width="150" height="150">
                                    </a>
                                    <div id="mem2" class="collapse">
                                        <p>Đinh Quốc Việt</p>
                                        <p>MSV 17100160 TH2204-HUBT </p>
                                        <p><a href="https://www.facebook.com/vietdinhofficial">Facebook</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#mem3" data-toggle="collapse">
                                    <img src="../admin_asset/images/member/daodinhluc.jpg" class="img-circle person" alt="Random Name" width="150" height="150">
                                    </a>
                                    <div id="mem3" class="collapse">
                                        <p>Đào Đình Lực</p>
                                        <p>MSV 16109132 TH2204-HUBT</p>
                                        <p><a href="https://www.facebook.com/Luctommy96" class="fa fa-facebook-official" >Facebook</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-sm-4">
                                    <a href="#mem4" data-toggle="collapse">
                                    <img src="../admin_asset/images/member/nguyencongtuananh.jpg" class="img-circle person" alt="Random Name" width="150" height="150">
                                    </a>
                                    <div id="mem4" class="collapse">
                                        <p>Nguyễn Công Tuấn Anh</p>
                                        <p>MSV 17100106 TH2204-HUBT</p>
                                        <p><a href="https://www.facebook.com/vangem.thanhhoa.1">Facebook</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#mem5" data-toggle="collapse">
                                    <img src="../admin_asset/images/member/nguyenductuananh.jpg" class="img-circle person" alt="Random Name" width="150" height="150">
                                    </a>
                                    <div id="mem5" class="collapse">
                                        <p>Nguyễn Đức Tuấn Anh</p>
                                        <p>MSV TH2204-HUBT</p>
                                        <p><a href="https://www.facebook.com/profile.php?id=100026121951696">Facebook</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#mem6" data-toggle="collapse">
                                    <img src="../admin_asset/images/member/nguyenduyson.jpg" class="img-circle person" alt="Random Name" width="150" height="150">
                                    </a>
                                    <div id="mem6" class="collapse">
                                        <p>Nguyễn Duy Sơn</p>
                                        <p>MSV 17103626 TH2204-HUBT</p>
                                        <p><a href="https://www.facebook.com/sonbeng132">Facebook</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
    			</div>  
    	</div>
    </div>
@include('widget.endoffile')
@include('widget.footer')
