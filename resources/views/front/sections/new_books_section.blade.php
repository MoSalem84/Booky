
<div class="categories-collections">
    <div class="container">
        {{-- book slide bar --}}
        <div class="col-lg-12">
            <div class="collections">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Explore New <em>Arrived Books </em> In Booky.</h2>

                    {{-- @include('front.inc.message') --}}


                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="owl-collection owl-carousel">

                    @foreach ($books as $book)

                    <div class="item">

              <a href="{{route('front.book.details' , $book->id)}}">
              <img src="front\assets\images\books/{{ $book->image }}" height="450" width="200">
              </a>
                     <div class="down-content">

                        <h4>{{$book->title}}</h4>
                        <span class="category">Author<br><strong>{{$book->author_name}}</strong></span>
                        <span class="category">Category<br><strong>{{$book->category_name}}</strong></span>
                        {{-- <span class="collection">Items In Collection:<br><strong>310/340</strong></span> --}}

                          </br>
                        
                      </div>
                    </div>

                    @endforeach

                  </div>
                </div>
              </div>
            </div>
          </div>
                {{-- end book slide bar --}}


        </div>
    </div></div>
