

      <div class="jumbotron">
        <h1> Super easy file Application! </h1>
        <p class="lead"> Leyte Normal University offers you a handy application for your records. </p>
        <a class="btn btn-large btn-success" href="#"> Get your File Now! </a>
      </div>

	 <hr />
      <div class="row-fluid marketing">
        <div class="span6">
          <h4><i class="icon-thumbs-up"> </i> Easy </h4>
          <p> Offers you an online file application. </p>
          <h4> <i class="icon-thumbs-up"> </i> Handy </h4>
          <p> Allows Bank to Bank transaction. </p>

          <h4><i class="icon-thumbs-up"> </i> Documents </h4>
             <ul>
                <li> Transcript Of Record </li>
                <li> Good Moral </li>
                <li> Certification </li>
             </ul>
        </div>
        <div class="span6">
          <?php echo validation_errors(); ?>
          <?php if(isset($error) && $error == 1){ echo "<div class='alert alert-danger'> Username or Password not Match.</div>";} ?>
          <form class="fluid form form-horizontal" method="post" action="<?php echo base_url(); ?>home/login">
          	<fieldset>
            	<legend> Login Here </legend>
                    <label> Username </label>
                    <input type="text" name="username" placeholder="Username ... " />
                    <br /><br />
                    <label> Password </label>
                    <input type="password" name="password" placeholder="Username ... " />
                    <br /><br />
                    <input name="login" type="submit" class="btn btn-primary" value="Login" />  
            </fieldset>
          </form>
        </div>
      </div>

     