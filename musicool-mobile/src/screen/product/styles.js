import {StyleSheet} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {SCREEN_WIDTH} from '../../constant'

const styles = StyleSheet.create({
  contentContainerWhite: {
    paddingHorizontal: 15,
    paddingVertical: 110,
    backgroundColor: Colors.primary.white(),
  },
  contentContainerGrey: {
    paddingHorizontal: 15,
    paddingVertical: 110,
    backgroundColor: '#f7f7f7',
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
    color: Colors.dark.blue(1),
    fontFamily: Fonts.Roboto.regular,
    fontSize: 33.5,
    lineHeight: 37,
    marginBottom: 25,
  },
  greenText: {
    color: Colors.primary.green(1),
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
    marginBottom: 15,
  },
  contentImg: {
    marginHorizontal: 15,
    width: SCREEN_WIDTH - 60,
    height: SCREEN_WIDTH - 60,
    borderRadius: 10,
    marginBottom: 50,
    overflow: 'hidden',
  },
  contentMark: {
    color: Colors.dark.gray(),
    fontSize: 6,
    marginTop: 8,
    marginRight: 10,
  },

  btn: {
    backgroundColor: Colors.primary.white(),
    borderColor: Colors.primary.green(),
    borderWidth: 2,
    borderRadius: 5,
  },
  btnText: {
    fontFamily: Fonts.Roboto.regular,
    paddingHorizontal: 30,
    paddingVertical: 6,
    fontSize: 13,
    color: Colors.primary.green(),
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
