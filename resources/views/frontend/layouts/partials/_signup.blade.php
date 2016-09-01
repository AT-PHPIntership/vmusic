<!-- signup -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body modal-spa">
				<div class="sign-grids">
					<div class="sign">
						<div class="sign-right">
							<form action="{{ url('/register') }}" method="post">
								{{ csrf_field() }}
							<h3>Create your account </h3>
								<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
								<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">	
								<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
								
								<input type="submit" value="CREATE ACCOUNT" >
							</form>
							<div class="sign-left">
								<a class="fb" href="#"><i></i>FACEBOOK</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>								
					</div>
					<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //signup -->