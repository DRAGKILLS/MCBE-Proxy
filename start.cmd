@echo off

title Proxy by Frago9876543210

:proxy_start
if not exist bin\php\php.exe (
    echo Install PHP Binary to start the proxy
    exit 1
)

if not exist src\proxy\start.php (
    echo start.php not found
    exit 1
)

bin\php\php.exe src\proxy\start.php
timeout 5
goto proxy_start

pause
