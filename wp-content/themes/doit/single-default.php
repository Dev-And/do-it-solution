<?php
/**
 * @package WordPress
 * @subpackage do-it
*/
get_header(); ?>

<div class="inner-page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php if (is_single('2496')) { ?>

	<div class="current-work kartunix">
		<div class="first-section clearfix">
			<h1></h1>
			<div class="info">
				<h2>Kartunix</h2>
				<p>Internet just became more interesting with Kartunix.</p>
				<ul>
					<li>Responsive and fast UI</li>
					<li>Optimized colourful system</li>
					<li>High Load Speed</li>
					<li>Web-service development</li>
				</div>
				<div class="preview">
					<img src="<?php bloginfo('template_url'); ?>/img/p_kartunix/1st.png" class="first">
					<img src="<?php bloginfo('template_url'); ?>/img/p_kartunix/2nd.png" class="second">
				</div>
			</div>
			<div class="section">
				<div class="container clearfix">
					<div class="description">
						<p>If you ain't got that one super shot of yourself for your profile picture then your online presence will be missing some salt. Profile pictures have invaded everything to such an extend that it is practically impossible to avoid them. You find them on social profiles, blog posts, discussion groups, sharing websites, virtual worlds, gaming networks, chat clients, internet call platforms. They jump at you while logging on to your chosen PC operating system, your mobile phone, your preferred gaming console or even your most recent camera. They come in many flavours, be it user profiles, contact list details, chat buddies. Kartunix - service, which will help users to solve all these problems.<br><br>
							<strong>Technologies we used here are:</strong><br><br>
							- <strong>Node.js</strong> as a backend framework.<br>
							- <strong>Angular</strong> as a main frontend framework.<br>
							- <strong>MongoDB</strong> as a database since it provides a great flexibility absolutely needed in such kind of tasks.</p>
						</div>
					</div>
				</div><!-- section -->
				<div class="section">
					<div class="container clearfix">
						<div class="screen">
							<img src="<?php bloginfo('template_url'); ?>/img/p_kartunix/1.jpg">
						</div>
					</div>
				</div><!-- section -->
				<div class="section">
					<div class="container clearfix">
						<div class="description">
							<b>AVATAR CONSTRUCTOR</b>
							<p>Our goal was to provide a powerful tool for all kinds of avatars customization. That task was really challenging, since it was absolutely necessary to make constructor work extremely fast, all the transitions nearly instantaneous and process large amounts of media data (avatars collections, pics) at the same time. <br>
								For the realisation we decided to use <strong>Fabric.js</strong> framework for the pics drawing and <strong>OwlCarousel2</strong> for displaying elements in a user-friendly manner. Undoubtedly, we went beyond the standard with backend development, providing crazy optimizations and speeding the server performance.</p>
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container clearfix">
							<div class="screen">
								<img src="<?php bloginfo('template_url'); ?>/img/p_kartunix/2.jpg">
							</div>
						</div>
					</div><!-- section -->
					<div class="section">
						<div class="container clearfix">
							<div class="description clearfix">
								<b>COLLECTIONS</b>
								<p>Avatars are a bit like logos. Graphical in nature, as the user's alter ego they are ment to identify values, highligthing certain aspects of the persona and downplaying others. Avatars represent the individual and are designed for easy recognition and to generate favourable thoughts and feelings. This is why the Kartunix engine manages layered SVGs. This is how the user's avatar is personalized, by changing hair styles, forms of nose and mouth. Further, Kartunix works with more than just one avatar set. This allows for the configuration of various styles or types of avatars, be they human, aliens or animals. Storing all that non-typed data is what the <strong>MongoDB</strong> was created for, so we have designed the database architecture with usage of best known practices to avoid delays in fetching that information. Collections processing is an interesting topic, too, because it is the place where the mathematics comes in to provide as fast as possible data scope handling. For now, we can only tell you that there is a crazy data tree-processing stuff presented :)
								</p>
							</div>
						</div>
					</div><!-- section -->
					<div class="section">
						<div class="wide-screen">
							<img src="<?php bloginfo('template_url'); ?>/img/p_kartunix/total_n.jpg">
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="description clearfix">
								<b>RESPONSIVE</b>
								<p>The current demands of the online arena requires adaptability, flexibility, and automation. By implementing a responsive design, the screen layout is expanded which, in turn, allows more valuable space for advertisements. We built a framework for content to be viewed on any platform-mobile, desktop, and tablet. Responsive design allows streamlined menus that simplifies user interaction. Additionally, the option to give an advertisement a fixed position, that  directs the attention to the most important content while decreasing visual noise.</p>
							</div>
						</div>
					</div><!-- section -->
					<div class="section">
						<div class="container clearfix">
							<div class="devices">
								<img src="<?php bloginfo('template_url'); ?>/img/p_kartunix/devices_n.jpg">
							</div>
						</div>
					</div><!-- section -->
				</div>
	
	<?php } elseif (is_single('2491')) { ?>

	<div class="current-work retrotax">
		<div class="header">
			<div class="container">
				<sppan class="logotip"></span>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="info">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div>
					<h2 style="padding-top: 0px;">Cooperation</h2>
				</div>
				<div class="description" style="text-align: justify;">
					<p>Over the last year, Do IT has helped RetroTax improve their workflow by optimising existing applications and providing new technical solutions. In the 21st century, automation, stable CRM, and a team available on-call day and night to solve any technical problem is essential to any business. In terms of our partnership with RetroTax, Do IT designed, built, and maintained several outstanding applications to streamline their work processes. <strong> Do IT utilised a range of technologies including:</strong>
					<br>
					<div style="text-align:center;">
						<div style="width: 33%; float:left;">
							- <strong>Node.js</strong><br>
							- <strong>Coldfusion</strong><br>
							- <strong>Java</strong><br>
						</div>
						<div style="width: 33%; float:left;">
							- <strong>AngularJS</strong><br>
							- <strong>MongoDB</strong><br>
							- <strong>jQuery</strong><br>
						</div>
						<div style="width: 33%; float:left;">
							- <strong>Bootstrap</strong><br>
							- <strong>Selenium</strong><br>
							- <strong>MSSQL</strong><br>
						</div>
					</div>
					<br>
					<br>
				</div>
				<br>
				<br>
				<div>
					<center>
						<h3>Please find a short brief about each solution provided below:</h3>
					</center>
				</div>
				<br>
				<div class="modules">
					<div class="row clearfix">
						<div class="b-wrap">
							<div class="block modal-trigger m1">
								<div class="info">
									<h2>Plugin</h2>
									<span class="button">view</span>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/plugin.png">
							</div>
						</div>
						<div class="b-wrap">
							<div class="block modal-trigger m2">
								<div class="info">
									<h2>FEZ</h2>
									<span class="button">view</span>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/fez.png">
							</div>
						</div>
						<div class="b-wrap">
							<div class="block modal-trigger m3">
								<div class="info">
									<h2>Selenium</h2>
									<span class="button">view</span>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/selenium.png">
							</div>
						</div>
						<div class="b-wrap half">
							<div class="block modal-trigger m4">
								<div class="info">
									<h2>TCID</h2>										
									<span class="button">view</span>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/tcid.png">
							</div>
						</div>
						<div class="b-wrap half">
							<div class="block modal-trigger m5">
								<div class="info">
									<h2>Watson</h2>										
									<span class="button">view</span>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/watson.png">
							</div>
						</div>
					</div>
				</div><!-- modules -->
			</div><!-- container -->
		</div><!-- content -->
	</div><!-- current work -->


	<div class="modules-overlay"></div>

	<!-- Plugin -->
	<div class="module-modal modal1 clearfix">
		<span class="module-modal-close"></span>
		<div class="left">
			<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/plugin.png">
		</div>
		<div class="right">
			<h2>Plugin</h2>
			<p>The RetroTax Plugin is a configurable, easy-to-use application built for their clients, alliance partners, and partnering organizations to screen job seekers, applicants, and new hires for a range of tax credits. The plugin has 3 different modes for use with On-Boarding Systems, Applicant Tracking Systems, and Pre-Qualification Screening. This web-solution, which can be built in your website, provides a fast and convenient way for registering new employees in RetroTax's proprietary screening application Tax Credit ID (TCID).</p>

			<h3>Module features:</h3>
			<ul class="features">
				<li>- jQuery</li>
				<li>- Bootstrap</li>

			</ul>
		</div>
	</div>
	<!-- FEZ -->
	<div class="module-modal modal2 clearfix">
		<span class="module-modal-close"></span>
		<div class="left">
			<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/fez.png">
		</div>
		<div class="right">
			<h2>FEZ</h2>
			<p>This single page application is an internal business application used by RetroTax to consume and validate addresses to determine their location in relation to geographic zones, which would qualify them for tax credits.</p>

			<h3>Module features:</h3>
			<ul class="features">
				<li>- NodeJS</li>
				<li>- Mongo DB</li>
	  			<li>- Google Maps API</li>
				<li>- Google Fusion Tables</li>
				<li>- OpenShift (PaaS)</li>
			</ul>
		</div>
	</div>
	<!-- SELENIUM -->
	<div class="module-modal modal3 clearfix">
		<span class="module-modal-close"></span>
		<div class="left">
			<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/selenium.png">
		</div>
		<div class="right">
			<h2>SELENIUM</h2>
			<p>An internal application used by RetroTax. The Selenium application executes parallel tests via its web-interface's configuration panel, which includes options to run tests in varying OSs, browsers, and versions.</p>

			<h3>Module features:</h3>
			<ul class="features">
				<li>- NodeJS</li>
				<li>- Java</li>
				<li>- Selenium</li>
				<li>- Browserstack</li>
				<li>- Amazon AWS</li>
				<li>- AngularJS</li>
			</ul>
		</div>
	</div>
	<!-- TCID -->
	<div class="module-modal modal4 clearfix">
		<span class="module-modal-close"></span>
		<div class="left">
			<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/tcid.png">
		</div>
		<div class="right">
			<h2>Tax Credit ID (TCID)</h2>
			<p>TCID is RetroTax's proprietary tax credit screening platform.  The TCID CRM system screens and stores employee data, creates and manages a massive number of PDF documents, handles tax calculations, among much more.  Do IT built new core features, including a Google Drive API integration, built custom API gateways with RetroTax partners, and maintained the application.</p>

			<h3>Module features:</h3>
			<ul class="features">
				<li>- Coldfusion</li>
				<li>- CfWheels</li>
				<li>- jQuery</li>
				<li>- MSSQL</li>
				<li>- Google Drive API</li>
				<li>- Amazon AWS</li>
			</ul>
		</div>
	</div>
	<!-- WATSON -->
	<div class="module-modal modal5 clearfix">
		<span class="module-modal-close"></span>
		<div class="left">
			<img src="<?php bloginfo('template_url'); ?>/img/p_retrotax/modules/watson.png">
		</div>
		<div class="right">
			<h2>Watson</h2>
			<p>Document recognition tool with web-interface. Works with local user's file system. Classifies documents via IBM Watson service and uploads them to TCID.</p>

			<h3>Module features:</h3>
			<ul class="features">
				<li>- NodeJS</li>
				<li>- jQuery</li>
				<li>- Bootstrap</li>
				<li>- Watson API</li>
				<li>- Tesseract</li>
			</ul>
		</div>
	</div>

	<?php } elseif (is_single('2507')) { ?>
	
	<div class="current-work cheers">
		<div class="first-section clearfix">
			<div class="wrap clearfix">
				<div class="info">
					<h2>Cheers</h2>
					<p>Find a company for an evening.</p>
					<ul>
						<li>Random video conferences</li>
						<li>Multimedia streaming</li>
						<li>Social networks integration, UX and a lot of other stuff</li>
					</ul>
				</div>
				<div class="preview">
					<img src="<?php bloginfo('template_url'); ?>/img/p_cheers/first.jpg" class="first">
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container clearfix">
				<div class="description">
					<p>Cheers is an innovative kind of a chat roulette, innovation being the possibility for several users to communicate simultaneously, due to the fact that the connection and transmission of the video image from the camera to the server is based on principles of a conference.</p>
					<p>The project of chat is written in Java script and Stack MEAN. For the participation in the video chat there must be a web camera, a microphone and a flash player programme set on the computer. Meeting and further communication in Cheers is much quicker than in ordinary chat roulette.</p>
					<p>In fact, you can see several interlocutors at the same time and and decide whether you are interested or not.  If you are not interested in other users, you can easily swap to others, even three at once. The ban system is well-arranged in chat, the violators are to be punished, so users have to behave in a civilized manner in order to be treated the same.</p>
			</div>
		</div>
	</div>
	<!-- section -->
	<div class="section">
		<div class="wide-screen">
			<img src="<?php bloginfo('template_url'); ?>/img/p_cheers/mac_b.jpg">
		</div>
	</div>
	<div class="section">
		<div class="container clearfix">
			<div class="description">
				<p> Thousands of users visit the video chat site daily to find new friends and communicate in the web. Many users come to chat site to entertain themselves and rest from their  everyday work. Simple menu to manage and access your information and app functions.  As it is seen on a screenshot, it is simple enough to manage the chat and intuitively clear for every user. The chat will be extremely useful for people who wished to have  some  language practice but could not have it for some reasons. </p>
				<p> In fact, with the help of our chat you will easily meet someone from a foreign country. You can communicate with several people simultaneously or in a private chat with a friend. Talking to someone in chat in a real time is an achievement of technical progress. See if you are comfortable in this communication, if it is good for you and what you get from it.  At a present time chat allows you to make a quick search through the list of users. For the comfort of our users there is a search filter in the app - you can search by name, online presence, sexual preferences.</p>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="wide-screen">
			<img src="<?php bloginfo('template_url'); ?>/img/p_cheers/share.jpg">
		</div>
	</div>
	<div class="section">
		<div class="container clearfix">
			<div class="description">
				<p>Creative and talented specialists present to your attention - Cheers. The system is constantly updated in order to fully realize the full potential of online communication.
					A team of developers is constantly inspired, following the reviews and suggestion of those, for whom the video chat had become a faithful helper and a friend. Every user can count on high-level services:</p>
					<ul style="list-style-type: circle;">
						<li>excellent sound and quality of image;</li>
						<li>comfortable management;</li>
						<li>variety of  useful functions;</li>
						<li>adherence of agreement.</li>
					</ul>
					<p><br> All these advantages become obvious the first time using Cheers. Chat is created for everyone who values their time and wishes to spend it with pleasure and avail.
					</p>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="wide-screen">
				<img src="<?php bloginfo('template_url'); ?>/img/p_cheers/statistic.jpg">
			</div>
		</div>
		<div class="section">
			<div class="container clearfix">
				<div class="description">
					<p>Possibly, just as you might be, there is someone out there today, who feels lonely and  a  bit sad. Wishing  for  emotions to be shared, to feel supported and to have faith in one`s own powers. Or wishing to share news from around the worls about fashion or cars, or anything at all. The best video chat works round-the-clock, connecting your ideas, hearts and feelings. Choosing our video chat, you get maximally complete and reliable information about your companions, their appearance, character, style of communication. With us even  an ordinary conversation grows into new possibilities, enthralling adventures and unforgettable experiences.</p>
				</div>
			</div>
		</div>

		<!-- section -->
	</div><!-- current work -->

	<?php } elseif (is_single('2509')) { ?>

	<div class="current-work hit">
		<div class="first-section clearfix">
			<div class="wrap clearfix">
				<div class="info">
					<h2>HIT</h2>
					<p>Interview whoever you want all over the world.</p>
					<ul>
						<li>High load architecture</li>
						<li>Great performance algorithms</li>
						<li>Data Migration</li>
						<li>Multimedia streaming and recording</li>
					</ul>
				</div>
				<div class="preview">
					<img src="<?php bloginfo('template_url'); ?>/img/p_hit/1.jpg" class="first">
					<img src="<?php bloginfo('template_url'); ?>/img/p_hit/3.jpg" class="second">
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container clearfix">
				<div class="description">
					<br><br>
					<p>The technology of HIT, which makes it possible to conduct online video interview, is simply irreplaceable in finding the employee for an out-of-office work. That is why a competent psychologist is able to get maximum of useful information during the live communication which a questionnaire or testing is simply unable to give. In fact, while choosing future employee, gestures, manner of speach, character, a way to put  yourself and general appearence can tell a lot about a person . The technology of HIT gives you exactly this priceless possibility of live communication.
					</p>
					<ul style="list-style-type:circle;">
						<li>
							Online interview saves time and resources for both employer and potential employee.
						</li>
						<li>Potential employee, while having an interview in a home environment, feels calmer, more confident and less exposed to stress.
						</li>
						<li>An interviewer can not cause stressful situation for the candidate because there is no direct communication. Although it is certainly necessary to set some non-standard questions.</li>
					</ul>

				</div>
			</div>
		</div>
		<!-- section -->
		<div class="section">
			<div class="wide-screen" style="background: #d9d9d9; padding: 80px 0;">
				<div class="container">
					<img src="<?php bloginfo('template_url'); ?>/img/p_hit/2.jpg">
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container clearfix">
				<div class="description">
					<p>Two types of interview are foreseen in the system - synchronous and asynchronous. Synchronous means having an interview in a live video chat (just like in  Skype), where one or a few reviewers communicate with applicants in real time. Asynchronous - applicant answers some questions concerning the certain vacancy on camera.
					</p>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="wide-screen" style="background-color: #304051; margin-bottom: 0; padding: 80px 0;">
				<img src="<?php bloginfo('template_url'); ?>/img/p_hit/sheme.jpg">
			</div>
		</div>
		<div class="section">
			<div class="container clearfix">
				<div class="description"><br><br>
					<p>Using the Hit technology will benefit you in many ways. Here are just some of them:</p>
					<ul style="list-style-type: circle;">
						<li>You can conduct much more interviews with potential employees;</li>

						<li>You can vastly extend the circle of search of candidate because it will not be difficult for you to conduct a real-time interviews with someone who live in the different parts of city or even in different regions.It is highly convinient in cases when you are looking for someone to work out of office. Due to the fact that online interview is much more comfortable both for the employer and the applicant, the dialog will be highly productive.</li>

						<li>The precious time that is usually spent on the road and sometimes the expectation of the interview itself can be put into much more important issues.</li><li>During the selection of employee for remote work you already direct your attention in socializing with him online, this way you can be sure that this man is abreast with time and mastering new technologies for him is no problem.</li>
					</ul>
				</div>
			</div>
		</div><!-- section -->
	</div><!-- current -->
	<?php } ?>
	
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>