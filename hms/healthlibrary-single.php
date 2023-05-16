<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Health Library - DOC+</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto"><img src="assets/img/Doc+ logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="home.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="home.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="home.php#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="healthlibrary.php">Heath Library</a></li>
          <li><a class="nav-link scrollto" href="home.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:2% ">
								
							</li>
						
						
							<li class="dropdown current-user">
								<a data-toggle="dropdown-toggle">
									<img src="assets/images/patient.png" style="width:50px;height:50px;"> <span class="username">



									<?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullName'];
}
									?> <!--<i class="ti-angle-down"></i>--></i></span>
								</a>
								<ul class="dropdown-menu dropdown">
									<li>
										<a href="edit-profile.php">
											My Profile
										</a>
									</li>
								
									<li>
										<a href="change-password.php">
											Change Password
										</a>
									</li>
									<li>
										<a href="logout.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
              </ul>
            <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
            <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
              <div class="arrow-left"></div>
              <div class="arrow-right"></div>
            </div>
            <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
            
          
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav>
      <a href="book-appointment.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
</div>
      
  </header><!-- End Header -->

  <main id="main">
<br><br>
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
<br>
        <div class="d-flex justify-content-between align-items-center">
          <h2>Health Library</h2>

          <ol>
            <li><a href="home.php">Home</a></li>
            <li><a href="healthlibrary-single.php">Health Library</a></li>
            
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
              <h2 class="entry-title">
                <a href="blog-single.html">How stress impacts your body</a>
              </h2>
<br><br>
              <div class="entry-img">
                <img src="assets2/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

             
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                
                  <h3>What is Stress?</h3><br>
<p>Stress is something that happens to everyone and it’s your body’s way of responding to pressure and anxiety. It is often triggered by experiencing a sense of unfamiliarity, unexpectedness or a lack of control – which is bound to happen from time to time! This can develop into a sense of being overwhelmed and cause anxiety. Stress can impact your body in numerous ways, both mentally and physically. Stress can even affect your ability to think clearly. 
                </p>

                <blockquote>
                  <p>
                    Managing our stress levels is a vital part of maintaining a healthy lifestyle. Stress has major impacts on our bodies, and it is important to be on the lookout for symptoms of frequent stress. We’re looking at six ways stress can impact our mind and body and tools you can use to help decompress.
                  </p>
                </blockquote>
