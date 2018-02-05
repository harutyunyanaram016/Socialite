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
									<?php echo e(trans('common.addmembers')); ?>

								</h3>
							</div>
							<div class="panel-body">
								<form class="navbar-form  sp-navbar-form " role="search">
									<div class="form-group">
										<input type="text" data-url="<?php echo e(URL::to('api/v1/timelines')); ?>" class="form-control" id="add-members-page"  data-page-id="<?php echo e($page->id); ?>" placeholder="Search for people">
									</div>
								</form>
								<div class="page-suggested-users"></div>
							</div>
							
							
						</div><!-- /panel -->
					</div>
				</div><!-- /main-content -->
			</div><!-- /row -->
		</div><!-- /col-md-10 -->

		<div class="col-md-2">
			<?php echo Theme::partial('timeline-rightbar'); ?>

		</div>
	</div>
</div><!-- /container -->
