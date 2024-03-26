<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>
<div class="header">


    <h1>Explore/Archive</h1>
</div>

 <div class="side_bar">
        <h3>Sign In</h3>
        
        <p>Unlock exclusive features and personalized content by signing in today. Don't miss out on tailored experiences tailored just for you!</p>
        <h3>Sign Up</h3>
        
        <p>Unlock exclusive benefits and personalized experiences by signing up today! Join our community to access premium features tailored just for you.</p>
    </div>

<br>
<br>

<select>
<?php
    print "<option>".date("d")."</option>";
for($m=1; $m<=31; $m++){
    print "<option>$m</option>";
}
?>
</select>
<select>
<?php
// foreach
$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Sep', 'Oct', 'Nov', 'Dec'];
print "<option>".date("M")."</option>";
foreach($months AS $month){
    print "<option>$month</option>";
}
?>
</select>
<select>
<?php
$max = date('Y') - 64;
$min = date('Y') - 18;
for($y=$min; $y>=$max; $y--){
    print "<option>$y</option>";
}
?>
</select>
    </div>
</div>
<?php include("templates/footer.php");