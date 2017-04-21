<!-- ===============================   Start Footer   ========================= -->
	<div class="footer">
		<div class="copy-right">
		  Copyright  &copy Shop-2017.All rights reserved
		 </div>
		 <div class="social unlisted">
		 <h4>Follow Us</h4>
		 	<ul class="list-unstyled">
		 		<li class="face">
		 			<a href="{{getSetting('facebook')}}" target="_blank">
		 				<i class="fa fa-facebook fa-2x btn btn-primary "></i>
		 			</a>
		 		</li>
		 		<li class="tube">
		 			<a href="{{getSetting('youtube')}}" target="_blank">
		 				<i class="fa fa-youtube fa-2x btn btn-danger "></i>
		 			</a>
		 		</li>
		 		<li class="twit">
		 			<a href="{{getSetting('twitter')}}" target="_blank">
		 				<i class="fa fa-twitter fa-2x btn btn-info "></i>
		 			</a>
		 		</li>
		 		
		 		<li class="google">
		 			<a href="{{getSetting('googleplus')}}" target="_blank">
		 				<i class="fa fa-google-plus fa-2x btn btn-danger"></i>
		 			</a>
		 		</li>
		 	</ul>
		 </div>
	</div>
	<!-- ===============================   End Footer   ========================= -->
			{!! Html::script('website/js/jquery-3.1.1.js') !!}

		{!! Html::script('website/js/bootstrap.min.js') !!}
		
		{!! Html::script('website/js/plugin.js') !!}
	
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>