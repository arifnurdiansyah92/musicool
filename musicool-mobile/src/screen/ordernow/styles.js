import {StyleSheet} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {APPBAR_HEIGHT, SCREEN_WIDTH} from '../../constant'

const styles = StyleSheet.create({
  contentContainer: {
    paddingTop: APPBAR_HEIGHT,
    paddingBottom: 70,
    backgroundColor: Colors.primary.white(),
  },
  containerContentTitle: {
    backgroundColor: Colors.primary.green(),
    alignItems: 'center',
    justifyContent: 'center',
    marginBottom: 40,
  },
  contentTitle: {
    color: Colors.primary.white(1),
    fontFamily: Fonts.Roboto.bold,
    fontSize: 27,
    marginVertical: APPBAR_HEIGHT * 1.2,
  },

  content: {
    paddingHorizontal: 15,
  },
  title: {
    textTransform: 'uppercase',
    color: Colors.primary.black(1),
    fontFamily: Fonts.Roboto.regular,
    fontSize: 27.5,
    lineHeight: 32,
    marginBottom: 12,
  },
  desc: {
    color: Colors.dark.gray(),
    fontFamily: Fonts.WorkSans.light,
    lineHeight: 20,
  },
  
  halfTextFieldRight: {
    width: (SCREEN_WIDTH - 30) / 2 - 10,
    marginLeft: 10,
  },
  halfTextFieldLeft: {
    width: (SCREEN_WIDTH - 30) / 2 - 10,
    marginRight: 10,
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
