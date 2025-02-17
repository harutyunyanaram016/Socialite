<!-- main-section -->
<!-- <div class="main-content"> -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="post-filters">
					<?php echo Theme::partial('usermenu-settings'); ?>

				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
				
					<div class="panel-heading no-bg panel-settings">
					<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<h3 class="panel-title">
							<?php echo e(trans('common.general_settings')); ?>

						</h3>
					</div>
					<div class="panel-body nopadding">
						<div class="socialite-form">							
							<form method="POST" action="<?php echo e(url('/'.$username.'/settings/general/')); ?>">
								<?php echo e(csrf_field()); ?>

								<div class="row">
									<div class="col-md-6">

										<fieldset class="form-group required <?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
											<?php echo e(Form::label('username', trans('common.username'))); ?>

											<?php echo e(Form::text('new_username', Auth::user()->username, ['class' => 'form-control', 'placeholder' => trans('common.username')])); ?>

											<?php if($errors->has('username')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('username')); ?></strong>
											</span>
											<?php endif; ?>
										</fieldset>
										
									</div>
									<div class="col-md-6">
										<fieldset class="form-group required <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
											<?php echo e(Form::label('name', trans('common.fullname'))); ?>

											<?php echo e(Form::text('name', Auth::user()->name, ['class' => 'form-control', 'placeholder' => trans('common.fullname')])); ?>

											<?php if($errors->has('name')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('name')); ?></strong>
											</span>
											<?php endif; ?>
										</fieldset>
									</div>
								</div>
								<fieldset class="form-group">
									<?php echo e(Form::label('about', trans('common.about'))); ?>

									<?php echo e(Form::textarea('about', Auth::user()->about, ['class' => 'form-control', 'placeholder' => trans('messages.about_user_placeholder')])); ?>

								</fieldset>

								<div class="row">
									<div class="col-md-6">
										<fieldset class="form-group required <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
											<?php echo e(Form::label('email', trans('auth.email_address'))); ?>

											<?php echo e(Form::email('email', Auth::user()->email, ['class' => 'form-control', 'placeholder' => trans('auth.email_address')])); ?>

											<?php if($errors->has('email')): ?>
											<span class="help-block">
												<strong><?php echo e($errors->first('email')); ?></strong>
											</span>
											<?php endif; ?>
										</fieldset>
									</div>
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('birthday', trans('common.birthday'))); ?>

											

											<div class="input-group date datepicker">

												<span class="input-group-addon addon-left calendar-addon">
													<span class="fa fa-calendar"></span>
												</span>
												<?php echo e(Form::text('birthday', Auth::user()->birthday, ['class' => 'form-control', 'id' => 'datepicker1'])); ?>

												<span class="input-group-addon addon-right angle-addon">
													<span class="fa fa-angle-down"></span>
												</span>
											</div>
										</fieldset>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<fieldset class="form-group required">
											<?php echo e(Form::label('gender', trans('common.gender'))); ?>

											<?php echo e(Form::select('gender', array('male' => trans('common.male'), 'female' => trans('common.female'), 'other' => trans('common.none')), Auth::user()->gender, array('class' => 'form-control'))); ?>										
										</fieldset>
									</div>
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('city', trans('common.current_city'))); ?>

											<?php echo e(Form::text('city', Auth::user()->city, ['class' => 'form-control', 'placeholder' => trans('common.current_city')])); ?>

										</fieldset>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('country', trans('common.country'))); ?>

											<?php echo e(Form::text('country', Auth::user()->country, array('class' => 'form-control', 'placeholder' => trans('common.country')))); ?>

										</fieldset>
									</div>
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('timezone', trans('common.timezone'))); ?>

											<?php echo e(Form::select('timezone',
												array('Pacific/Midway' => '(GMT-11:00) Midway Island, Samoa'),

												Auth::user()->timezone, array('class' => 'form-control', 'placeholder' => trans('common.timezone')))); ?>

											</fieldset>
										</div>
									<div class="col-md-6">
										<fieldset class="form-group">
											<?php echo e(Form::label('language', trans('common.language'))); ?>

											<?php echo e(Form::select('language', Config::get('app.locales'),

												Auth::user()->language, array('class' => 'form-control'))); ?>

										</fieldset>
									</div>
									</div>

									<div class="pull-right">
										<?php echo e(Form::submit(trans('common.save_changes'), ['class' => 'btn btn-success'])); ?>

									</div>
									<div class="clearfix"></div>
								</form>
							</div><!-- /Socialite-form -->
						</div>
					</div>
					<!-- End of first panel -->

					<div class="panel panel-default">
						<div class="panel-heading no-bg panel-settings">
							<h3 class="panel-title">
								<?php echo e(trans('common.update_password')); ?>

							</h3>
						</div>
						<div class="panel-body nopadding">
							<div class="socialite-form">								
								<form method="POST" action="<?php echo e(url('/'.Auth::user()->username.'/settings/password/')); ?>">
									<?php echo e(csrf_field()); ?>


									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group <?php echo e($errors->has('current_password') ? ' has-error' : ''); ?>">
												<?php echo e(Form::label('current_password', trans('common.current_password'))); ?>

												<input type="password" class="form-control" id="current_password" name="current_password" value="<?php echo e(old('current_password')); ?>" placeholder= "<?php echo e(trans('messages.enter_old_password')); ?>">

												<?php if($errors->has('current_password')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('current_password')); ?></strong>
												</span>
												<?php endif; ?>
											</fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group <?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
												<?php echo e(Form::label('new_password', trans('common.new_password'))); ?>

												<input type="password" class="form-control" id="new_password" name="new_password" value="<?php echo e(old('new_password')); ?>" placeholder="<?php echo e(trans('messages.enter_new_password')); ?>">

												<?php if($errors->has('new_password')): ?>
												<span class="help-block">
													<strong><?php echo e($errors->first('new_password')); ?></strong>
												</span>
												<?php endif; ?>
											</fieldset>
										</div>
									</div>

									<div class="pull-right">
										<?php echo e(Form::submit(trans('common.save_password'), ['class' => 'btn btn-success'])); ?>

									</div>
									<div class="clearfix"></div>
								</form>
							</div><!-- /Socialite-form -->
						</div>
					</div>
					<!-- End of second panel -->

				</div>
			</div><!-- /row -->
		</div>
	<!-- </div> --><!-- /main-content -->
