<?php
//exec("montage b.jpg c.jpg \ -mode Concatenate -tile x1  montage_cat.jpg");
exec("montage a.jpg b.jpg c.jpg \  -geometry 300x225+2+1 montage_geom.jpg");
?>
<br />
<img src="a.jpg" />
<br />
<img src="b.jpg"/>
<br />
<img src="c.jpg"/>
===============<br />================
<img src="montage_geom.jpg"/>