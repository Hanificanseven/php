<?php include'header.php';

$posts = $db->prepare("SELECT * FROM post WHERE id ={$_GET['id']}");
$posts->execute();
$post  = $posts->fetch();
$users = $db->prepare("SELECT * FROM user WHERE id = {$post['user_id']}");
$users->execute();
$user = $users->fetch();

?>
<div class="col-md-9">
                    <div class="post-details">
                        <div class="details-header923">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="post-title-left129">
                                        <h3><?php echo $post['title']; ?></h3> </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="post-que-rep-rihght320"> <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Question</a> <a href="#" class="r-clor10">Report</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-details-info1982">
                            <p><?php 
                            for ($i=0; $i < 10; $i++) { 
                                 $metin = substr($post['description'],$i*100,100);
                                echo $metin."<br>"; 
                            }
                           
                            
                            ?></p><hr>
                          
                        </div>
                    </div>
                    <div class="author-details8392">
                        <div class="author-img202l" style="width: 70px;height:50px"> <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                               
                            <div class="au-image-overlay text-center"> <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> </div>
                        </div> <span class="author-deatila04re">
                   <h5>YAZAR</h5>
                    <p><?php echo $user['firstName']." ".$user['lastName']; ?></p>
                </span> 
            </div>
                   <?php include'comment.php'; ?>
                   
                </div>
                <?php include'right.php'; ?>
            <?php include'footer.php'; ?>