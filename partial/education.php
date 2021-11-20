
</section>
<section class="education" id="education">
    <h1 class="heading"> education</h1>
    <div class="row">
        <div class="column">
        <?php
$postQuery="SELECT * FROM education";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
            <div class="box">
                <div class="year"> <i class="fas fa-calendar"></i><?=$post['year']?></div>
                <h3><?=$post['name_1']?></h3>
                <p><?=$post['content']?></p>
        </div>
<?php
}
 ?>
    </div>
    </div>
</section>