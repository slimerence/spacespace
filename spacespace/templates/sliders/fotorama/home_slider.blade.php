<?php
    if(array_key_exists('slider_home_page',$sliders)){
        $homeSlider = $sliders['slider_home_page'];
    }else{
        return;
    }

    $images = $homeSlider->getImages();

    // 为了保持美观,所有的照片的尺寸,都要和第一张的一样,因此需要强制调整一下
    $ratio = null;
    $width = '100%';
    $height = 'auto';
    if(count($images) > 0){
        foreach ($images as $image) {
            if($homeSlider->images_per_frame>1){
                $width = (string)$image->width;
                $height = (string)$image->height;
                $ratio = 'is-'.substr($width,0,1).'by'.substr($height,0,1);
            }
            break;
        }
    }
?>
@if($agentObject->isPhone())
    <div class="carousel carousel-animated carousel-animate-slide"
         data-autoplay="true" data-delay="{{ $homeSlider->interval }}">
        <div class='carousel-container'>
            @foreach($images as $idx=>$image)
                <div class='carousel-item has-background {{ $idx==0 ? 'is-active':null }}'>
                    <img class="is-background" src="{{ $image->url }}" style="width: {{ $width }}; height: {{ $height }};" />
                </div>
            @endforeach
        </div>
        <div class="carousel-navigation {{ $homeSlider->overlay }}">
            <div class="carousel-nav-left">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="carousel-nav-right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div>
@else
    <?php
//    $dataAttributes = $homeSlider->need_thumbnail ? 'data-nav="thumbs" data-navposition="'.$homeSlider->thumbnail_position.'" ' : '';
    $dataAttributes = 'data-nav="false" '.$homeSlider->attributes_text;
    ?>
    <div class="fotorama full-width" data-autoplay="true" data-loop="true" data-fit="contain" data-width="100%" {!! $dataAttributes !!}>
        @foreach($images as $idx=>$sliderImage)
            <img src="{{ $sliderImage->url }}" alt="{{ $idx }}"/>
        @endforeach
    </div>
@endif