<div class="side_dental">
		<script language="javascript" type="text/javascript">
			<!-- Begin
			var timerID = null;
			var timerRunning = false;
			function stopclock (){
			if(timerRunning)
			clearTimeout(timerID);
			timerRunning = false;
			}
			function showtime () {
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds()
			var timeValue = "" + ((hours >12) ? hours -12 :hours)
			if (timeValue == "0") timeValue = 12;
			timeValue += ((minutes < 10) ? ":0" : ":") + minutes
			timeValue += ((seconds < 10) ? ":0" : ":") + seconds
			timeValue += (hours >= 12) ? " P.M." : " A.M."
			document.clock.face.value = timeValue;
			timerID = setTimeout("showtime()",1000);
			timerRunning = true;
			}
			function startclock() {
			stopclock();
			showtime();
			}
			window.onload=startclock;
			// End -->
		</SCRIPT>								      
<p>
		<form name="clock">
		Time is:&nbsp;<input type="submit" class="trans" name="face" value="">
			</form>
</p>	

							  <div class="alert alert-info">
                        <i class="icon-calendar icon-large"></i>
                        <?php
						date_default_timezone_set('Asia/Manila');
                        $Today = date('y:m:d');
                        $new = date(' d/m/Y');
                        echo $new;
                        ?>
                    </div>
						
								<div class="navbar">
									<div class="navbar-inner">
										<div class="pull-right">					
										</div>
									</div>
								</div>
								<ul class="nav nav-tabs nav-stacked">														
									<li><a href="schedule.php"><i class="icon-list icon-large"></i>&nbsp;Schedules<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="sched_today.php"><i class="icon-file-alt icon-large"></i>&nbsp;Current Date's Schedule<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="service.php"><i class="icon-medkit	icon-large"></i>&nbsp;Services Provided<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="user.php"><i class="icon-user icon-large"></i>&nbsp;Staff Accounts<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="members.php"><i class="icon-group icon-large"></i>&nbsp;Customer List<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="inventory.php"><i class="icon-file icon-large"></i>&nbsp;Inventory List<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="note.php"><i class="icon-file icon-large"></i>&nbsp;Announcements<i class="icon-arrow-right icon-large"></i></a></li>
								</ul>
							</div>