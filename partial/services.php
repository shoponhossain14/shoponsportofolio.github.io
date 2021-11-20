</section>
<section class="service" id="service">

    <h1 class="heading">my services</h1>
<?php
    $postQuery="SELECT * FROM skills";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
   <div class="box-container">
<div class="box">
            <h3><?=$post['title']?></h3>
            <p><?=$post['content']?></p>
        </div>
        </div>
<?php
}
 ?>
 </div>