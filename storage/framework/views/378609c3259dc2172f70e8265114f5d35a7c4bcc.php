<div class="timeline-cover-section">
	<div class="timeline-cover">
		<img src=" <?php if($timeline->cover_id): ?> <?php echo e(url('page/cover/'.$timeline->cover->source)); ?> <?php else: ?> <?php echo e(url('page/cover/default-cover-page.png')); ?> <?php endif; ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>">
		<?php if($timeline->page->is_admin(Auth::user()->id) == true): ?>
			<a href="#" class="btn btn-camera-cover change-cover"><i class="fa fa-camera" aria-hidden="true"></i><span class="change-cover-text"><?php echo e(trans('common.change_cover')); ?></span></a>
		<?php endif; ?>
		<div class="user-cover-progress hidden">
			
		</div>
		<div class="user-timeline-name">		
			<a href="<?php echo e(url($timeline->username)); ?>"><?php echo e($timeline->name); ?></a>
			<?php if($timeline->page->verified): ?>
				<span class="verified-badge bg-success">
					<i class="fa fa-check"></i>
				</span>
			<?php endif; ?>
		</div>
		
	</div>
	<div class="timeline-list">
		<ul class="list-inline pagelike-links">	

			<?php if(Auth::user()->get_page($page->id) != NULL): ?>
			<?php if(($page->member_privacy == "only_admins" && $page->is_admin(Auth::user()->id)) || ($page->member_privacy == "members" && Auth::user()->get_page($page->id)->pivot->active == 1)): ?>		
			<li><a href="<?php echo e(url($timeline->username.'/add-pagemembers')); ?>" ><span class="top-list"> <?php echo e(trans('common.addmembers')); ?></span></a></li>	
			<?php endif; ?>

			<?php endif; ?>

			<li><a href="<?php echo e(url($timeline->username.'/pagemembers/')); ?>">
				<span class="top-list">
					<?php echo e($page->members() != false ? count($page->members()) : 0); ?> <?php echo e(trans('common.members')); ?>

				</span>
			</a>
		</li>
		
		<li >
			<a href="<?php echo e(url($timeline->username.'/pageadmin/')); ?>">
				<span class="top-list">
					<?php echo e($page->admins() != false ? count($page->admins()) : 0); ?> <?php echo e(trans('common.admins')); ?>

				</span>
			</a>
		</li>	

		<li>
			<a href="<?php echo e(url($timeline->username.'/page-likes')); ?>">
				<span class="top-list">
					<?php echo e($page->likes()->count()); ?> <?php echo e(trans('common.people_like_this')); ?>

				</span>
			</a>
		</li>
		
		<li><a href="<?php echo e(url($timeline->username.'/page-posts')); ?>"><span class="top-list"><?php echo e(count($timeline->posts)); ?> <?php echo e(trans('common.posts')); ?></span></a></li>
		<?php if(!$page->is_admin(Auth::user()->id)): ?>
		<li class="dropdown largescreen-report"><a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="top-list"> <i class="fa fa-ellipsis-h"></i></span></a>
			<ul class="dropdown-menu  report-dropdown">

				<?php if(!$timeline->reports->contains(Auth::user()->id)): ?>
				<li><a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i><?php echo e(trans('common.report')); ?></a></li>
				<li class="hidden"><a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i><?php echo e(trans('common.reported')); ?></a></li>
				<?php else: ?>
				<li class="hidden"><a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i><?php echo e(trans('common.report')); ?></a></li>
				<li><a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"> <i class="fa fa-flag" aria-hidden="true"></i><?php echo e(trans('common.reported')); ?></a></li>
				<?php endif; ?>

			</ul>
		</li>
		<?php if(!$timeline->reports->contains(Auth::user()->id)): ?>
				<li class="smallscreen-report"><a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.report')); ?></a></li>
				<li class="hidden smallscreen-report"><a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.reported')); ?></a></li>
				<?php else: ?>
				<li class="hidden smallscreen-report"><a href="#" class="page-report report" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.report')); ?></a></li>
				<li class="smallscreen-report"><a href="#" class="page-report reported" data-timeline-id="<?php echo e($timeline->id); ?>"><?php echo e(trans('common.reported')); ?></a></li>
				<?php endif; ?>
		<?php endif; ?>	
	</ul>
	<div class="status-button">

		<a href="#" class="btn btn-status"><?php echo e(trans('common.status')); ?></a>
	</div>
	<div class="timeline-user-avtar">

		<img src=" <?php if($timeline->avatar_id): ?> <?php echo e(url('page/avatar/'.$timeline->avatar->source)); ?> <?php else: ?> <?php echo e(url('page/avatar/default-page-avatar.png')); ?> <?php endif; ?>" alt="<?php echo e($timeline->name); ?>" title="<?php echo e($timeline->name); ?>" alt="<?php echo e($timeline->name); ?>">			
		<?php if($timeline->page->is_admin(Auth::user()->id) == true): ?>
			<div class="chang-user-avatar">
				<a href="#" class="btn btn-camera change-avatar"><i class="fa fa-camera" aria-hidden="true"></i><span class="avatar-text"><?php echo e(trans('common.update_profile')); ?><span><?php echo e(trans('common.picture')); ?></span></span></a>
			</div>	
		<?php endif; ?>	
		
		<div class="user-avatar-progress hidden"></div>
	</div>
</div>
</div>
