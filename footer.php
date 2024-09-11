<footer>
<div id="inner-footer">
<div id="hours">
<h4>Hours</h4>
<h5>11am - 2am Monday - Sunday</h5>
<h4>Kitchen Hours</h4>
<h5>11am - 9pm Monday - Sunday</h5>
</div>
<!-- end hours -->  
<div id="address">
<h5>808 Post Avenue</h5>
<h5>Seattle, WA 98104</h5>
<h5>206 225-9994</h5>
</div>
<!--  end address --> 
</div>
<div id="footer_info">
<ul>
<li>Copyright &copy; <?php echo date('Y') ; ?></li>
<li>All Rights Reserved</li>
<li><a href="">Web Design by LaMonte Golden</a></li>
<li><a href="https://validator.w3.org/">Valid HTML</a></li>
<li><a href="https://css-validator.org/">Valid CSS</a></li>
</ul>

</div>


</footer>

<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>

		<?php wp_footer(); ?> 

</body>
</html>