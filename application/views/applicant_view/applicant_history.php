<Div class="row-fluid">
	<Table class="table table-bordered">
    	<Thead>
        	<th> <b>Application for Diploma</b> </th>
            <th> Date Applied </th>
            <th> Status </th>
            <th> Date Confirmed </th>
        </Thead>
        <tbody>
			<?php if(isset($app_for_diploma) && !empty($app_for_diploma)){ ?>
					<?php foreach( $app_for_diploma as $key => $valueses ): ?>
						<tr>
							<td><?php echo $valueses->fname." ".$valueses->mname." ".$valueses->lname  ?></td>
							<td><?php echo $valueses->date_applied; ?></td>
							<td>
								<?php if($valueses->status == 0 ){ 
										echo "<span class='label label-warning'> Pending... </span>" ; 
									  }else if( $valueses->status == 1){ 
										echo "<span class='label label-success'> Confirmed by Admininstrator... </span>" ;
									  }else if( $valueses->status == 2){
										echo "<span class='label label-inverse'> Canceled... </span>" ;
									  }else{
										echo "<span class='label label-important'> Claimed... </span>" ;
									  }
								?>
							 </td>
							<td>
								<?php if(empty($valueses->date_confirmed) || $valueses->date_confirmed == 0){ 
										echo "<span class='label label-warning'> Not Yet Confirmed... </span>" ; 
									  }else{ 
										echo $valueses->date_confirmed;
									  }
								?>
							</td>
						</tr>
					<?php endforeach; ?>
			<?php }else{ ?>
					<Tr>
						<td colspan=4> <span class="label label-info"> No Application for Diploma Found! </span> </td>
					</tr>
			<?php }?>
        </tbody>
    </Table>
    <Table class="table table-bordered">
    	<Thead>
        	<th> <b>Application for Transcript of Record </b> </th>
            <th> Reason </th>
            <th> Date Applied </th>
            <th> Status </th>
            <th> Date Confirmed </th>
        </Thead>
        <tbody>
			<?php if(isset($app_for_tor) && !empty($app_for_tor)){ ?>
					<?php foreach( $app_for_tor as $key => $valueses ): ?>
						<tr>
							<td><?php echo $valueses->fname." ".$valueses->mname." ".$valueses->lname  ?></td>
							<td>
								<?php if( $valueses->reason == 1 ){ ?>
										<?php echo " Employment "; ?>
								<?php } else if( $valueses->reason == 2){ ?>
										<?php echo "Further Studies"; ?>
								<?php }else{ ?>
										<?php echo $valueses->reason; ?>
								<?php }?>
							</td>
							<td><?php echo $valueses->date_applied; ?></td>
							<td>
								<?php if($valueses->status == 0 ){ 
										echo "<span class='label label-warning'> Pending for confirmation... </span>" ; 
									  }else if( $valueses->status == 1){ 
										echo "<span class='label label-success'> Confirmed by Admininstrator... </span>" ;
									  }else if( $valueses->status == 2){
										echo "<span class='label label-inverse'> Canceled... </span>" ;
									  }else{
										echo "<span class='label label-important'> Claimed... </span>" ;
									  }
								?>
							 </td>
							<td>
								<?php if(empty($valueses->date_confirmed) || $valueses->date_confirmed == 0){ 
										echo "<span class='label label-warning'> Not Yet Confirmed... </span>" ; 
									  }else{ 
										echo $valueses->date_confirmed;
									  }
								?>
							</td>
						</tr>
					<?php endforeach; ?>
			<?php }else{ ?>
					<Tr>
						<td colspan=5> <span class="label label-info"> No Application for Diploma Found! </span> </td>
					</tr>
			<?php }?>
        </tbody>
    </Table>
    <Table class="table table-bordered">
    	<Thead>
        	<th> <b>Application for Certification </b> </th>
            <th> Certification </th>
            <th> Date Applied  </th>
            <th> Status </th>
            <th> Date Confirmed  </th>
        </Thead>
        <tbody>
        	<?php if(isset($app_for_certification) && !empty($app_for_certification)){ ?>
					<?php foreach( $app_for_certification as $key => $valueses ): ?>
						<tr>
							<td><?php echo $valueses->fname." ".$valueses->mname." ".$valueses->lname  ?></td>
							<td><?php echo $valueses->reason; ?></td>
							<td><?php echo $valueses->date_applied; ?></td>
							<td>
								<?php if($valueses->status == 0 ){ 
										echo "<span class='label label-warning'> Pending... </span>" ; 
									  }else if( $valueses->status == 1){ 
										echo "<span class='label label-success'> Confirmed by Admininstrator... </span>" ;
									  }else if( $valueses->status == 2){
										echo "<span class='label label-inverse'> Canceled... </span>" ;
									  }else{
										echo "<span class='label label-important'> Claimed... </span>" ;
									  }
								?>
							 </td>
							<td>
								<?php if(empty($valueses->date_confirmed) || $valueses->date_confirmed == 0){ 
										echo "<span class='label label-warning'> Not Yet Confirmed... </span>" ; 
									  }else{ 
										echo $valueses->date_confirmed;
									  }
								?>
							</td>
						</tr>
					<?php endforeach; ?>
			<?php }else{ ?>
					<Tr>
						<td colspan=5> <span class="label label-info"> No Application for Certification found! </span> </td>
					</tr>
			<?php }?>
        </tbody>
    </Table>
</Div>