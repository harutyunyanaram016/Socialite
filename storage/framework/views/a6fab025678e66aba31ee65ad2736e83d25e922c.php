<!-- <div class="main-content"> -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body nopadding">
					<div class="mini-profile">
						<div class="background">
							<div class="widget-bg">
								<img src=" <?php if($timeline->cover): ?> <?php echo e(url('group/cover/'.$timeline->cover->source)); ?> <?php else: ?> <?php echo e(url('group/cover/default-cover-group.png')); ?> <?php endif; ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">
							</div>
							<div class="avatar-img">
								<img src="<?php if($timeline->avatar): ?> <?php echo e(url('group/avatar/'.$timeline->avatar->source)); ?> <?php else: ?> <?php echo e(url('group/avatar/default-group-avatar.png')); ?> <?php endif; ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">
							</div>
						</div><!-- /background -->

						<div class="avatar-profile">
							<div class="avatar-details">
								<h2 class="avatar-name">
									<a href="<?php echo e(url($timeline->username)); ?>">
										<?php echo e($timeline->name); ?>

									</a>
								</h2>
								<h4 class="avatar-mail">
									<a href="<?php echo e(url($timeline->username)); ?>">
										<?php echo e('@'.$timeline->username); ?>

									</a>
								</h4>
							</div>      
						</div><!-- /avatar-profile -->
					</div>
				</div><!-- /panel-body -->
			</div>
		</div><!-- /col-md-4 -->
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading no-bg panel-settings">
					<h3 class="panel-title">
						<?php echo e(trans('common.general_settings')); ?>

					</h3>
				</div>
				<div class="panel-body nopadding">
					<div class="socialite-form">
						<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<form action="<?php echo e(url('/'.$username.'/group-settings/general')); ?>" method="POST">							

							<?php echo e(csrf_field()); ?>


							<div class="row">
								<div class="col-md-6">
									<fieldset class="form-group">
										<?php echo e(Form::label('username', trans('common.username'))); ?>

										<?php echo e(Form::text('username', $timeline->username, ['class' => 'form-control', 'placeholder' => trans('common.username'), 'disabled' => 'disabled'])); ?>

									</fieldset>
								</div>
								<div class="col-md-6">
									<fieldset class="form-group required <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
										<?php echo e(Form::label('name', trans('auth.name'))); ?>

										<?php echo e(Form::text('name', $timeline->name, ['class' => 'form-control', 'placeholder' => trans('common.name_of_your_group')])); ?>

										<?php if($errors->has('name')): ?>
										<span class="help-block">
											<strong><?php echo e($errors->first('name')); ?></strong>
										</span>
										<?php endif; ?>
									</fieldset>
								</div>
							</div>

							<fieldset class="form-group text-area-form">
								<?php echo e(Form::label('about', trans('common.about'))); ?>

								<?php echo e(Form::textarea('about', $timeline->about, ['class' => 'form-control', 'placeholder' => trans('messages.create_group_placeholder'), 'rows' => '2', 'cols' => '20'])); ?>

							</fieldset>

							<fieldset class="form-group">
								<?php echo e(Form::label('type', trans('common.privacy'))); ?>

								<div class="radio">
									<label>
										<?php if($group_details->type == "open"): ?>
										<input type="radio" name="type" id="optionsRadios1" value="open" checked>
										<?php else: ?>
										<input type="radio" name="type" id="optionsRadios1" value="open">
										<?php endif; ?>	
										<i class="fa fa-globe"></i> <?php echo e(trans('common.open_group')); ?>

										<p><?php echo e(trans('messages.radio_open_group')); ?></p>
									</label>
								</div>
								<div class="radio margin-left">
									<label class="margin-left-113">
										<?php if($group_details->type == "closed"): ?>
										<input type="radio" name="type" id="optionsRadios2" value="closed" checked>
										<?php else: ?>
										<input type="radio" name="type" id="optionsRadios2" value="closed">
										<?php endif; ?>	
										<i class="fa fa-lock"></i> <?php echo e(trans('common.closed_group')); ?>

										<p><?php echo e(trans('messages.radio_closed_group')); ?></p>
									</label>
								</div>
								<div class="radio">
									<label class="margin-left-112">
										<?php if($group_details->type == "secret"): ?>
										<input type="radio" name="type" id="optionsRadios3" value="secret" checked>
										<?php else: ?>
										<input type="radio" name="type" id="optionsRadios3" value="secret">
										<?php endif; ?>	
										<i class="fa fa-shield"></i> <?php echo e(trans('common.secret_group')); ?>

										<p><?php echo e(trans('messages.radio_secret_group')); ?></p>
									</label>
								</div>																					
							</fieldset>
							
							<fieldset class="form-group">
								<?php echo e(Form::label('member_privacy', trans('common.label_group_member_privacy'))); ?>

								<?php echo e(Form::select('member_privacy', array('members' => trans('common.members'), 'only_admins' => trans('common.admins')), $group_details->member_privacy, array('class' => 'form-control col-sm-6'))); ?>

							</fieldset>

							<fieldset class="form-group">
								<?php echo e(Form::label('post_privacy', trans('common.label_group_timeline_post_privacy'))); ?>

								<?php echo e(Form::select('post_privacy', array('members' => trans('common.members'), 'only_admins' => trans('common.admins')), $group_details->post_privacy, array('class' => 'form-control col-sm-6'))); ?>

							</fieldset>
							

							
							<div class="pull-right">
								<?php echo e(Form::submit(trans('common.update_group'), ['class' => 'btn btn-success'])); ?>

							</div>
							<div class="clearfix"></div>

						</form>
					</div><!-- /socialite form -->
				</div>
			</div><!-- /panel -->
			
		</div>
	</div><!-- /row -->
</div>
<!-- </div> -->
<!-- /main-content -->