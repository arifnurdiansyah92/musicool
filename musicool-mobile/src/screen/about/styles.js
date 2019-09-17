import {StyleSheet} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {SCREEN_WIDTH, APPBAR_HEIGHT} from '../../constant'

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
  
  contentImg: {
    marginTop: 10,
    width: SCREEN_WIDTH - 30,
    height: SCREEN_WIDTH * 0.29,
  },
  brandValueText: {
    color: Colors.primary.black(1),
    fontFamily: Fonts.Roboto.regular,
    fontSize: 33.5,
    marginBottom: 20,
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
