<style>
.scroller {
  max-width: 100%;
}

.scroller__inner {
  padding-block: 1rem;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}
.scroller__inner img {
    border-radius:6px;
    border : 0px  solid black;
}

.scroller[data-animated="true"] {
  overflow: hidden;
  -webkit-mask: linear-gradient(
    90deg,
    transparent,
    white 20%,
    white 80%,
    transparent
  );
  mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
}

.scroller[data-animated="true"] .scroller__inner {
  width: max-content;
  flex-wrap: nowrap;
  animation: scroll var(--_animation-duration, 400s)
    var(--_animation-direction, forwards) linear infinite;
}

.scroller[data-direction="right"] {
  --_animation-direction: reverse;
}

.scroller[data-direction="left"] {
  --_animation-direction: forwards;
}

.scroller[data-speed="fast"] {
  --_animation-duration: 400s;
}

.scroller[data-speed="slow"] {
  --_animation-duration: 400s;
}

@keyframes scroll {
  to {
    transform: translate(calc(-50% - 0.5rem));
  }
}

/* general styles */

:root {
  --clr-neutral-100: hsl(0, 0%, 100%);
  --clr-primary-100: hsl(205, 15%, 58%);
  --clr-primary-400: hsl(215, 25%, 27%);
  --clr-primary-800: hsl(217, 33%, 17%);
  --clr-primary-900: hsl(218, 33%, 9%);
}

html {
  color-scheme: dark;
}

body {
  min-block-size: 100vh;
  place-content: center;
  font-family: system-ui;
  font-size: 1.125rem;
}

.tag-list {
  margin: 0;
  padding-inline: 0;
  list-style: none;
}

.tag-list li {
  padding: 1rem;
  background: var(--clr-primary-400);
  border-radius: 0.5rem;
  box-shadow: 0 0.5rem 1rem -0.25rem var(--clr-primary-900);
}

/* for testing purposed to ensure the animation lined up correctly */
.test {
  background: red !important;
}</style>

               
  <div class="scroller" data-speed="slow" >
    <ul style="color:white;" class="tag-list scroller__inner">


