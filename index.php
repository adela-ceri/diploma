<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
					<div class="row">
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/img2.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/img1.png" alt="Second slide">
		                  </div>
		                  <!-- <div class="item">
		                    <img src="images/img4jpg" alt="Third slide">
		                  </div> -->
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
	        </div>

	      </section>
				<section id="about" class="content">
			      <div class="row">
		          <h2>Rreth Nesh </h2>
		      		<p style="font-style: normal;font-size: large;color:black;">

							Ky website , është ndërtuar për t'iu ardhur në ndihmë të gjithë pjesës së shoqërisë të cilët janë në nevojë. <br>
							Skema e Ndihmës Ekonomike përfshirë dhe Pagesën e Aftësisë së Kufizuar , është shtylla kryesore e programit të mbrojtjes sociale
							e cila ka për qëllim  zbutjen dhe lehtësimin e varfërisë, duke siguruar pagesa dhe mbështetjen e familjeve dhe individëve më në
							nevojë, për të dalë nga varfëria dhe për të gjetur mundësitë e riintegrimit social dhe ekonomik.
							Të gjithë njerëzit meritojnë që të paktën nevojat fiziologjike t’i kenë të përmbushura , të jenë të integruar në shoqërinë
							 Shqiptare dhe mbi të gjitha të kenë gjithë suportin e të gjithëve ne.

	        		</p>
			      </div>
			  </section>

			  <section id="services" class="content">
			      <div class="row">
			          <h2>Shërbimet që ne ofrojmë</h2>
								<p style="font-style: normal;font-size: large;color:black;">
								Shërbimet të cilat ofrohen nga ky website janë: <br>
								Pikë së pari zgjedhse cilës kategori i përket, NE (Ndihma Ekonomike) ose PAK (Pagesa e Aftësisë së Kufizuar).
								Kjo bëhet e mundur pasi të jeni regjistruar në këtë website. <br>
								Pas përzgjedhjes së kategorisë kryesore zgjidhet nënkategoria përkatëse për te bërë aplikimin online në mënyrë që të  përfitoni këto ndihma.
								 Ndihma Ekonomike përmban gjithesej 6 nënkategori, dhe Pagesa e Aftësisë së Kufizuar përmban 4 nënkategori.

		        		</p>
			      </div>
			  </section>

				<section id="contact" class="content">
			      <div class="row">
			        <div class="col-md-12">
			          <h2 class="ser-title">Na Kontaktoni</h2>
			          <hr class="botm-line">
			        </div>
			        <div class="col-md-4 col-sm-4">
			          <h3>Informacion Rreth Kontaktimit</h3>
			          <div class="space"></div>
			          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Bulevardi Gjergj Fishta</p>
			          <div class="space"></div>
			          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>sherbimetsociale@gmail.com</p>
			          <div class="space"></div>
			          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+355 *********</p>
			        </div>
			        <div class="col-md-8 col-sm-8 marb20">
			          <div class="contact-info">
			            <h3 class="cnt-ttl">Për cdo pyetje te derguar do ju kthehet pergjigje brenda 24 orëve!</h3>
			            <div class="space"></div>
			            <form action="contactUs.php" method="POST" class="contactForm">
			              <div class="form-group">
			                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Emri" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
			                <div class="validation"></div>
			              </div>
			              <div class="form-group">
			                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
			                <div class="validation"></div>
			              </div>
			              <div class="form-group">
			                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subjekti" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
			                <div class="validation"></div>
			              </div>
			              <div class="form-group">
			                <textarea class="form-control br-radius-zero" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mesazhi"></textarea>
			                <div class="validation"></div>
			              </div>

			              <div class="form-action">
			                <button type="submit" class="btn btn-form" name="contactAdd">Dergo</button>
			              </div>
			            </form>
			          </div>
			        </div>
			      </div>
			  </section>
	    </div>
	  </div>

  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
