<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['login'])) {
   redirect('index.php');
}