<li>	MR.	GOVINDA KUMAR OLI	</li>
<li>	MR.	TIKA RAM CHAUDHARY	</li>
<li>	MR.	BIBEK CHAUDHARY	</li>
<li>	MR.	RAMESH CHAUDHARY	</li>
<li>	MR.	GOVINDA GHARTI MAGAR	</li>
<li>	MR.	GAURAV KHADKA	</li>
<li>	MR.	KRISHANA PRASAD KHANAL	</li>
<li>	MR.	KRISHNA GHIMIRE	</li>
<li>	MIS.	SANGITA PANDEY	</li>
<li>	MR.	MADHAV OLI	</li>
<li>	MR.	RAMESH KHANAL	</li>
<li>	MR.	KHIM PRASAD GHIMIRE	</li>
<li>	MR.	RABIN KHASU MAGAR	</li>
<li>	MR.	RANJAN CHAUDHARY	</li>
<li>	MIS.	SAHILA SUBEDI	</li>
<li>	MR.	RISHI RAJ CHAUDHARY	</li>
<li>	MIS.	RITA K.C	</li>
<li>	MIS.	RANJITA SHARMA	</li>
<li>	MR.	YAM PRASAD SARMA	</li>
<li>	MIS.	SAHRDA ARYAL	</li>
<li>	MIS.	SUMITRA ARYAL	</li>
<li>	MIS.	POOJA NEUPANE	</li>
<li>	MR.	DIMKA CHAUDHARY	</li>
<li>	MIS.	AMRITA PANDEY KHANAL	</li>
<li>	MR.	GANESH POKHREL	</li>
<li>	MIS.	SIRJANA OLI	</li>
<li>	MIS.	SAPANA CHAUDHARY	</li>
<li>	MIS.	BNISHA SHAPKOTA	</li>
<li>	MIS.	BINITA CHAUDHARY	</li>
<li>	MIS.	PUSPA BHATTRAI	</li>
<li>	MIS.	BHAGWOTI SHRESTHA	</li>
<li>	MIS.	DEEPA BISTA	</li>
<li>	MR.	SAIZADI HALWAL	</li>
<li>	MR.	BIBEK ACHARYA	</li>
<li>	MIS.	MANISHA GHARTI MAGAR PUN	</li>
<li>	MIS.	MANISHA KHANAL	</li>
<li>	MIS.	GITA GHALE	</li>
<li>	MIS.	RANJITA PACHAL DANGIYA	</li>
<li>	MR.	RADHE SHYAM CHAUDHARY	</li>
<li>	MR.	NARESH BHANDARI	</li>
<li>	MR.	FIRIK RAM CHAUDHARY	</li>
<li>	MR.	SHOVA RAM CHAUDHARY	</li>
<li>	MR.	SUNIL CHAUDHARY	</li>
<li>	MR.	DHURBA RAJ CHAUDHARY	</li>
<li>	MR.	KRISHAN KSHETTRI	</li>
<li>	MR.	KHIMI KAMI	</li>
<li>	MIS.	KRISHNI SHRESTHA	</li>
<li>	MIS.	SITA DEVI CHAUDHARY	</li>
<li>	MIS.	NIRMALA CHAUDHARY	</li>
<li>	MIS.	GITA CHAUDHARY	</li>
<li>	MR.	MANOJ CHAUDHARY	</li>
<li>	MR.	TARA CHAUDHARY	</li>
<li>	MIS.	BASANTI CHAUDHARY	</li>
<li>	MIS.	NIRMALA THAPA	</li>
<li>	MIS.	BABITA CHAUDHARY	</li>
<li>	MR.	HEM CHAUDHARY	</li>
<li>	MR.	SURESH SHAH	</li>
<li>	MR.	PURNA BAHADUR OLI	</li>
<li>	MIS.	SURAKSHYA SHRESTHA	</li>
<li>	MR.	SAWAMIDAYAL YADAV	</li>
<li>	MIS.	KAMALA BHATTRAI	</li>
<li>	MR.	NIRMAL RWAT	</li>
<li>	MR.	RESHMA KUMRI YOGI	</li>
<li>	MR.	BASANT PANDEY	</li>
<li>	MR.	SAGAR SHARMA	</li>
<li>	MR.	SUHIL BHUSAL 	</li>
<li>	MR.	GIRI RAJ NEUPANE 	</li>
<li>	MIS.	MAMTA CHAUDHARY	</li>
<li>	MR.	BABURAM POKHREL	</li>
<li>	MR.	MANOHAR CHAUDHARY	</li>

   
  </ul>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function () {
  const scrollers = document.querySelectorAll(".scroller");

  if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    addAnimation();
  }

  function addAnimation() {
    scrollers.forEach((scroller) => {
      scroller.setAttribute("data-animated", true);

      const scrollerInner = scroller.querySelector(".scroller__inner");
      const scrollerContent = Array.from(scrollerInner.children);

      scrollerContent.forEach((item) => {
        const duplicatedItem = item.cloneNode(true);
        duplicatedItem.setAttribute("aria-hidden", true);
        scrollerInner.appendChild(duplicatedItem);
      });

      // Add event listeners to pause and resume the animation
      scroller.addEventListener("mouseover", pauseAnimation);
      scroller.addEventListener("mousedown", pauseAnimation);
      scroller.addEventListener("touchstart", pauseAnimation);
      scroller.addEventListener("mouseleave", resumeAnimation);
      scroller.addEventListener("mouseup", resumeAnimation);
      scroller.addEventListener("touchend", resumeAnimation);
    });
  }

  function pauseAnimation(event) {
    const scrollerInner = event.currentTarget.querySelector(".scroller__inner");
    scrollerInner.style.animationPlayState = "paused";
  }

  function resumeAnimation(event) {
    const scrollerInner = event.currentTarget.querySelector(".scroller__inner");
    scrollerInner.style.animationPlayState = "running";
  }
});

