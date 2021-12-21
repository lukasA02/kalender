<?php
session_start();

if(isset($_SESSION['behorighet'])) {
    echo $_SESSION['behorighet'];
}