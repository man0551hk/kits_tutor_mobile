<?php require("interface1.php");?>
<?php
$amountStart = $_POST["amountStart"];
$amountEnd = $_POST["amountEnd"];
$yearStart = $_POST["yearStart"];
$yearEnd = $_POST["yearEnd"];
$selectedSubject = $_POST["selectedSubject"];
$area = $_POST["area"];
$selectedDistrict = $_POST["selectedDistrict"];
$keywordSearch = $_POST["keywordSearch"];
// echo $amountStart."<br/>";
// echo $amountEnd."<br/>";
// echo $yearStart."<br/>";
// echo $yearEnd."<br/>";
// echo $selectedSubject."<br/>";
// echo $area."<br/>";
// echo $selectedDistrict."<br/>";
// echo $keywordSearch."<br/>";
?>
<script>
    masterSearch(<?php echo $amountStart;?>, <?php echo $amountEnd;?>);
</script>
<div class="container-fluid">
    <div class="row">
        <div class = "col-md-1">
            <button onclick = 'javascript:window.history.back();' class = "btn-primary">返回</button>
        </div>
    </div>
</div>
<br/>
<div class="container-fluid">
    <div id = "content"></div>
</div>
<?php require("interface2.php");?>