</script>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96987.21221958868!2d82.52664809020906!3d27.872369621750583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399798f84e010a63%3A0xba71bf0998f8a730!2sRosy%20Buds%20Bal%20Batika%20Secondary%20School!5e1!3m2!1sen!2snp!4v1724751504010!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<section id="subs_o" class="pt-5 pb-5 bg_blue">
 <div class="container-xl">
   <div class="subs_o1 row">
    <div class="col-md-7">
	 <div class="subs_o1l">
	  <h1 class="text-white"><i class="fa fa-ticket me-1"></i> HAVE A NICE DAY <br> <span class="fs-6 fw-normal">Thank's For visit our school website</span></h1>

	 </div>
	</div>
	<!-- <div class="col-md-5"> -->
	 <!-- <div class="subs_o1r"> -->
	   <!-- <div class="input-group p-2 bg-white rounded-3"> -->
				<!-- <input type="text" class="form-control border-0 rounded-0" placeholder="Email Address..."> -->
				<!-- <span class="input-group-btn"> -->
					<!-- <button class="btn btn-primary bg_blue border-0 rounded-3" type="button"> -->
						<!-- Subscribe Now </button> -->
				</span>
		</div>
	 </div>
	</div>
   </div>
 </div>
</section>

<section id="footer" class="p_3 bg_dark">
 <div class="container-xl">
   <div class="footer_1 row">
     <div class="col-md-4">
	  <div class="footer_1i">
	   <h3 class="text-white">About Us</h3>
	   <hr class="line mb-4">
	   <p class="col_light">Rosy Buds Bal Batika Secondary School was established in 2000 AD (2057 BS) as a private academic institute located in Lamahi-5, Kolahi, Dang district of Nepal. This secondary school is affiliated with the National Examinations Board (NEB) With (HSEB)  and approved by the Ministry of Education, Nepal.</p>
	   <ul class="social-network social-circle mb-0">
					<li><a href="https://www.facebook.com/profile.php?id=61553864685731" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.youtube.com/@ROSYBUDSOFFICIAL" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://www.collegenp.com/college/rosy-buds-bal-batika-secondary-school-dang/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<!-- <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-dribbble"></i></a></li> -->
				</ul>
	  </div>
	 </div>
	 <div class="col-md-2">
	  <div class="footer_1i">
	   <h3 class="text-white">Our Links</h3>
	   <hr class="line mb-4">
	   <div class="row footer_1ism">
		 <!-- <h6 class="fw-normal col-md-12 col-6"><a class="col_light" href="#"> Home</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="col_light" href="#"> About </a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="col_light" href="#"> Courses</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="col_light" href="#"> Contact Us</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6"><a class="col_light" href="#"> Blog</a></h6>
	 <h6 class="fw-normal mt-2 col-md-12 col-6 mb-0"><a class="col_light" href="#"> Services</a></h6> -->
	    </div>
	  </div>
	 </div>
	 <div class="col-md-3">
	  <div class="footer_1i">
	   <h3 class="text-white">After +2</h3>
	   <hr class="line mb-4">
	   <div class="row footer_1i1">
		     <div class="col-md-3 col-3 pe-0">
			  <div class="footer_1i1l">
			    <figure class="effect-jazz mb-0">
					<a href="https://amc.edu.np/"><img src="img/logo/amc.png" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="col-md-9 col-9">
			  <div class="footer_1i1r">
			   <p class="mb-1"><a class="col_light" href="https://amc.edu.np/">Ambikeshwari Campus</a></p>
			   <h6 class="col_oran mb-0">BCA , BSC.CS-IT ,BIM</h6>
			  </div>
			 </div>
	    </div><hr class="hr_1">
		<div class="row footer_1i1">
		     <div class="col-md-3 col-3 pe-0">
			  <div class="footer_1i1l">
			    <figure class="effect-jazz mb-0">
					<a href="https://micgd.edu.np/Default"><img src="img/logo/mark.png" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="col-md-9 col-9">
			  <div class="footer_1i1r">
			   <p class="mb-1"><a class="col_light" href="https://micgd.edu.np/Default">MARK INTERNATIONAL COLLEGE</a></p>
			   <h6 class="col_oran mb-0">BBS , MBS</h6>
			  </div>
			 </div>
				</div><hr class="hr_1">
		<div class="row footer_1i1">
		     <div class="col-md-3 col-3 pe-0">
			  <div class="footer_1i1l">
			    <figure class="effect-jazz mb-0">
					<a href="https://victoriacollege.edu.np/"><img src="img/logo/victoriya.png" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
			 </div>
			 <div class="col-md-9 col-9">
			  <div class="footer_1i1r">
			   <p class="mb-1"><a class="col_light" href="https://victoriacollege.edu.np/">VICTORIYA INTERNATIONAL COLLEGE</a></p>
			   <h6 class="col_oran mb-0">BBA Financial, BHM, MBA</h6>
			  </div>
			 </div>
	    </div>
	  </div>
	 </div>
	 <div class="col-md-3">
	  <div class="footer_1i">
	   <h3 class="text-white">Contact Us</h3>
	   <hr class="line mb-4">
	   <div class="footer_1riri row">
			 <div class="col-md-2 col-2">
			  <div class="footer_1riril">
			   <span class="bg_oran text-white rounded-circle d-inline-block text-center"><i class="fa fa-phone"></i></span>
			  </div>
			 </div>
			 <div class="col-md-10 col-10">
			  <div class="footer_1ririr">
			   <h6 class="mb-0  lh-base"><a class="col_light" href="#">+082-540075</a><br>
