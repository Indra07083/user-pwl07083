<?php
/* memulai session */
session_start();

/* menghilangkan semua varibel yang telah dimasukkan */
session_unset();

/* mengakhiri session */
session_destroy();
session_regenerate_id(delete_old_session:true); // Regenerasi ID session untuk keamanan
header(header:"location: homeadmin.php");
exit;
?>