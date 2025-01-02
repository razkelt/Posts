<?php

echo($_POST['key'] . ' ' . password_hash($_POST['password'], PASSWORD_DEFAULT));
