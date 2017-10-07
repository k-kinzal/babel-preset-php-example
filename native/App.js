var React = require("react");

var ReactNative = require("react-native");

var StyleSheet = ReactNative.StyleSheet;
var Text = ReactNative.Text;
var View = ReactNative.View;
var Image = ReactNative.Image;
var styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
    alignItems: "center",
    justifyContent: "center"
  }
});

var App = props => {
  return React.createElement(View, {
    style: styles.container
  }, [React.createElement(Image, {
    key: 1,
    style: {
      width: 470,
      height: 280
    },
    source: {
      uri: "https://go.chatwork.com/ja/image/download/img_vt_normal.png"
    }
  }, undefined)]);
};

module.exports = App;
