<h2>Manage IC Users</h2>
<form @submit.prevent="validateBeforeSubmit" v-if="!formSubmitted">

	<div class="form-group" :class="{'has-error': errors.has('name') }" >
		<label for="name">Name</label>
		<input type="text"
		v-validate data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('name') }"
		class="form-control"
		placeholder="Name" id="name" name="name" v-model="user.name" >
		<span v-show="errors.has('name')" class="text-danger help is-danger">@{{ errors.first('name') }}</span>
	</div>

	<div class="form-group" >
		<label for="exampleInputPassword1">Gender</label>
		<label class="radio-inline"> 
			<input type="radio" id="male" name="gender" value="male" v-model="user.gender"> Male
		</label>
		<label class="radio-inline">
			<input type="radio" id="female" name="gender" value="female" v-model="user.gender"> Female
		</label>
	</div>

	<div class="form-group" :class="{'has-error': errors.has('phone') }" >
		<label for="exampleInputFile">Phone</label>
		<input type="text"
		v-validate data-vv-rules="required|numeric" :class="{'input': true, 'is-danger': errors.has('phone') }"
		class="form-control" placeholder="Phone" id="phone" name="phone" v-model="user.phone" >
		<span v-show="errors.has('phone')" class="text-danger help is-danger">@{{ errors.first('phone') }}</span>
	</div>

	<div class="form-group" :class="{'has-error': errors.has('email') }">
		<label for="exampleInputFile">Email</label>
		<input type="text"
		v-validate data-vv-rules="required|email" :class="{'input': true, 'is-danger': errors.has('email') }"
		class="form-control" id="email" placeholder="Email" name="email" v-model="user.email" >
		<span v-show="errors.has('email')" class="text-danger help is-danger">@{{ errors.first('email') }}</span>
	</div>

	<div class="form-group">
		<label for="exampleInputFile">DOB</label>
		<date-picker name="user_date_of_birth" v-on:date_picked="dob_changed" ></date-picker>
	</div>

	<div class="form-group" :class="{'has-error': errors.has('address') }">
		<label for="exampleInputFile">Address</label>
		<input
		v-validate data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('address') }"
		type="text" class="form-control" id="address" placeholder="Address" name="address" v-model="user.address" >
		<span v-show="errors.has('address')" class="text-danger help is-danger">@{{ errors.first('address') }}</span>
	</div>

	<div class="form-group" :class="{'has-error': errors.has('nationality') }">
		<label for="exampleInputFile">Nationality</label>
		<input
		v-validate data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('nationality') }"
		type="text" class="form-control" id="nationality" placeholder="Nationality" name="nationality" v-model="user.nationality" >
		<span v-show="errors.has('nationality')" class="text-danger help is-danger">@{{ errors.first('nationality') }}</span>
	</div>

	<div class="form-group" :class="{'has-error': errors.has('education_background') }">
		<label for="exampleInputFile">Education Background</label>
		<input
		v-validate data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('education_background') }"
		type="text" class="form-control" id="education_background" placeholder="Education Background" name="education_background" v-model="user.education_background" >
		<span v-show="errors.has('education_background')" class="text-danger help is-danger">@{{ errors.first('education_background') }}</span>
	</div>
	
	<div class="form-group">
		<label for="exampleInputFile">Mode of Contact </label>
		<select class="form-control"  v-model="user.mode_of_contact">
			<option value="email">Email</option>
			<option value="phone">Phone</option>
			<option value="none">None</option>
		</select>
	</div>
	
	<button type="submit" class="btn btn-primary">Submit</button>
</form>