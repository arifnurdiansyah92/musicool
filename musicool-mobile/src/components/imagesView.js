import React, {Component} from 'react'

import ImageView from 'react-native-image-view'

import {SCREEN_WIDTH} from '../constant'

export default class ImagesView extends Component {
  render() {
    const {images, isVisible, selectedImg, onClose} = this.props
    const data = images.map(i => ({
      source: {uri: i.image_path},
      title: i.image.file_name,
      width: SCREEN_WIDTH,
    }))

    return (
      <ImageView
        images={data}
        imageIndex={selectedImg ? selectedImg : 0}
        isVisible={isVisible}
        onClose={() => onClose && onClose()}
        // renderFooter={(currentImage) => (<View><Text>My footer</Text></View>)}
      />
    )
  }
}
