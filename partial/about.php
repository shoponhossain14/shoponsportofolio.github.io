
<section class="about" id="about">

<h1 class="heading">about me</h1>




<div class="row">

    <div class="progress-bar">

        <h3 class="title">my skills</h3>


        <?php
$postQuery="SELECT * FROM about_skills";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
        <div class="progress">
            <h3><?=$post['name']?></h3>
    </div>


<?php
}
?> 
    <div class="presonal-info">


<br>
<br>
        <h3 class="title">presonal info</h3>
<?php
$postQuery="SELECT * FROM info";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
       <div class="box-container">

<div class="box">
<h3> <span> full name : </span> <?=$post['Full_Name']?> </h3>
<h3> <span> age : </span> <?=$post['Age']?> </h3>
<h3> <span> email : </span> <?=$post['Email']?> </h3>
<h3> <span> phone : </span> <?=$post['Phone']?> </h3>
</div>
<div class="box">
<h3> <span> experience : </span> <?=$post['Experience']?> </h3>
<h3> <span> address : </span> <?=$post['Address']?> </h3>
<h3> <span> language : </span> <?=$post['Language']?> </h3>
<h3> <span> freelance : </span> <?=$post['Freelance']?> </h3>
</div>
</div>
<?php
}
?> 






<div class="box-container">         
            </div>
        </div>
    </div>
</div>
<div class="counter">
<?php
$postQuery="SELECT * FROM dash";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
<div class="box">
        <h3>>><?=$post['name']?></h3>
        <p>years of experience</p>
    </div>
    <div class="box">
        <h3>>><?=$post['lastname']?></h3>
        <p>happy clients</p>
    </div>
    <?php
$postQuery="SELECT * FROM dash_1";
$runPQ=mysqli_query($conn,$postQuery);
while($post=mysqli_fetch_assoc($runPQ)){
?>
<div class="box">
        <h3>>><?=$post['title']?></h3>
        <p>project completed</p>
    </div>
    <div class="box">
        <h3>>><?=$post['lasttitle']?></h3>
        <p>awards won</p>
    </div>
    <?php
}
?>
</div>

<?php
}
?>