<p>There are a few ways to know if you are stressed by the way your body and mind feel. Here are a few symptoms to keep an eye out for:</p>
                <ul>
                  <li>Headaches</li>
                  <li>Increased heart rate</li>
                 <li>Dizziness or shaking</li> 
                <li>Anxiety, depression or irritability</li>
                <li>Frequent forgetfulness</li>
                <li>Trouble concentrating</li>
                </ul>
                  
                <h3>How Does Stress Affect Your Body?</h3>
                <ul>
                  <li>Mental Health</li>
                  <p>
                    Stress and mental health problems can go hand-in-hand. When stressed, it can reduce your enthusiasm for activities that you normally enjoy. This can increase your symptoms of stress which result in a struggle to complete everyday tasks like chores, eating healthy and staying active. Long-term stress also raises the risk of mental health issues such as anxiety and depression1. Reach out to a friend, family member or even a medical professional for help with managing stress. Working together, you can help reduce your worries and find your way to a healthier lifestyle.
                  </p>
                  <li>Sleep Insomnia</li>
                  <p>Do you ever feel like getting a good night’s rest when you’re stressed is nearly impossible? When you’re feeling stressed, your body has a hard time relaxing because it is releasing extra adrenaline and cortisol hormones, causing your heart rate to increase. This helps circulate blood to your muscles and organs quickly and efficiently. Your body does this to stay on high alert, which can cause sleep insomnia. While our bodies are often in an elevated state of alertness, it can cause us to have rapid, anxious thoughts at night which also make it difficult to rest. Insufficient sleep can then cause even more stress due to extreme exhaustion. According to the National Sleep Foundation2, a survey found that 43 percent of people aged 13 to 64 reported that they have a difficult time sleeping at night due to stress at least once a month.</p>
                </ul>
                
                <img src="assets2/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

              </div>

            </article><!-- End blog entry -->
            
   <article class="entry entry-single" id="1">

              
              <h2 class="entry-title">
                <a href="blog-single.html">Childhood Obesity: Stats & Tips</a>
              </h2>
              <br><br>
              <div class="entry-img"> 
                <img src="assets2/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>


              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>No one is immune to the risk of growing up at an unhealthy weight and childhood obesity cuts across all communities and all categories of race, ethnicity and family income. Approximately 17 percent of U.S. youth have obesity and nearly one in three children and adolescents are either overweight or have obesity. Below we have included a few more statistics on childhood obesity and some may surprise you.</p>
                <ul>
                  <li>Researchers estimate a staggering 9.4 percent of children ages 2 to 5 already have obesity.</li>
                  <li>The obesity rate of children aged 6 to 11 has also more than quadrupled during the past 40 years – from 4.2 to 17.4 percent – as well as tripled for adolescent’s ages 12 to 19, climbing from 6 to 12.6 percent according to NHANES.</li>
                 <li>An overweight adolescent has a 70 percent chance of becoming an overweight or obese adult.</li> 
                <li>6-to-8 year olds with obesity are approximately 10 times more likely to become obese adults than those with a lower body mass index.</li>
                <li>A third of the children born in 2000 in this country will develop diabetes during their lifetime.</li>
                <li>Since 1980, the obesity prevalence among children and adolescents has almost tripled.</li>
                <li>More than one in four 17-24-year-olds in the United States are now too heavy to serve in the military, a development that some retired military leaders have said endangers national security.</li>
                </ul>
                  <p>Now that we have seen some childhood obesity statistics, it’s important to remember that there are things we can do to help prevent this and allow our children to grow up healthier and reduce the chances of health related issues. It’s easy to say that all we have to do is eat healthier, but there are issues when it comes to this as well. At fast food places, unhealthier options are often cheaper and for some families, this food plays a pivotal role in allowing children to eat and not go hungry. Down below we have included some options that will help keep our children healthier that don’t necessarily involve diet changes.</p>
                  <img src="assets1/img/blog/1.jpg" class="img-fluid" alt="">
                  <h3>What can we do?</h3>
                <ul>
                  <li>Staying active:</li>
                  <p>
                    Physical activity is an important part of a child’s development and can play an important role in keeping them at a healthy weight. Regular physical activity has many health benefits for children including strengthening bones, decreasing blood pressure, reducing stress and anxiety and helping with weight management. It is recommended that children ages 3-5 stay active throughout the day while children ages 6-17 should be physically active for at least 60 minutes. Including aerobic activity is helpful, which is anything that makes your heart beat faster, while also including bone strengthening activities such as running or jumping and muscle strengthening activities like climbing and pushups. It’s also a good idea to add physical activity to your daily routine as the parent, since children are likely to imitate adult and parent behavior.
                  </p>
                  <li>Reduce sedentary time: </li>
                  <p>Quiet time for reading and homework is important too, but it’s a good idea to limit the time children spend watching TV or playing video games to no more than 2 hours per day. Encouraging children to find fun activities to do with family members or on their own will help encourage physical activity which they will hopefully learn to enjoy.</p>
                <li>Ensure adequate sleep:</li>
                <p>Too little sleep is associated with childhood obesity, in part because inadequate sleep makes us eat more and be physically less active. Children on average need more sleep than adults but how much varies by age.</p>
                </ul>
                
                </div>

              </article><!-- End blog entry -->
            
  <article class="entry entry-single" id="2">
    <h2 class="entry-title">
      <a href="blog-single.html">6 signs you may be dehydrated</a>
    </h2><br><br>

              <div class="entry-img">
                <img src="assets2/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

            
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <ul>
                  <li>Increased Thirst</li>
                  <p>While this symptom might seem like an obvious sign of dehydration, it’s worth noting that not every person who experiences dehydration feels really thirsty, especially young children and the elderly. To prevent dehydration, the National Academy of Sciences recommends that healthy men between 19 and 50 years of age should drink an average of 101 oz. of water, or 13 cups of water per day, and women between these same ages should drink 74 oz., or 9 cups of water per day.1 Keep in mind that each person requires a different amount of fluids based on personal health, physical activity and climate, among other factors – that’s why it’s always a good idea to talk to a health care provider before making changes in your drinking habits. And if water isn’t your favorite, that’s okay too – many foods and other beverages can help you stay hydrated in addition to water, including fruits, veggies and milk.</p>
                  
                  <li>Fatigue</li>
