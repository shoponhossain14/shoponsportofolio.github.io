
<section class="home" id="home">

<div class="content">
    <h3 class="hello">hi, there!</h3>
    <?php
$postQuery="SELECT * FROM Website_name";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
               <h3 class="name">i'm <span><?=$post['name']?></span></h3>


<?php
}
?> 

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nesciunt repellendus consectetur delectus, voluptatem harum alias natus quas et placeat?</p>
    <a href="#" class="btn">about me</a>
</div>

</section>