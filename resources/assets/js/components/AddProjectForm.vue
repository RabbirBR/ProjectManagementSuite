<template lang="html">
	<div class="add-project">
		<form id="add-project-form" class="form-horizontal" action="" method="POST">
			<div class="modal-body">
				<div class="row">
					<div class="form-group">
						<label for="name" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Project Name</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control input-sm" required name="name" value="">
						</div>
					</div>

					<div class="form-group">
						<label for="start_date" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Start Date</label>

						<div class="col-md-6">
							<input id="start_date" type="text" class="form-control input-sm" required name="start_date" value="">
						</div>
					</div>

					<div class="form-group">
						<label for="start_date" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Weekly Work Days</label>

						<div class="col-md-6" style="padding-left: 40px">
							<label class="checkbox"><input type="checkbox" id="sat" name="sat" value="1">Saturday</label>
							<label class="checkbox"><input type="checkbox" id="sun" name="sun" value="1">Sunday</label>
							<label class="checkbox"><input type="checkbox" id="mon" name="mon" value="1">Monday</label>
							<label class="checkbox"><input type="checkbox" id="tue" name="tue" value="1">Tuesday</label>
							<label class="checkbox"><input type="checkbox" id="wed" name="wed" value="1">Wednesday</label>
							<label class="checkbox"><input type="checkbox" id="thu" name="thu" value="1">Thursday</label>
							<label class="checkbox"><input type="checkbox" id="fri" name="fri" value="1">Friday</label>
						</div>
					</div>

					<div class="form-group">
						<label for="work_hours" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Daily work Hours</label>

						<div class="col-md-6">
							<div class="input-group input-group-sm">
								<input id="work_hours" type="text" class="form-control input-sm" required name="work_hours" placeholder="Work hours" value="8">
								<span class="input-group-addon" id="basic-addon2">Hrs/Day</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
				<button type="submit" @click="submitForm" class="btn btn-sm btn-primary">Add Project to Dashboard</button>
			</div>
		</form>
	</div>
</template>

<script>
	export default {
		mounted() {
			console.log('Add Project Component mounted.');
		},
		methods:{
			submitForm(e){
				e.preventDefault();
				var name = $("#add-project-form").find("#name").val();
				var start_date = $("#add-project-form").find("#start_date").val();
				var work_hours = $("#add-project-form").find("#work_hours").val();

				var sat = 0;
				if($("#add-project-form").find("#sat").is(':checked')){
					sat = 1;
				}

				var sun = 0;
				if($("#add-project-form").find("#sun").is(':checked')){
					sun = 1;
				}

				var mon = 0;
				if($("#add-project-form").find("#mon").is(':checked')){
					mon = 1;
				}

				var tue = 0;
				if($("#add-project-form").find("#tue").is(':checked')){
					tue = 1;
				}

				var wed = 0;
				if($("#add-project-form").find("#wed").is(':checked')){
					wed = 1;
				}

				var thu = 0;
				if($("#add-project-form").find("#thu").is(':checked')){
					thu = 1;
				}

				var fri = 0;
				if($("#add-project-form").find("#fri").is(':checked')){
					fri = 1;
				}
				
				this.$emit("projectadded", {
					name: name,
					start_date: start_date,
					sat: sat,
					sun: sun,
					mon: mon,
					tue: tue,
					wed: wed,
					thu: thu,
					fri: fri,
					work_hours: work_hours
				});

				$("#addProjectModal").modal('hide');
			}
		}
	}
</script>

<style>

</style>
