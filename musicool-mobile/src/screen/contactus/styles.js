import {StyleSheet} from 'react-native'
import {Colors, Fonts} from '../../styles'
import {APPBAR_HEIGHT} from '../../constant'

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

  infoContainer: {
    justifyContent: 'space-between',
    marginTop: 30,
  },
  infoTitle: {
    textTransform: 'capitalize',
    color: Colors.primary.black(1),
    fontFamily: Fonts.Roboto.regular,
    fontSize: 15,
    marginBottom: 5,
  },
  infoDesc: {
    color: Colors.dark.gray(),
    fontFamily: Fonts.WorkSans.light,
    lineHeight: 23,
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
