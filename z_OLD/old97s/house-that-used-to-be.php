<?php include '../include/header.php';?>

<script type="text/javascript">
window.setTimeout(pageScroll, 30000); // delay scrolling for 30 seconds
function pageScroll() {
    	window.scrollBy(0,1); // horizontal and vertical scroll increments
    	scrolldelay = setTimeout('pageScroll()',100); // scrolls every 100 milliseconds
}
</script>

				<h1 class="title">House that Used to Be</h1>
			</div><!--header-->

			<div class="content">
                
				<div class="tab">
					<pre><p><?php include '../../tab/old97s/Old 97s - House that Used to Be.txt';?> </p></pre>

<?php include '../include/footer.php';?>