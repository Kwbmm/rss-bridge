; <?php exit; ?> DO NOT REMOVE THIS LINE

; This file contains the default settings for RSS-Bridge. Do not change this
; file, it will be replaced on the next update of RSS-Bridge! You can specify
; your own configuration in 'config.ini.php' (copy this file).

[system]

; Defines the timezone used by RSS-Bridge
; Find a list of supported timezones at
; https://www.php.net/manual/en/timezones.php
; timezone = "UTC" (default)
timezone = "Europe/Rome"

[authentication]

; Enables authentication for all requests to this RSS-Bridge instance.
;
; Warning: You'll have to upgrade existing feeds after enabling this option!
;
; true  = enabled
; false = disabled (default)
enable = true

; The username for authentication. Insert this name when prompted for login.
username = "<?php $_ENV['AUTH_USER'] ?>"

; The password for authentication. Insert this password when prompted for login.
; Use a strong password to prevent others from guessing your login!
password = "<?php $_ENV['AUTH_PSW'] ?>"