<section class="portfolio" id="portfolio">
    <h1 class="heading">my portfolio</h1>
    <?php
$postQuery="SELECT * FROM test";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
  <div class="box-container">
        <a href="#" class="box">
            <img src="admin/uploads/<?=$post['image_url']?>" alt="">
            <div class="info"><?=$post['name']?></div>
        </a>
    </div>
<?php
}
 ?>
</section>