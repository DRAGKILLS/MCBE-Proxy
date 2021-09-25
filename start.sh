#!/usr/bin/env bash
if [ -d "bin/php7/bin/php" ]; then
  echo ""
else
  echo "Install PHP Binary to start the proxy"
  exit 1
fi

if [ -d "src/proxy/start.php" ]; then
  echo ""
else
  echo "start.php not found"
  exit 1
fi

bin/php7/bin/php src/proxy/start.php
