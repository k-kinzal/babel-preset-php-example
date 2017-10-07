var React = require("react");

var ReactNative = require("react-native");

var StyleSheet = ReactNative.StyleSheet;
var WebView = ReactNative.WebView;
var View = ReactNative.View;
var Image = ReactNative.Image;
var styles = StyleSheet.create({
  container: {
    width: "100%",
    height: "100%"
  }
});

var App = props => {
  return React.createElement(WebView, {
    source: {
      uri: "http://corp.chatwork.com/ja/recruit/engineer/#job2"
    },
    style: styles.container
  }, undefined);
};

module.exports = App;
