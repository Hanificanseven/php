<?php 

$posts = $db->prepare("SELECT * FROM post");
$posts->execute();

?>



<div class="col-md-9">
                <section class="category2781">
                    <?php foreach ($posts as $post) {
                        $users = $db->prepare("SELECT * FROM user WHERE id = {$post['user_id']}");
                        $users->execute();
                        $user = $users->fetch();
                    ?>
                    <div class="question-type2033">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="left-user12923 left-user12923-repeat">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                                <?php echo $user['firstName']." ".$user['lastName']; ?><br> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="right-description893">
                                    <div id="que-hedder2983">
                                        <h3><a href="post-details.php?id=<?php echo $post['id']; ?>" target="_self"> <?php echo $post['title']; ?></a></h3>
                                    </div>
                                    <div class="ques-details10018">
                                        <p><?php echo $post['description']; ?></p>
                                    </div>
                                    <hr>   
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="ques-type302">
                                    <a href="post-details.php?id=<?php echo $post['id']; ?>">
                                        <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true"> Devamını Gör</i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </section>
            </div>