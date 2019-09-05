<aside id="mainSidebar">
	<section>
		<label for="dsearch" class="hidden" id="directorySearch">Directory Search: </label>
		<input type="text" name="dsearch" class="text-input" aria-labelledby="directorySearch" id="sidebar-filter" value="" placeholder="Search our staff..." />
		<img class="directorySearchIcon" src="//globalassets.provo.edu/image/icons/search-lt.svg" alt="" />
	</section>
	<section>
		<h1>Faculty &amp; Staff</h1>
			<?php echo do_shortcode( '[facultyMenu]' ); ?>
	</section>
	<section>
		<h1>Teachers by Category</h1>
			<ul>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-by-category/#special">Special Education</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-by-category/#speech">Speech/Language</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-by-category/#ot">OT/PT</a></li>
			</ul>
	</section>
</aside>