<div class="row-fluid">
	<div class="accordion" id="accordion2">
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
            	College Library Administrator(s)
            </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse in">
            <div class="accordion-inner">
            	<a href="<?php echo base_url(); ?>administrator/libadministratormanager/add-new-graduate-library-administrator" class="btn btn-success"> Add College Library Administrator </a> <br/>
    
                <Table style="margin-top:10px;" class="table table-bordered tale-hover table-collapsed">
                    <thead>
                        <th> User ID </th>
                        <th> Username </th>
                        <th> Name </th>
                        <th> Action </th>
                    </thead>
                    <tbody>
						<?php if(isset($cla) && !empty( $cla ) ){ ?>
							<?php foreach( $cla as $key => $values ): ?>
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
        </div>
    </div>
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
            	Under Graduate Library
            </a>
        </div>
        <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
           		<a href="<?php echo base_url(); ?>administrator/libadministratormanager/add-new-undergraduate-library-administrator" class="btn btn-success" > Add Under Graduate Library Administrator </a> <br/>
    
                <Table style="margin-top:10px;" class="table table-bordered tale-hover table-collapsed">
                    <thead>
                        <th> User ID </th>
                        <th> Username </th>
                        <th> Name </th>
                        <th> Action </th>
                    </thead>
                    <tbody>
						<?php if(isset($ugl) && !empty( $ugl ) ){ ?>
							<?php foreach( $ugl as $key => $values ): ?>
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
        </div>
    </div>
</div>
	
</div>