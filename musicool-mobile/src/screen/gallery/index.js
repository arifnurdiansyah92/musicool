import React, {Component} from 'react'
import {
  Text,
  View,
  FlatList,
  StatusBar,
  Animated,
  ActivityIndicator,
} from 'react-native'

import {connect} from 'react-redux'
import {bindActionCreators} from 'redux'
import {actionCreators} from '../../modules'

import {Header, Footer, ImageButton, ImageView, TabNav} from '../../components'

import {Colors} from '../../styles'

import styles from './styles'

class Gallery extends Component {
  constructor(props) {
    super(props)

    this.state = {
      isLoading: false,
      selectedImg: null,
      showImageView: false,
      scrollY: new Animated.Value(0),
      selectedCategory: null,
    }
  }

  handleOpenModal(i) {
    this.setState({selectedImg: i, showImageView: true})
  }

  handleTabPress(i) {
    this.setState({isLoading: true, selectedCategory: i}, () =>
      this.props.setGallery(i, status => {
        if (status) {
          this.setState({isLoading: false})
        }
      }),
    )
  }

  handleReachedList() {
    const {selectedCategory} = this.state
    this.setState({isLoading: true}, () =>
      this.props.setMoreGallery(selectedCategory, status => {
        if (status) {
          this.setState({isLoading: false})
        }
      }),
    )
  }

  renderItem = ({item, index}) => (
    <View style={{paddingHorizontal: 15}}>
      <ImageButton
        source={{uri: item.image_path}}
        onPress={() => this.handleOpenModal(index)}
      />
    </View>
  )

  render() {
    const {category, gallery, nextPage} = this.props
    const {isLoading} = this.state
    const router = [{id: null, name: 'Show All'}, ...category]

    return (
      <View>
        <StatusBar backgroundColor={Colors.primary.green(1)} />
        <FlatList
          keyExtractor={item => `Gallery-Items-` + item.id}
          onScroll={Animated.event([
            {nativeEvent: {contentOffset: {y: this.state.scrollY}}},
          ])}
          data={gallery}
          renderItem={this.renderItem}
          onEndReachedThreshold={1}
          onEndReached={() => this.props.setMoreGallery()}
          contentContainerStyle={styles.contentContainerWhite}
          ListHeaderComponent={
            <View>
              <View style={styles.containerContentTitle}>
                <Text style={styles.contentTitle}>Gallery</Text>
              </View>

              <TabNav
                router={router}
                disabled={isLoading}
                onSelect={i => this.handleTabPress(i)}
              />
            </View>
          }
          ListEmptyComponent={
            !isLoading && (
              <View style={styles.notFound}>
                <Text style={styles.notFoundText}>
                  The category doesn't have an image
                </Text>
              </View>
            )
          }
          ListFooterComponent={
            <View>
              {(nextPage || isLoading) && (
                <ActivityIndicator size="large" style={{marginTop: 10}} />
              )}

              <View style={{paddingTop: 70}}>
                <Footer />
              </View>
            </View>
          }
        />

        {/* Header disimpan dibawah supaya header tidak tertimpa oleh kontent (nb: z-index pada RN versi ini tidak berfungsi dengan baik di Platform Android. Terima Kasih -Adit) */}
        <Header animationValue={this.state.scrollY} />
        <ImageView
          images={gallery ? gallery : []}
          selectedImg={this.state.selectedImg}
          isVisible={this.state.showImageView}
          onClose={() =>
            this.setState({showImageView: false, selectedImg: null})
          }
        />
      </View>
    )
  }
}

const mapStateToProps = state => ({
  ...state.gallery,
})

function mapDispatchToProps(dispatch) {
  return bindActionCreators(
    {
      setGallery: actionCreators.setGallery,
      setMoreGallery: actionCreators.setMoreGallery,
    },
    dispatch,
  )
}

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Gallery)
