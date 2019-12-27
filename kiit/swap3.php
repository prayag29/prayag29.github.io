<script type="text/javascript">
	function show()
	{
		t=document.getElementById("s").innerHTML;
		document.getElementById("s").innerHTML=document.getElementById("i").value;
		document.getElementById("i").value=t;
	}

</script>





<span id="s">hi</span>
<br>
<input id="i" value="bye">
<br>
<input type="button" value="swap" onclick="swap()">
