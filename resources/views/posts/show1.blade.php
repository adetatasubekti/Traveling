<div class="row icon-boxes">
      @forelse ($posts as $post)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon">
            <img src="{{asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 160px">                      
            </div>
            <h4 class="title"><a href="">{{ $post->title }}</a></h4> 
            <a href="{{ route('posts.show1', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
          </div>
        </div>
        @empty
      @endforelse
      </div>
    </div>