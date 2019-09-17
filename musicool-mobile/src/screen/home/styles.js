import {StyleSheet, StatusBar} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {SCREEN_WIDTH, SCREEN_HEIGHT, APPBAR_HEIGHT} from '../../constant'

const styles = StyleSheet.create({
  headerBGContainer: {
    width: SCREEN_WIDTH,
    height: SCREEN_HEIGHT - StatusBar.currentHeight,
    backgroundColor: Colors.light.gray(),
    overflow: 'hidden',
  },
  headerBG: {
    height: '100%',
    marginLeft: -225,
  },
  header: {
    flex: 1,
    marginLeft: 225,
    marginTop: APPBAR_HEIGHT * 2,
  },
  headerTop: {
    flex: 1,
    paddingHorizontal: 15,
  },
  headerText: {
    fontFamily: Fonts.WorkSans.regular,
    color: Colors.primary.green(1),
    fontSize: 38.5,
    lineHeight: 38.5,
    letterSpacing: -1,
  },
  headerBrand: {
    width: 190,
    height: 60,
    marginTop: 12,
  },

  headerBottom: {
    flexDirection: 'row',
    alignItems: 'flex-end',
  },
  leafImg: {
    width: 343,
    height: 200,
    paddingRight: 40,
  },
  healImg: {
    width: 58,
    height: 58,
    marginRight: 15,
    marginBottom: 15,
  },

  indicatorContainer: {
    alignItems: 'center',
    position: 'absolute',
    bottom: 15,
    right: 0,
    left: 0,
  },
  indicator: {
    width: 15,
    height: 15,
    borderRadius: 15,
    marginHorizontal: 5,
    backgroundColor: Colors.primary.white(),
  },
  indicatorActive: {
    backgroundColor: Colors.primary.green(),
  },

  contentContainerWhite: {
    paddingHorizontal: 15,
    paddingVertical: 80,
    backgroundColor: Colors.primary.white(),
  },
  contentLogo: {
    width: 198,
    height: 60,
    marginBottom: 30,
  },
  contentTitle: {
    color: Colors.primary.black(1),
    fontFamily: Fonts.Roboto.regular,
    fontSize: 33.5,
    lineHeight: 37,
    marginBottom: 30,
  },
  contentSubTitle: {
    color: Colors.primary.black(1),
    fontFamily: Fonts.Roboto.medium,
    fontSize: 20,
    lineHeight: 22,
    marginBottom: 20,
    marginTop: 5,
  },
  content: {
    fontFamily: Fonts.Roboto.regular,
    color: Colors.dark.gray(1),
    // fontSize: 14.2,
    lineHeight: 22,
    marginBottom: 15,
  },
  contentImg: {
    marginTop: 15,
    width: SCREEN_WIDTH - 30,
    height: 435,
  },

  contentContainerGrey: {
    paddingHorizontal: 15,
    paddingVertical: 80,
    backgroundColor: '#f7f7f7',
  },

  contentContainerGreen: {
    paddingHorizontal: 15,
    paddingVertical: 80,
    backgroundColor: Colors.primary.green(),
  },

  contentWebView: {
    width: SCREEN_WIDTH - 30,
    marginBottom: 15,
  },

  row: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  img: {
    width: null,
    height: null,
    flex: 1,
    resizeMode: 'contain',
  },
})

export default styles
