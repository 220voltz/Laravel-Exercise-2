<style type="text/css">
  .slider-control {
  position: absolute;
  right: 30px;
  bottom: 30px;
  width: 80px;
  overflow: hidden;
  border-radius: 3px;
  box-shadow: 0 3px 3px 3px rgba(0, 0, 0, 0.15);
  z-index: 99;
}

.slider-control .control {
  width: 50%;
  height: 40px;
  display: block;
  float: left;
  text-align: center;
  line-height: 40px;
  cursor: pointer;
  transition: .3s all ease;
  background: white;
}

.slider-control .control .icon {
  pointer-events: none;
  transition: .3s all ease;
}

.slider-control .control.disabled {
  pointer-events: none;
  background: #ddd;
}

.slider-control .control.disabled .icon { opacity: .5; }
</style>
<div class="slider-ctr">
  <figure class="slide"><img src="1.jpeg">
    <figcaption> 
      <div class="title">Image 1</div>
      <div class="author">Author 1</div>
    </figcaption>
  </figure>
  <figure class="slide"><img src="2.jpeg">
    <figcaption> 
      <div class="title">Image 2</div>
      <div class="author">Author 2</div>
    </figcaption>
  </figure>
  <figure class="slide"><img src="3.jpeg">
    <figcaption>
      <div class="title">Image 3</div>
      <div class="author">Author 3</div>
    </figcaption>
  </figure>
  <figure class="slide text-on"><img src="4.jpeg">
    <figcaption>
      <div class="title">Image 4</div>
      <div class="author">Author 4</div>
    </figcaption>
  </figure>
  <div class="slider-control">
    <div class="control prev disabled">
      <div class="icon ion-chevron-left"></div>
    </div>
    <div class="control next">
      <div class="icon ion-chevron-right"></div>
    </div>
  </div>
</div>