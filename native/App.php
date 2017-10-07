<?
$React = require("react");

$ReactNative = require("react-native");
$StyleSheet = $ReactNative->StyleSheet;
$WebView = $ReactNative->WebView;
$View = $ReactNative->View;
$Image = $ReactNative->Image;

$styles = $StyleSheet->create([
  'container' => [
    'width' => '100%',
    'height' => '100%',
  ]
]);

$App = function($props) {
  return React->createElement($WebView, [
    'source' => ['uri' => 'http://corp.chatwork.com/ja/recruit/engineer/#job2'],
    'style' => styles->container,
  ], null);
};

$module->exports = $App;
