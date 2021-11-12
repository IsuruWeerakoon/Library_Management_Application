<div class="span12">
	<div class="header">
		<div class="pull-left">
			<img class="stilogo" src="LMS/Logo.png" class="img-rounded">
		</div>
	</div>
	<div class="alert alert-success">
		<strong style="font-family: 'Arial Black', arial-black;font-size: 20px;">&nbsp;&nbsp;Welcome to ABC Library of Sri Lanka&nbsp;</strong>
		<div class="pull-right">
			<table>
				<tr>
					<td><i class="icon-calendar icon-small" style="font-size: 20px;"></i>
                        <?php
                            $Today = date('y:m:d');
                            $new = date('d F Y, l', strtotime($Today));
                            echo $new.'.  ';
                        ?>&nbsp;&nbsp;</td>
					<td id="Hour"></td>
					<td id="Minut"></td>
					<td id="Second"></td>
				<tr>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
    function timedMsg()
    {
        var t=setInterval("change_time();",1000);
    }
    function change_time()
    {
        var d = new Date();
        var hour=d.getHours();
        var minute=d.getMinutes();
        var second=d.getSeconds();
        if(hour <10 ){hour='0'+hour;}
        if(minute <10 ) {minute='0' + minute; }
        if(second<10){second='0' + second;}
        document.getElementById('Hour').innerHTML =hour+':';
        document.getElementById('Minut').innerHTML=minute+':';
        document.getElementById('Second').innerHTML=second;
    }
    timedMsg();
</script>