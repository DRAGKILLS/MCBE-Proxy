@echo off
title Proxy by Frago9876543210
set BIN_PATH = "null"
set PROXY_PATH = "null"
:proxy_start
if exist bin\php\php.exe (
    set BIN_PATH = bin\php\php.exe
) else (
    echo Install PHP Binary to start the proxy
    exit 1
)
if exist src\proxy\start.php (
    set PROXY_PATH = src\proxy\start.php
) else (
    echo start.php not found
    exit 1
)
bin\php\php.exe src\proxy\start.php
timeout 5
goto proxy_start
pause
