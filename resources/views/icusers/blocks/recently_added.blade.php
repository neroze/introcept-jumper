<div class="row" v-show="recently_added_users.length" >
		<h3>Recently added IC Users</h3>
		<table  class="table table-striped responsive-utilities jambo_table">
			<thead>
				<tr class="headings">
					
					<th>Name </th>
					<th>Email </th>
					<th>Phone </th>
					<th>Address </th>
					
				</th>
			</tr>
			</thead>
			<tbody>
				<tr class="even pointer" v-for="user in recently_added_users"  >
					<td>@{{ user.name }}</td>
					<td>@{{ user.email }} </td>
					<td>@{{ user.phone }} </td>
					<td>@{{ user.address }}</td>
					
				</tr>
				
			</tbody>
		</table>
		
	</div>