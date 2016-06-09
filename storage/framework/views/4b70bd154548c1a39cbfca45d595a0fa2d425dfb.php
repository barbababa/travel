<?php $__env->startPush('links'); ?>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading"><?php echo e($option_set->option_group_name); ?></div>
			<div class="panel-body">
				<table class="table">
				<thead>
					<tr>
						<th>Option Name</th>
						<th>Option Type</th>
						<th>Option Mandate</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($option_set->options as $option): ?>
				<tr>
					<td><?php echo e($option->option_name); ?></td>
					<td><?php echo e(ucfirst($option->optionSet->type)); ?></td>
					<td><?php echo e($option->isRequired ? "True" : "False"); ?></td>
				</tr>
				<?php endforeach; ?>

				<tr>
					<form action="">
						<td>
							<input type="text" name="option_name" id="" class="form-control" placeholder="Option Name" required="">
						</td>
						<td>
							<select name="option_type" id="" class="selectpicker" data-style="btn-primary" >
								<?php foreach($type_sets as $type): ?>
									<option value="<?php echo e($type->id); ?>"><?php echo e(ucfirst($type->type)); ?> <span class="text-info"><?php echo e($type->multiple ? "+": ""); ?></span></option>
								<?php endforeach; ?>
							</select>
						</td>
						<td>
						<label class="radio-inline">
						<input type="radio" name="isRequired" value="false" checked="" > No
						</label>
						<label class="radio-inline">
							<input type="radio" name="isRequired" value="true" > Yes
							</label>
							<button class="btn btn-success btn">
								<i class="glyphicon glyphicon-plus"></i>
							</button>
						</td>
					</form>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>