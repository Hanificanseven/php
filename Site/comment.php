<?php 
if(isset($_POST['yorumEkle'])){
    $commentAdd = $db->prepare("INSERT INTO comment(user_id,post_id,comment) values(1,{$_GET['id']},'".$_POST['comment']."')");
    $commentAdd->execute();
    }
$comments = $db->prepare("SELECT * FROM comment WHERE post_id ={$_GET['id']}");
$comments->execute();


?>
<div class="comment-list12993">
                        <div class="container">
                            <div class="row">
                           
                                <div class="comments-container">
                                    <h2><b>Yorumlar</b></h2>
                                    <hr>
                                    <ul id="comments-list" class="comments-list">
                                        <?php foreach ($comments as $comment) {
                                            $users = $db->prepare("SELECT * FROM user WHERE id = {$comment['user_id']}");
                                            $users->execute();
                                            $user = $users->fetch();
                                          ?>
                                        <li>
                                             <div class="comment-main-level">
                                                <!-- Avatar -->
                                                <div class="comment-avatar">  <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                               </div>
                                                <!-- Contenedor del Comentario -->
                                                <div class="comment-box">
                                                    <div class="comment-head">
                                                        <h6 class="comment-name"><?php echo $user['firstName']." ".$user['lastName']; ?></i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
                                                    <div class="comment-content"><?php echo $comment['comment']; ?></div>
                                                </div>
                                            </div>        
                                        </li>  <?php } ?>          
                                    </ul>
                        
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment289-box">
                        <h3>Yorum Yaz</h3>
                        <hr>
                        <form action="" method="post">
                            <div class="col-md-12">
                                
                                    <p>Yorum</p>
                                    <textarea name="comment" id="" style="width:100%;height:300px" ></textarea> 
                            </div>
                            <div class="col-md-12">
                                <div class="post9320-box">
                                 <button type="submit" name="yorumEkle" class="pos393-submit">Gönder</button>
                            </div>
                            </form>
                        </div>
                    </div>