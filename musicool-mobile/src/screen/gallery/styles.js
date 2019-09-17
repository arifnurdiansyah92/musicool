import {StyleSheet} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {APPBAR_HEIGHT, SCREEN_HEIGHT} from '../../constant'

const styles = StyleSheet.create({
  contentContainerWhite: {
    marginTop: APPBAR_HEIGHT,
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

  notFound: {
    flex: 1,
    alignItems: "center",
    marginTop: 20,
  },
  notFoundText: {
    fontFamily: Fonts.WorkSans.regular,
    color: Colors.dark.gray()
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
