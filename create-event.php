		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="head"><a href="" class="btn btn-default btn-sm"><i class="fa fa-rotate-270 fa-level-up"></i></a> Create / Update Event</h1>
				<div id="createEvent" class="user well create-event">
			        <form>
			        	<div class="form-group image">
							<label for="eventImage">Image</label>
							<input type="file" id="eventImage" class="form-control">
						</div>
			        	<div class="form-group title">
							<label for="eventTitle">Title</label>
							<input type="text" placeholder="Title" id="eventTitle" class="form-control">
						</div>
						<div class="form-group category">
							<label for="eventCategory">Category</label>
							<select id="eventCategory" name="" class="form-control">
								<option value="1">Children &amp; Youth</option>
								<option value="2">Education</option>
								<option value="5">Environment</option>
								<option value="4">Health</option>
								<option value="3">Poverty</option>
							</select>
						</div>
						<div class="form-group date">
							<label for="date">Date</label>
							<div class="row">
								<div class="col-md-4">
									<select id="" name="" class="form-control">
										<option value="1">January</option>
										<option selected="selected" value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
								<div class="col-md-2">
									<select id="" name="" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
								</div>
								<div class="col-md-3">
									<select id="" name="" class="form-control">
										<option value="2014">2014</option>
										<option value="2015">2015</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group location">
							<label for="eventLocation">Location</label>
							<input type="text" id="eventLocation" placeholder="Location" class="form-control">
						</div>
						<div class="form-group location">
							<label for="eventSlots">Slots</label>
							<input type="text" id="eventSlots" placeholder="Number of Slots" class="form-control">
						</div>
						<div class="form-group description">
							<label for="eventDescription">Description</label>
							<textarea id="eventDescription" class="form-control" rows="10"></textarea>
						</div>
						
						<hr>
						<div class="form-group cancel-event">
							<label class="checkbox-label" for="cancelEvent"><input type="checkbox" id="cancelEvent"> I am sure I want to cancel this event <button class="btn btn-danger">Cancel Event</button></label>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary">Create Event</button>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-primary">Update Event</button>
						</div>
			        </form>
				</div>
	        </div>
		</div>