<a class="col_light" href="#">+082-540597</a><br>
<a class="col_light" href="#">+082-540523</a></h6>

			  </div>
			 </div>
			</div><hr class="hr_1">
			<div class="footer_1riri row">
			 <div class="col-md-2 col-2">
			  <div class="footer_1riril">
			   <span class="bg_oran text-white rounded-circle d-inline-block text-center"><i class="fa fa-envelope"></i></span>
			  </div>
			 </div>
			 <div class="col-md-10 col-10">
			  <div class="footer_1ririr">
			   <h6 class="mb-0  lh-base"><a class="col_light" href="mailto:rosybuds.school.lamahi@gmail.com">Click Here</a><br>
						<a class="col_light" href="mailto:rosybuds.school.lamahi@gmail.com">send mail to the school.</a>
			  </div>
			 </div>
			</div><hr class="hr_1">
			<div class="footer_1riri row">
			 <div class="col-md-2 col-2">
			  <div class="footer_1riril">
			   <span class="bg_oran text-white rounded-circle d-inline-block text-center"><i class="fa fa-map-marker"></i></span>
			  </div>
			 </div>
			 <div class="col-md-10 col-10">
			  <div class="footer_1ririr">
			   <a href="https://maps.app.goo.gl/oGJjUnczYJg1yRK46"><h6 class="mb-0 col_light lh-base">NEPAL, LUMBINI PROVINCE,
<br> Lamahi-5 Kolahi</h6></a>
			  </div>
			 </div>
			</div>
	  </div>
	 </div>
   </div>
 </div>
</section>

<section id="footer_b" class="pt-5 pb-5 bg_dark">
   <div class="container-xl">
    <div class="row footer_b1 text-center">
	 <div class="col-md-12">
			<img style="height : 100px;" src="img/staff/arya.png" alt="" class=""><br>
	   <p class="mb-0 text-white">All ® RIGHT RESERVED | DESIGN BY SON OF Mr. RAMESH CHAUDHARY<a  class="text-white fw-bold" href="http://chaudharyapar.com.np"><br>Mr. ARYA SINGH</a></p>
				
	 
			</div>
	</div>
   </div>
  </section>

<script>
window.onscroll = function() {myFunction()};
var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;
function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>
<script src="js/main.js"></script>

</body>

</html>