<?php $__env->startSection('content'); ?>

<div class="col-md-4 col-md-offset-2">
	<div class="panel panel-default">
		<div class="panel-heading">Product Option Setup</div>
		<div class="panel-body">
		<ul class="list-group">
			<?php foreach($optionGroup as $opg): ?>
			<li class="list-group-item"><?php echo e($opg->option_group_name); ?>

			<a href="/option/<?php echo e($opg->id); ?>" class="btn btn-primary btn-sm">Add Option</a>
			</li>
			<?php endforeach; ?>
		</ul>

			<form action="/" method="post">
			<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<label for="name" class="label-control">OptionGroup Name</label>
					<input type="text" name="option_group_name" id="" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="description" class="label-control">OptionGroup Description</label>
					<textarea name="option_group_description" id="" cols="30" rows="10" class="form-control" placeholder="Optional Description"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-4 ">
	<div class="panel panel-default">
		<div class="panel-heading">Create Layout</div>
		<div class="panel-body">
			<ul class="list-group">
				<?php foreach($categories as $category): ?>
				<li class="list-group-item"><?php echo e($category->category_title); ?>

				 <button type="button" class="btn btn-default btn-sm pull-right" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>