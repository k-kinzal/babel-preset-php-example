<?
$Electron = require('electron');

$app = $Electron->app;
$app->on('ready', function() {
  $mainWindow = new $Electron->BrowserWindow([
    'width' => 1280,
    'height' => 960,
  ]);
  $mainWindow->loadURL('http://corp.chatwork.com/ja/recruit/engineer/#job2');
});
