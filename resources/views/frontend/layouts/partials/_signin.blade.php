<div id="loginBox">  
	<form action="{{ route('login') }}" method="post" id="loginForm">
	{{ csrf_field() }}
		<fieldset id="body">
			<fieldset>
				<label class="{{ $errors->has('username') ? ' has-error' : '' }}" for="username">{{ trans('users.username') }}</label>
				<input type="text" name="username" id="username">
				@if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
			</fieldset>
			<fieldset>
				<label class="{{ $errors->has('password') ? ' has-error' : '' }}" for="password">{{ trans('users.password') }}</label>
				<input type="password" name="password" id="password">
				@if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
			 </fieldset>
			<input type="submit" id="login" value="Sign in">
			<label for="checkbox"><input type="checkbox" id="checkbox"> <i>{{ trans('users.remember') }}</i></label>
		</fieldset>
		<span><a href="#">{{ trans('users.forgot_password') }}</a></span>
	</form>
</div>