<p>Feeling tired and sluggish even after coffee? Surprisingly, dehydration may be the reason. Water helps regulate many bodily functions, including sending nutrients and oxygen to our cells and maintaining our levels of electrolytes, which both affect our perceived energy levels. When you’re dehydrated, you may feel more tired because these – and other important functions – aren’t running as smoothly. In fact, dehydrated individuals who lost between 2-3% of their body fluid weight reported feeling nearly twice as tired as those who were hydrated in one study. </p>
                 
                  <li>Dry Mouth</li> 
                  <p>There’s nothing worse than finishing a workout and feeling like you need to drink a whole gallon of water because your mouth is so dry. Okay…maybe there are worse things, but the point is that dry mouth is another sign of dehydration. While the feeling itself is uncomfortable, having a dry mouth for prolonged amounts of time can also lead to other problems, including gingivitis, also known as gum disease, tooth decay and mouth infections. To keep your dentist – and mouth – happy, be sure to pack a water bottle whenever you’re on the go to stay hydrated.</p>
                
                <li>Bad Breath</li>
                <p>Just as our mouths can be dry, they can also be less than minty fresh. And as you’ve probably guessed, dehydration may have something to do with it. Saliva (a.k.a. spit) helps your mouth break down food for further digestion and clean out bacteria and other unwanted substances, but if you’re dehydrated, you may not be able to make enough saliva to do the job, which allows bacteria to grow more quickly and contribute to that all-too-unpleasant smell. Instead of reaching for mouthwash next time your breath needs a tune-up, try grabbing a water bottle and see if it helps kick the stench, too.</p>
                
                <li>Trouble Urinating</li>
                <p>While everyone uses the bathroom a different number of times per day, if you haven’t had to use the bathroom very often, it may be because you don’t have enough fluids in your body to urinate normally. Similarly, if you use the bathroom and notice that your urine is a dark yellow color, you also may be dehydrated. Urine removes waste from the body that has been filtered out by the blood, making it an essential function to keep in check. Here’s a good rule of thumb to keep in mind: if your urine is clear or light yellow, you’re properly hydrated. If your urine is bright yellow or darker, reach for some water or another hydrating beverage.</p>
                
                <li>Feeling Hungry</li>
              <p>It’s one thing to feel hungry after not eating for hours, but it’s another to feel hungry only half an hour after finishing lunch. As it turns out, the same part of your brain that alerts you to hunger tells you when you’re thirsty, which can lead to overlapping signals, or sometimes getting the signals mixed-up altogether. If you’ve eaten within the past 2-3 hours, try reaching for a cold glass of water rather than that afternoon snack and see if that rumbling tummy settles down.</p>  
                
              
              </ul>
                  
                  <img src="assets2/img/blog/2.jpg" class="img-fluid" alt="">
                  
            </article><!-- End blog entry -->

            <article class="entry entry-single" id="3">
              <h2 class="entry-title">
                <a href="blog-single.html">Sports Physicals: Everything You Need to Know</a>
              </h2><br><br>

              <div class="entry-img">
                <img src="assets2/img/blog/blog-4.jpg" alt="" class="img-fluid">
              </div>

             
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <h3>What is a sports physical?</h3>
                <p>A sports physical exam or pre-participation physical examination (PPE) is used to help determine whether or not it’s safe for a child to participate in a certain sport. These exams usually contain two main parts that include questions about your medical history, in addition to the physical exam. It’s important to note that a sports physical for your child does not replace the need for a regular annual check-up because a sports physical is more focused on your child’s health history or problems that will have an impact on their ability to play a sport. Below, we have listed a few questions and tests to expect when receiving a sports physical.</p>
                
                <h3>Who needs a sports physical?</h3>
                <p>If you are not sure if your child needs a sports physical, then the answer is probably yes. In most states, it is required that all student-athletes must complete a physical before they will be allowed to participate in a school-sanctioned sport or in activities such as the marching band. It is also not uncommon for student-athletes who are playing club or recreational sports to also be required to pass a sports physical before they are allowed to participate.</p>
                  
                  <img src="assets1/img/blog/3.jpg" class="img-fluid" alt="">

                  <h3>Why does my child need a physical?</h3>
                  <p>As you’ve read about what a sports physical entails and who needs them, you may still be asking, why? Many parents take their children to the doctor at least once a year for their normal scheduled check-up so it might feel a bit redundant or unnecessary to have to do any additional exam. However, as great as sports can be for our bodies, it can also sometimes be difficult and lead to injuries or the magnification of other health problems. Physicals are important because they allow a provider who is focused on one’s ability to play sports safely, to detect a medical condition or injury beforehand that could end up causing serve complications later. With a physical, the focus is on those important screening areas like the lungs and heart, so early detection could very well be life-saving.</p>
                  
                  <h3>When should my child get a sports physical? How long do they last?</h3>
                  <p>Sports physicals are usually required to be performed once a year or before your child’s sports season is set to begin. It is recommended that your child obtains their physical around 6 weeks before the sports season begins, because it gives adequate time to address any issues that may come up. Cutting it to close to the first practice could prevent your child from playing and may cause them to miss a significant amount of time.</p>

              </article><!-- End blog entry -->

           <!-- <div class="blog-comments">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets1/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div>--><!-- End comment #1 -->

             <!--<div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets1/img/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                  </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                    <div class="comment-img"><img src="assets1/img/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan, 2020</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets1/img/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div>--> <!-- End comment reply #2-->

               <!--</div>--> <!-- End comment reply #1-->

             <!-- </div>--><!-- End comment #2-->

             <!--<div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets1/img/blog/comments-5.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                      Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                    </p>
                  </div>
                </div>

              </div>--> <!-- End comment #3 -->

            <!--<div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets1/img/blog/comments-6.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                    </p>
                  </div>
                </div>

              </div>-->  

              <!--<div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>-->

              

          <!--  </div>--><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <!--<h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>--><!-- End sidebar search formn-->

              <!--<h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div>--><!-- End sidebar categories-->

              <h3 class="sidebar-title">Insight</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets2/img/blog/blog-2.jpg" alt="">
                  <h4><a href="blog-single.html#1">Childhood Obesity: Stats & Tips</a></h4>
                 
                </div>

                <div class="post-item clearfix">
                  <img src="assets2/img/blog/blog-3.jpg" alt="">
                  <h4><a href="blog-single.html#2">6 signs you may be dehydrated</a></h4>
                 
                </div>

                <div class="post-item clearfix">
                  <img src="assets2/img/blog/blog-4.jpg" alt="">
                  <h4><a href="blog-single.html#3">Sports Physicals: Everything You Need to Know</a></h4>
                
                </div>

                <div class="post-item clearfix">
                  <img src="assets2/img/blog/blog-1.jpg" alt="">
                  <h4><a href="blog-single.html">How stress impacts your body</a></h4>
                 
                </div>

               

              </div><!-- End sidebar recent posts-->

             <!-- <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>--><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DOC+</h3>
            <p>
              578 Elvitigala Mawatha <br>
              Colombo,00500<br>
              Sri Lanka <br><br>
              <strong>Phone:</strong> +94 11 333 3333 <br>
              <strong>Email:</strong> contact@DOC+.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-Channeling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Online Consulting </a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <img src="assets/img/Doc+ logo.png" alt="" class="img-fluid">
            <br/><br/>
            <h4 class="text-center" >Your Health, Our Priority</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>DOC+</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by Team Inferno</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
         <a href="https://twitter.com/GotabayaR" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/gotabayar" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/gotabayar/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!--<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">-->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>--><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/purecounter/purecounter.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>