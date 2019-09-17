import {StyleSheet} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {SCREEN_WIDTH} from '../../constant'

const styles = StyleSheet.create({
  contentContainerWhite: {
    paddingHorizontal: 15,
    paddingVertical: 110,
    backgroundColor: Colors.primary.white(),
  },
  contentBigTitle: {
    color: Colors.primary.gray(1),
    fontFamily: Fonts.Roboto.light,
    fontSize: 65,
  },
  contentTitleLine: {
    marginTop: -12,
    height: 0.5,
    backgroundColor: Colors.primary.green(),
    marginBottom: 72,
    width: '100%',
  },
  contentTitle: {
    color: Colors.primary.black(1),
    fontFamily: Fonts.Roboto.regular,
    fontSize: 27.5,
    lineHeight: 32,
    marginBottom: 12,
  },
  contentSubTitle: {
    color: Colors.primary.black(1),
    fontFamily: Fonts.WorkSans.medium,
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
    marginBottom: 14,
  },
  contentImg: {
    width: SCREEN_WIDTH - 30,
    height: 180,
    marginBottom: 20,
    borderRadius: 5,
    overflow: "hidden"
  },

  readMoreLine: {
    flex: 1,
    height: 0.8,
    backgroundColor: Colors.primary.gray(0.5),
  },
  readMoreBtn: {
    marginLeft: 22,
    flexDirection: "row",
    alignItems: "center"
  },
  readMoreBtnText: {
    fontSize: 12,
    fontFamily: Fonts.Roboto.regular,
    color: Colors.primary.green(),
    letterSpacing: 1
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
