<div class="row-fluid">
	<a href="<?php echo base_url(); ?>administrator/graduateschoolmanager/add-new-graduates-school-administrator" class="btn btn-success" > Add Graduate School Administrator </a> <br/>
    
	<Table style="margin-top:10px;" class="table table-bordered tale-hover table-collapsed">
    	<thead>
        	<th> User ID </th>
        	<th> Username </th>
            <th> Name </th>
            <th> Action </th>
        </thead>
        <tbody>
			<?php if(isset($users) && !empty( $users ) ){ ?>
				<?php foreach( $users as $key => $values ): ?>
					<Tr>
						<td> <?php echo $values->id; ?> </td>
						<td>  <?php echo $values->username; ?></td>
						<Td>  <?php echo $values->fname." ".$values->mname." ".$values->lname; ?></Td>
						<td>
							<a class="btn btn-primary" href="#"> Edit </a> &nbsp; 
							<a class="btn btn-danger" href="#">Delete</a>
						</td>
					</Tr>
				<?php endforeach; ?>
			<?php	}else{ ?>
						<tr>
							<Td colspan=5> <span class='label label-warning'> No Records Found. </span> </td>
						</tr>
			<?php	} ?>
        </tbody>
    </Table>
</div>