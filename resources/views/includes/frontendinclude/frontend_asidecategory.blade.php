<aside class="shop-sidebar">
        <div class="shop-widget mb--40">
            <h3 class="widget-title mb--25">Category</h3>
            <ul class="widget-list category-list">
                <li>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            
                          @foreach($categories as $cat)
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#{{$cat->name}}">{{ $cat->name }}</a>
                                </h4>
                            </div>
                            <div id="{{$cat->name}}" class="panel-collapse collapse">
                                <ul>
                                @foreach($cat->categories as $subcat)
                                    @if($subcat->status == "1")
                                        <li style="margin:0px;"><a href="{{ url('/products/'. $subcat->url) }}">{{ $subcat->name }}</a></li>
                                    @endif
                                @endforeach 
                                </ul>
                            </div>
                          @endforeach
                          
                          <?php //echo $categories_menu; ?>
                        </div>
                    </div>
                    
                    
                </li>
            </ul>
        </div>
        <div class="shop-widget mb--40">
            <h3 class="widget-title mb--25">Price</h3>
            <ul class="widget-list price-list">
                <li>
                    <a href="{{ url('/sort-products')}}">
                        <span>Low - High</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/sortdesc-products')}}">
                        <span>High - Low</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>