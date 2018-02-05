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
									<?php echo e(trans('common.page_likes')); ?>

								</h3>
							</div>
							<div class="panel-body">

								<?php if(count($page_likes) > 0): ?>
								<ul class="list-group page-likes">
									<?php foreach($page_likes as $page_like): ?>	
									<li class="list-group-item">
										<div class="connect-list">
											<div class="connect-link pull-left">
												<a href="<?php echo e(url($page_like->username)); ?>">													
												<img src="<?php echo e($page_like->avatar); ?>" alt="<?php echo e($page_like->name); ?>" class="img-icon img-30" title="<?php echo e($page_like->name); ?>">
													<?php echo e($page_like->name); ?>

												</a>
											</div>

											<?php if($page_like->pivot->user_id != Auth::user()->id): ?>
											<div class="follow-links pull-right">
												<?php if(!Auth::user()->following->contains($page_like->id)): ?>
												<div class="left-col">
													<a href="#" class="btn btn-to-follow btn-default follow-user follow" data-timeline-id="<?php echo e($page_like->timeline_id); ?>">				
														<i class="fa fa-heart"></i> <?php echo e(trans('common.follow')); ?> 
													</a>
												</div>

												<div class="left-col hidden">
													<a href="#" class="btn follow-user btn-success unfollow " data-timeline-id="<?php echo e($page_like->timeline_id); ?>">
														<i class="fa fa-check"></i><?php echo e(trans('common.following')); ?>

													</a>
												</div>
												<?php else: ?>
												<div class="left-col hidden">
													<a href="#" class="btn btn-to-follow btn-default follow-user follow " data-timeline-id="<?php echo e($page_like->timeline_id); ?>">
														<i class="fa fa-heart"></i> <?php echo e(trans('common.follow')); ?>

													</a>
												</div>

												<div class="left-col">
													<a href="#" class="btn follow-user btn-success unfollow" data-timeline-id="<?php echo e($page_like->timeline_id); ?>">
														<i class="fa fa-check"></i> <?php echo e(trans('common.following')); ?>

													</a>
												</div>
												<?php endif; ?>
											</div>
											<?php endif; ?>
											<div class="clearfix"></div>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>

								<?php else: ?>
								<div class="alert alert-warning"><?php echo e(trans('messages.no_likes')); ?></div>
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
