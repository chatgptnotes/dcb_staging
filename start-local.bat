@echo off
REM ============================================================
REM  decodemybrain - one-click local startup
REM  Starts XAMPP MySQL + Laravel dev server, then opens browser.
REM ============================================================

echo [1/4] Starting MySQL...
start "MySQL" /min "C:\xampp\mysql\bin\mysqld.exe" --defaults-file="C:\xampp\mysql\bin\my.ini"

echo [2/4] Waiting for MySQL to accept connections...
:waitmysql
"C:\xampp\mysql\bin\mysql.exe" -u root -e "SELECT 1;" decodemy_app >nul 2>&1
if errorlevel 1 (
    timeout /t 1 /nobreak >nul
    goto waitmysql
)
echo       MySQL is up.

echo [3/4] Clearing login rate-limiter cache...
cd /d "%~dp0laravel-app"
"C:\xampp\php\php.exe" artisan cache:clear >nul 2>&1

echo [4/4] Starting Laravel server at http://127.0.0.1:8000 ...
taskkill /IM php.exe /F >nul 2>&1
start "Laravel Server" "C:\xampp\php\php.exe" -S 127.0.0.1:8000 -t public server.php

timeout /t 3 /nobreak >nul
start "" "http://127.0.0.1:8000/admin"

echo.
echo ============================================================
echo  Site:   http://127.0.0.1:8000
echo  Admin:  http://127.0.0.1:8000/admin
echo  Login:  admin123@gmail.com  /  admin123
echo ============================================================
echo  Leave the two opened windows (MySQL + Laravel) running.
echo  Close this window when you are done for the day.
echo.
pause
