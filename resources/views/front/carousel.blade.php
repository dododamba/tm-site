<div class="container">
    <div class='row'>
        <div class='col-md-offset-2 col-md-8'>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
                @foreach ($citation as $item)
                <li data-target="#quote-carousel" data-slide-to="{{ $item->if  }}" @if($item->id == 1 ) class="active" @endif></li>
                @endforeach
            </ol>
            
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
            
              <!-- Quote 1 -->
              
              <!-- Quote 2 -->
    
    
              @foreach($citation as $item)

              <div @if($item->id == 1 ) class="item active" @else class="item" @endif>
                  <blockquote>
                    <div class="row">
                        <div class="col-sm-1 text-center">
                          </div>
                      <div class="col-sm-10">
                        <p>{{ $item->auteur  }}.</p>
                        <small>{{ $item->texte  }} </small>
                      </div>
                      <div class="col-sm-1">
                        </div>
                    </div>
                  </blockquote>
                </div>       
              @endforeach          
             

           

            </div>
            
            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div>                          
        </div>
      </div>
</div>