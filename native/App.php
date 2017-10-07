<?
$React = require("react");

$ReactNative = require("react-native");
$StyleSheet = $ReactNative->StyleSheet;
$Text = $ReactNative->Text;
$View = $ReactNative->View;
$Image = $ReactNative->Image;

$styles = $StyleSheet->create([
  'container' => [
    'flex' => 1,
    'backgroundColor' => '#fff',
    'alignItems' => 'center',
    'justifyContent' => 'center'
  ]
]);

$App = function($props) {
  return React->createElement($View, ['style' => styles->container], [
    React->createElement($Image, [
      'key' => 1,
      'style' => [
        'width' => 470,
        'height' => 280,
      ],
      'source' => ['uri' => 'https://go.chatwork.com/ja/image/download/img_vt_normal.png']
    ], null)
  ]);
};

$module->exports = $App;
