<!-- main-section -->

<div class="container">
	<div class="row">
		<div class="col-md-10">

			<?php echo Theme::partial('page-header',compact('timeline','page')); ?>


			<div class="row">
				<div class=" timeline">
					<div class="col-md-4">
						
						<?php echo Theme::partial('page-leftbar',compact('timeline','page','page_members')); ?>

					</div>

					<div class="col-md-8">						

						<div class="panel panel-default">
							<div class="panel-heading no-bg panel-settings">
								<h3 class="panel-title">
									<?php echo e(trans('common.admins')); ?>

								</h3>
							</div>
							<div class="panel-body">

							<?php if(count($page_admins) > 0): ?>
								<ul class="list-group page-likes">
									<?php foreach($page_admins as $page_admin): ?>

									<li class="list-group-item holder">
										<div class="connect-list">
											<div class="connect-link pull-left">
												<a href="<?php echo e(url(url($page_admin->username))); ?>">
													<img src="<?php echo e($page_admin->avatar); ?>" alt="<?php echo e($page_admin->name); ?>" class="img-icon img-30" title="<?php echo e($page_admin->name); ?>">
													<?php echo e($page_admin->name); ?>

												</a>
											</div>										
											
												<?php if($page->is_admin($page_admin->pivot->user_id) && $page->is_admin(Auth::user()->id)): ?>
												<div class="pull-right follow-links">
												<div class="row">
													<form class="margin-right" method="POST" action="<?php echo e(url('/member/updatepage-role/')); ?>">
														<?php echo e(csrf_field()); ?>

														<?php if(count($page_admins) > 1): ?>

															<?php echo e(Form::hidden('user_id', $page_admin->id)); ?>

															<?php echo e(Form::hidden('page_id', $page->id)); ?>


															<div class="col-md-5 col-sm-5 col-xs-5 padding-5">
																<?php echo e(Form::select('member_role', $roles, $page_admin->pivot->role_id , array('class' => 'form-control'))); ?>

															</div>
															<div class="col-md-3 col-sm-3 col-xs-3 padding-5">
																<?php echo e(Form::submit(trans('common.assign'), array('class' => 'btn btn-to-follow btn-success'))); ?>

															</div>
															<div class="left-col col-md-4 col-sm-4 col-xs-4 padding-5">
																<a href="#" class="btn btn-to-follow btn-default remove-pagemember remove" data-user-id="<?php echo e($page_admin->id); ?> - <?php echo e($page->id); ?>">
																	<i class="fa fa-trash"></i> <?php echo e(trans('common.remove')); ?> 
																</a>
															</div>
														
														<?php endif; ?>
													</form>
												
												</div>
												<?php endif; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>
							<?php else: ?>
								<div class="alert alert-warning"><?php echo e(trans('messages.no_admins')); ?></div>
							<?php endif; ?>
							</div><!-- /panel-body -->
						</div>

					</div><!-- /col-md-8 -->
				</div><!-- /main-content -->
			</div><!-- /row -->
		</div><!-- /col-md-10 -->

		<div class="col-md-2">
			<?php echo Theme::partial('timeline-rightbar'); ?>

		</div>
	</div>
</div><!-- /container -->
