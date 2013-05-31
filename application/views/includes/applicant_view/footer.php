	</div><!--/span9-->
</div><!--/row3-->
    </div><!--/.fluid-container-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <?php 
		if(isset($js) && is_array($js)){
			foreach($js as $keyses => $valueseses ){
				?>
                	<script src="<?php echo base_url().$valueseses; ?>" type="text/javascript" ></script>
                <?php
			}
		}
	?>
    </body>
    </html>