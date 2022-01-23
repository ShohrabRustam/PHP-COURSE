

<p>
echo date('Y-m-d H:i:s').'<br>';<br>

echo date('Y-m-d H:i:s', time() - 60*60*24).'<br>';<br>

echo date('F j Y, H:i:s').'<br>';<br>
echo time().'<br>';<br>
</p><br>
<h3>Output</h3>
<?php
echo date('Y-m-d H:i:s').'<br>';

echo date('Y-m-d H:i:s', time() - 60*60*24).'<br>';

echo date('F j Y, H:i:s').'<br>';
echo time().'<br>';

?>