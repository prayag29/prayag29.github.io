<script type="text/javascript">
	function show()
	{
		i=document.getElementById("f").value;
		j=document.getElementById("s").value;
	}

	function swap()
	{
		r=i;
		i=j;
		j=r;
	}
</script>

Fno: <input type="text" id="f">
<br>
Sno: <input type="text" id="s">
<br>
<input type="button" value="done" onclick="show()">
<br>
<p>before swap</p>
<br>
<p>first:</p> <h1 id="f"></h1>
<p>second:</p> <h1 id="s"></h1>
<br>
<input type="button" value="swap" onclick="swap()">


<p>after swap</p>
<br>
<p>first:</p> <h1 id="f"></h1>
<p>second:</p> <h1 id="s"></h1>
