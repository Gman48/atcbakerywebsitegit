<?php 

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $errors = [];
    $values = [];
    $values['email'] = trim($_POST['email']);
    $query = "select * from users where email = :email limit 1";
    $row = db_query_one($query,$values);
    
    if(!empty($row)) //means there is a matching record
    {
        if(password_verify($_POST['password'], $row['password']))
        {
            authenticate($row);
            message("login successful");
            redirect('admin');  				
        }
    }
    message("wrong email or password");//no matching data 
}

?>

<?php require page('includes/header')?>

	<section class="content">
 
		<div class="login-holder">

		<?php if(message()):?>
			<div class="alert"><?=message('',true)?></div>
		<?php endif;?>

			<form method="post" class="login_form">
				<center><img src="assets/images/logo_final.png" style="width: 150px;border-radius: 50%;border: solid thin #ccc;"></center>
				<h2>Login</h2>
				<input value="<?=set_value('email')?>" class="my-1 form-control" type="email" name="email" placeholder="Email">
				<input value="<?=set_value('password')?>" class="my-1 form-control" type="password" name="password" placeholder="Password">
				<button class="my-1 btn bg-blue">Login</button>
			</form>
		</div>
	</section>

<?php require page('includes/footer')?>