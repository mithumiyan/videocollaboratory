<?php
  if(!is_dir("c:/videoshare/uploaded"))
     mkdir("c:/videoshare/uploaded", 0755);
     move_uploaded_file($_FILES['Filedata']['tmp_name'],
     "c:/videoshare/uploaded/".$_FILES['Filedata']['name']);
?>