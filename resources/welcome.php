<div class="container-fluid">
    	<div class="row">
    		<div class="col-md-9 offset-md-2">
    			<div class="container-fluid content-background welkom">
                    <small><?php $timestamp = time(); setlocale(LC_ALL, 'nl_NL'); echo strftime('%d %B, %Y', $timestamp);?></small>
                    <div class="row">
                        <div class="col-10">
                            <h4>Goedemorgen, <?php echo $UserId?>!</h4>
                            
                        </div>
                        <div class="col-2">
                            <span class="mr-3 plusIcon">
                                <?php
                                switch ($_GET['content']) {
                                     case 'passwords':
                                         echo '<a href="./index.php?content=create"><i class="fas fa-plus-square"></i></a>';
                                         break;
                                    case 'services':
                                         echo '<a href="./index.php?content=createservice"><i class="fas fa-plus-square"></i></a>';
                                         break;
                                    case 'create':
                                         echo '<a href="./index.php?content=passwords"><i class="fas fa-backward"></i></a>';
                                         break;
                                    case 'createservice':
                                         echo '<a href="./index.php?content=services"><i class="fas fa-backward"></i></a>';
                                         break;
                                    default:
                                         echo '';
                                         break;
                                 } ?>
                            </span>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
	</div>